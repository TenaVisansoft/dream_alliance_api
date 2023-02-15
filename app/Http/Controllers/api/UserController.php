<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ResponseHelper;
use App\Traits\Utility;
use App\Models\User;
use App\Models\Profile;
Use \Carbon\Carbon;

class UserController extends Controller
{
    use ResponseHelper, Utility;


    public function user($id,Request $request){

        $user = User::where('id',$id)->first();
        $profile = Profile::where('user_id',$id)->first();

        $data = [
            'personal_details' => [
                'matrimony_id' => $profile->matrimony_id,
                'name' => $profile->name,
                'about' => $profile->about,
                'gender' => $profile->gender->name,
                'weight' => $profile->weight->name, 
                'height' => $profile->height->name,
                'dob' => $profile->dob, 
                'age' => Carbon::parse($profile->dob)->diffInYears(), 
                'marital_status' => $profile->marital_status->name,
                'language' => $profile->language->name,
                'eating_habit' => $profile->eating_habit->name,
                'drinking_habit' => $profile->drinking_habit->name,
                'smoking_habit' => $profile->smoking_habit->name,
                'resident_status' => $profile->resident_status->name,
                'country' => $profile->country->name,
                'state' => $profile->state->name,
                'district' => $profile->district->name,
                'city' => $profile->city->name,
                'phone' => $profile->phone,
            ],
            'religion_details' => [
                'religion' => $profile->religion->name,
                'caste' => $profile->religion->caste,
                'sub_caste' => $profile->sub_caste->name,
            ],
            'partner_details' => [
                'height_minimum' => $profile->partnerPreferences->height_minimum,
                'mother_tongue' => $profile->partnerPreferences->mother_tongue->name,
            ],   
            'profession_details' => [
                'education' => $profile->education->name,
                'annual_income' => $profile->annual_income->name,
                'occupation' => $profile->occupation->name,
                'employed_in' => $profile->employed_in->name,
            ],

        ];
        return $this->successResponse($data, 200,"Successfully returned user details");

    }
}
