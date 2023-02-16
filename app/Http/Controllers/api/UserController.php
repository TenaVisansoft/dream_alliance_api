<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
use App\Traits\ResponseHelper;
use App\Traits\Utility;
use App\Models\Profile;
Use \Carbon\Carbon;

class UserController extends Controller
{
    use ResponseHelper, Utility;


    public function user($id,Profile $profile){

        return $this->successResponse(new ProfileResource($profile->where('user_id',$id)->first()), 200,"Successfully returned user details");
    }
}
