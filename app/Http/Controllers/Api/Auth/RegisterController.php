<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Fis10User;
use App\Models\Log;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'username' => 'required|string|unique:users',
            'school' => 'required|string',
            'city' => 'required|string',
            'birthyear' => 'required|integer'
        ]);

        $user = $this->newUser($request->all());

        if (empty($user)){
            return response([
                'message' => 'Failed to create account'
            ]);
        }else{
            Log::query()->create([
                'user_id' => User::query()->latest()->first()->id,
                'table' => 'users',
                'path' => 'Api/Auth/RegisterController@register',
                'action' => 'Register user ' . User::query()->latest()->first()->id,
                'url' => $request->fullUrl(),
                'ip_address' => $request->ip(),
            ]);

            return response([
                'message'=>'Account created successfully'
            ]);
        }
    }

    private function newUser(array $data){
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username' => $data['username'],
            'school' => $data['school'],
            'city' => $data['city'],
            'birthyear' => $data['birthyear'],
            'role' => 'user',
            'created_at' => Carbon::now()
        ]);

        Fis10User::create([
            'fis10_user_id' => $user->id,
            'user_id' => $user->id
        ]);

        return $user;
    }
}
