<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\LeadResource;
use Illuminate\Http\Request;
use App\Traits\ResponseHelper;
use App\Traits\Utility;
use App\Models\Lead;

class LeadController extends Controller
{
   use ResponseHelper, Utility;

   public function basic_detail(Request $request){

        $rules = array(
            'created_for' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'mother_tongue' => 'required',
            'religion' => 'required',
            'other_religion_willingness' => 'required',
            'caste' => 'required',
            'sub_caste' => 'required',
            'other_caste_willingness' => 'required',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email|unique:leads,email',
            'password' => 'required',
        );

        $messages=array(
            'created_for.required' => 'Created for is required.',
            'name.required' => 'Name is required.',
            'gender.required' => 'Gender is required.',
            'dob.required' => 'Date of birth is required.',
            'mother_tongue.required' => 'Mother tongue is required.',
            'religion.required' => 'Religion is required.',
            'other_religion_willingness.required' => 'Other religion willingness is required.',
            'caste.required' => 'Caste is required.',
            'sub_caste.required' => 'Sub caste is required.',
            'other_caste_willingness.required' => 'Other caste willingness is required.',
            'phone.required' => 'Phone is required.',
            'email.required' => 'Email is required.',
            'email.unique' => 'This E-mail ID has already been taken. Please use different E-mail ID.',
            'email.email' => 'Entered E-mail is Incorrect.',
            'password.required' => 'Password is required.',
        );

        $validator=Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return $this->validationFailed($validator->errors(),"The given data was invalid.");
        }

        $lead = Lead::create([
            'created_for_id' => $request->created_for,
            'name' => $request->name,
            'gender_id' => $request->gender,
            'dob' => $request->dob,
            'language_id' => $request->mother_tongue,
            'religion_id' => $request->religion,
            'other_religions_willingness' => $request->other_religion_willingness,
            'caste_id' => $request->caste,
            'sub_caste_id' => $request->sub_caste,
            'other_communities_willingness' => $request->other_caste_willingness,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
        ]);

        return $this->successResponse(new LeadResource($lead), 200,"Successfully added basic details");

   }

    public function personal_religion_details($id,Request $request,Lead $lead){

        $rules = array(
            'birth_country' => 'required',
            'birth_state' => 'required',
            'birth_city' => 'required',
            'birth_time' => 'required',
            'marital_status' => 'required',
            'height' => 'required',
            'body_type' => 'required',
            'weight' => 'required',
            'family_status' => 'required',
            'family_type' => 'required',
            'family_value' => 'required',
            'physical_status' => 'required',
        );

        $messages=array(
            'birth_country.required' => 'Birth Country is required.',
            'birth_state.required' => 'Birth State is required.',
            'birth_city.required' => 'Birth City is required.',
            'birth_time.required' => 'Birth time is required.',
            'marital_status.required' => 'Marital Status is required.',
            'height.required' => 'Height is required.',
            'body_type.required' => 'Body Type is required.',
            'weight.required' => 'Weight is required.',
            'family_status.required' => 'Family status is required.',
            'family_type.required' => 'Family type is required.',
            'family_value.required' => 'Family value is required.',
            'physical_status.required' => 'Physical status is required.'
        );

        $validator=Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()) {
            return $this->validationFailed($validator->errors(),"The given data was invalid.");
        }

        Lead::where('id', $id)->update([
           'birth_country_id' => $request->birth_country,
            'birth_state_id' => $request->birth_state,
            'birth_city_id' => $request->birth_city,
            'birth_time' => $request->birth_time,
            'marital_status_id' => $request->marital_status,
            'height_id' => $request->height,
            'body_type_id' => $request->body_type,
            'weight_id' => $request->weight,
            'star_id' => $request->star,
            'zodiac_id' => $request->zodiac,
            'gothra' => $request->gothra,
            'dosham_id' => $request->dosham_id,
            'family_type_id' => $request->family_type,
            'family_status_id' => $request->family_status,
            'family_values_id' => $request->family_value,
            'physical_status_id' => $request->physical_status
        ]);

        return $this->successResponse(new LeadResource($lead->where('id',$id)->first()), 200,"Successfully added personal and religional details");
    }

    
}
