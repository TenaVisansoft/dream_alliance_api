<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function gender()
    {
        return $this->belongsTo('App\Models\Gender');
    }

    public function weight()
    {
        return $this->belongsTo('App\Models\Weight');
    }

    public function height()
    {
        return $this->belongsTo('App\Models\Height');
    }


    public function marital_status()
    {
        return $this->belongsTo('App\Models\MaritalStatus');
    }

    public function language()
    {
        return $this->belongsTo('App\Models\Language');
    }

    public function eating_habit()
    {
        return $this->belongsTo('App\Models\EatingHabit');
    }

    public function drinking_habit()
    {
        return $this->belongsTo('App\Models\DrinkingHabit');
    }

    public function smoking_habit()
    {
        return $this->belongsTo('App\Models\SmokingHabit');
    }

    public function resident_status()
    {
        return $this->belongsTo('App\Models\ResidentStatus');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }

    public function district()
    {
        return $this->belongsTo('App\Models\District');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function religion()
    {
        return $this->belongsTo('App\Models\Religion');
    }

    public function caste()
    {
        return $this->belongsTo('App\Models\Caste');
    }

    public function sub_caste()
    {
        return $this->belongsTo('App\Models\SubCaste');
    }

    public function education()
    {
        return $this->belongsTo('App\Models\Education');
    }

    public function annual_income()
    {
        return $this->belongsTo('App\Models\AnnualIncome');
    }

    public function occupation()
    {
        return $this->belongsTo('App\Models\Occupation');
    }

    public function employed_in()
    {
        return $this->belongsTo('App\Models\EmployedIn');
    }

    public function partnerPreferences()
    {
        return $this->morphOne(PartnerPreferences::class, 'partner_preferable');
    }
}
