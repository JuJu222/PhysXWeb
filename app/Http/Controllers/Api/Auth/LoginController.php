<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
class LoginController extends Controller
{
    private $client;



    public function __construct()
    {
        $this->client = Client::skip(1)->first(); //cari client id-ke-2   
    }

    public function login(Request $request)
    { //request berisi data data dari user (Form)
        $user = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'user',
            'is_login' => '0',
            'is_active' => '1'
        ];

        $check = DB::table('users')->where('email', $request->email)->first();

        if ($check->is_active == '1') {
            if ($check->is_login == '0') {
                if (Auth::attempt($user)) {
                    $this->isLogin(Auth::id()); //mengirim parameter id dari Auth

                    //Generate Token
                    $response = Http::asForm()->post('http://physxweb.test/oauth/token',[
                        'grant_type' => 'password',
                        'client_id' => $this->client->id,
                        'client_secret' => $this->client->secret,
                        'username' => $request->email,
                        'password' => $request->password,
                        'scope' => '*',
                    ]);
                    return $response->json();
                } else {
                    return response([
                        'message' => 'Login Failed'
                    ]);
                }
            } else {
                return response([
                    'message' => 'Account is used'
                ]);
            }
        } else {
            return response([
                'message' => 'Account is suspended'
            ]);
        }
    }

    private function isLogin($id)
    {
        $user = User::findorFail($id);
        return $user->update([
           'is_login' => '1'
        ]);
    }

    public function refresh(Request $request){
        $this->validate($request,[
            'refresh_token' => 'required',
        ], [
            'refresh_token' => 'refresh token is required',
        ]);

        $response = Http::asForm()->post('http://physxweb.test/oauth/token', [

            'grant_type' => 'refresh_token',
            'refresh_token' => $request->refresh_token,
            'client_id' => $this->client_id,
            'client_secret' => $this->client->secret,
            'scope' => '*',
        ]);

        return $response->json();
    }

    public function logout(){
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $accessToken = $user->token();
        //Blokir akses
        DB::table('oauth_refresh_tokens')->where('access_token_id',$accessToken->id)->update(['revoked' => true]);

        $user->update([
            'is_login' => '0',
        ]);

        $accessToken->revoke();

        return response([
            'message' => 'Logged Out',
        ]);
    }
}

