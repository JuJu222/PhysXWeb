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
        ];

        if (Auth::attempt($user)) {
            //Generate Token
            $response = Http::asForm()->post('http://uas3.test/oauth/token',[
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
    }

    public function refresh(Request $request){
        $this->validate($request,[
            'refresh_token' => 'required',
        ], [
            'refresh_token' => 'refresh token is required',
        ]);

        $response = Http::asForm()->post('http://uas3.test/oauth/token', [

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

        $accessToken->revoke();

        return response([
            'message' => 'Logged Out',
        ]);
    }
}

