<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
            return response([
                'message'=>'Account created successfully'
            ]);
        }
    }

    private function newUser(array $data){
        return User::create([
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
    }
}
