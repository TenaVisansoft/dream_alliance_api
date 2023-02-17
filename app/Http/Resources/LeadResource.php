<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'created_for' => $this->created_for->name,
            'name' => $this->name,
            'about' => $this->about,
            'gender' => $this->gender->name,
            'dob' => $this->dob,
            'language' => $this->language->name,
            'religion' => $this->religion->name,
            'other_religion_willingness' => $this->other_religions_willingness,
            'caste' => $this->caste->name,
            'sub_caste' => $this->sub_caste->name,
            'other_caste_willingness' => $this->other_communities_willingness,
            'phone' => $this->phone,
            'email' => $this->email,
            'birth_country' => $this->birth_country_id ? $this->birth_country->name : null,
            'birth_state' => $this->birth_state_id ? $this->birth_state->name: null,
            'birth_city' => $this->birth_city_id ? $this->birth_city->name: null,
            'birth_time' => $this->birth_time ,
            'marital_status' => $this->marital_status_id ? $this->marital_status->name : null,
            'weight' => $this->weight_id ? $this->weight->name : null, 
            'height' => $this->height_id ? $this->height->name : null,
            'body_type' => $this->body_type_id ? $this->body_type->name : null,
            'star' => $this->star_id ? $this->star->name : null,
            'zodiac' => $this->zodiac_id ? $this->zodiac->name : null,
            'gothra' => $this->gothra ? $this->gothra : null ,
            'dosham' => $this->dosham_id ? $this->dosham->name : null,
            'family_type' => $this->family_type_id ? $this->family_type->name : null,
            'family_status' => $this->family_status_id ? $this->family_status->name : null,
            'family_value' => $this->family_values_id ? $this->family_values->name : null,
            'physical_status_id' => $this->physical_status_id ? $this->physical_status->name : null
        ];
    }
}
