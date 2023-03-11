<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $req){
    if(!$req->email&& !$req->password){
        return response(["message"=>"email and password is required"]);
    }else{
        $user=User::where('email',$req->email)->first();
        if($user){
            if($user->password === $req->password){
                $token=$user->createToken('authToken')->plainTextToken;
                return response(["user"=>$user,'accessToken'=>$token]);
            }else{
                return response(['message'=>"Invalid Password"]);
            }
        }
        return response(['message'=>"User not found"]);
    }      
    }
}