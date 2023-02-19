<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Admin;

use App\Models\Student;
use Validator;

class AuthController extends Controller
{
    //
    public function register_admin(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:6|max:100|unique:admins',
            'name' => 'required|string|min:6|max:100',
            'password'=>'required|string|min:6|max:8',
            'confirm_password'=>'required_with:password|same:password|min:6',
            'phone_number'=>'required|string|min:11|max:11',
            'address'=>'required|string|min:10|max:100',
            'email'=>'required|email|min:25|max:100|unique:admins',
            'image_id'=>'required|numeric',
            'gender_id'=>'required|numeric',
            'role'=>'required|string|min:8|max:26',

        ]);

        $user = new Admin([
            'username'  => $request->username,
            'name'  => $request->name,
            'password' => bcrypt($request->password),
            'confirm_password' => bcrypt($request->password),
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'email' => $request->email,
            'image_id' => $request->image_id,
            'gender_id' => $request->gender_id,
            'role' => $request->role,
        ]);

        if($user->save()){
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->plainTextToken;
            return response()->json([
                'message' => 'Successfully created admin!',
                'accessToken'=> $token,
            ],201);
        }
        else{
            return response()->json(['error'=>'Provide proper details']);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = request(['username','password']);
        $token = Auth::attempt($credentials);
        if(!Auth::attempt($credentials))
        {
            return response()->json([
                'message' => 'Unauthorized'
            ],401);
        }

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->plainTextToken;

        return response()->json([
            'accessToken' =>$token,
            'user' =>$user,
            'token_type' => 'Bearer',
        ]);

    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);

    }

}
