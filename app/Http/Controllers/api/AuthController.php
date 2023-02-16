<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ResponseHelper;
use App\Traits\Utility;

class AuthController extends Controller
{
    use ResponseHelper, Utility;

    public function register(Request $request, User $user){

        $rules = array(
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        );

        $messages=array(
            'email.required' => 'Email is required.',
            'email.unique' => 'This E-mail ID has already been taken. Please register with a different E-mail ID.',
            'email.email' => 'Entered E-mail is Incorrect.',
            'password.required' => 'Password is required.',
        );

        $validator=Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return $this->validationFailed($validator->errors(),"The given data was invalid.");
        }

        $user = User::create([
            'email' => $request->email,
            'password' => \Hash::make($request->password),
        ]);

        return $this->successResponse(new UserResource($user), 200,"Successfully Registered");
    }

    public function login(Request $request)
    {

        $rules = array(
            'email' => 'required|email',
            'password' => 'required|string',
        );

        $messages=array(
            'email.required' => 'Email is required.',
            'email.email' => 'Entered E-mail is Incorrect.',
            'password.required' => 'Password is required.',
        );

        $validator=Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return $this->validationFailed($validator->errors(),"The given data was invalid.");
        }

        $user = User::where('email', $request->email)->get()->first();

        if ($user && \Hash::check($request->password, $user->password)) {

            return $this->successResponse(new UserResource($user),200,'Successfully Logged in');
        }
        else {
            return $this->errorResponse("Invalid Login Credentials",400,"Failed to Login");
        }

    }
}
