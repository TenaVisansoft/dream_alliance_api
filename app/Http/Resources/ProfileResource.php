<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class ProfileResource extends JsonResource
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
            'personal_details' => [
                'matrimony_id' => $this->matrimony_id,
                'name' => $this->name,
                'about' => $this->about,
                'gender' => $this->gender->name,
                'weight' => $this->weight->name, 
                'height' => $this->height->name,
                'dob' => $this->dob, 
                'age' => Carbon::parse($this->dob)->diffInYears(), 
                'marital_status' => $this->marital_status->name,
                'language' => $this->language->name,
                'eating_habit' => $this->eating_habit->name,
                'drinking_habit' => $this->drinking_habit->name,
                'smoking_habit' => $this->smoking_habit->name,
                'resident_status' => $this->resident_status->name,
                'country' => $this->country->name,
                'state' => $this->state->name,
                'district' => $this->district->name,
                'city' => $this->city->name,
                'phone' => $this->phone,
            ],
            'religion_details' => [
                'religion' => $this->religion->name,
                'caste' => $this->caste->name,
                'sub_caste' => $this->sub_caste->name,
            ],
            'partner_details' => [
                'mother_tongue' => $this->partnerPreferences->mother_tongue->name,
            ],
            'profession_details' => [
                'education' => $this->education->name,
                'annual_income' => $this->annual_income->name,
                'occupation' => $this->occupation->name,
                'employed_in' => $this->employed_in->name,
            ],
        ];
    }
}
