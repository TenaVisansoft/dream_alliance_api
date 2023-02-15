<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Traits\ResponseHelper;
use App\Traits\Utility;
use App\Models\User;

class AuthController extends Controller
{
    use ResponseHelper, Utility;

    public function register(Request $request){

        $rules = array(
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone|digits:10',
            'password' => 'required|string',
            
        );

        $validator=Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return $this->validationFailed($validator->errors(),"The given data was invalid.");
        }

        //$tt = Response::json($request['name']);
        $json = json_decode($request['name',true);
        return $json;

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => \Hash::make($request->password),
            'fcm_token' => $request->fcm_token,
        ]);

        return $this->successResponse($user, 200,"Successfully Registered");

    }

    public function login(Request $request)
    {
        $rules=array(
            'email' => 'required|email',
            'password' => 'required|string',
        );

        $validator=Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return $this->validationFailed($validator->errors(),"The given data was invalid.");
        }
        
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            
            $auth_token = auth()->user()->generateAndSaveApiAuthToken();
            
            $user = User::where('email', $request->email)->get()->first();

            $data = [
                'user_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'auth_token' => $user->api_token,  
            ];

            return $this->successResponse($data,200,'Successfully Logged in');
        }
        else {
            return $this->errorResponse("Invalid Login Credentials",400,"Failed to Login");
        }
    }
}
