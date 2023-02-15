<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;
use App\Traits\ResponseHelper;
use App\Traits\Utility;
use App\Models\User;

class UserController extends Controller
{
    use ResponseHelper, Utility;
    
    // public function users(Request $request){

    //     $users = User::select('id','name','email','phone')->get();
    //     return $this->successResponse($users , 200,'Users Returned Successfully');

    // }

    public function users(User $user){

        $data = new UserCollection($user->get());
        return $this->successResponse($data , 200,'Users Returned Successfully');
    }

    public function user($id,Request $request){

        $users = User::select('id','name','email','phone')->where('id',$id)->first();
        return $this->successResponse($users , 200,'User Returned Successfully');

    }
}
