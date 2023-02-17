<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateApiAcess extends Controller
{
    public function register(Request $request){
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if(!$validator->passes()){
            return response()->json([
                $validator->errors(), 202
            ]);
        }else{
            $data = $request->all();
            $data['password'] =  bcrypt($data['password']);

            $user = User::create($data);

            $resposeArray = [];
            $resposeArray['token'] = $user->createToken('api-application')->accessToken;
            $resposeArray['name'] = $user->name;

            return response()->json($resposeArray, 200);
        }
    }


    public function login(Request $request){
        if(Auth::attempt(['email'=> $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $resposeArray = [];
            $resposeArray['token'] = $user->createToken('api-application')->accessToken;
            $resposeArray['name'] = $user->name;

            return response()->json($resposeArray, 200);

        }else{
            return response()->json([
                'error' => 'Unauthorized Access',
            ]);
        }
    }

    public function logout(){
        $token = Auth::user()->token();
        $token->revoke();
        return response()->json([
            'message' => 'You have successfully logged out!'
        ], 200);
    }
}
