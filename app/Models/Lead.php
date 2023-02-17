<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'created_for_id', 'gender_id', 'dob', 'language_id', 'religion_id', 'other_religions_willingness', 'other_communities_willingness', 'caste_id', 'sub_caste_id',
        'other_sub_castes', 'email', 'password', 'phone', 'marital_status_id', 'height_id', 'body_type_id', 'weight_id', 'star_id', 'zodiac_id', 'gothra', 'dosham_id', 'family_type_id',
        'family_status_id', 'family_values_id', 'physical_status_id', 'total_children', 'children_staying', 'education_id', 'institution', 'employed_in_id', 'occupation_id',
        'organisation', 'currency_id', 'annual_income_id', 'annual_income_text', 'country_id', 'state_id', 'district_id', 'city_id', 'citizenship_id', 'resident_status_id', 'about',
        'source', 'ip_address', 'birth_country_id', 'birth_state_id', 'birth_city_id', 'birth_time', 'deleted_by', 'notes', 'phone_code', 'registered_by_id',
        'score', 'family_net_worth', 'family_name', 'status', 'event_id', 'father_occupation_id', 'mother_occupation_id',
    ];

    public function created_for()
    {
        return $this->belongsTo('App\Models\CreatedFor');
    }

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

    public function birth_country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function birth_state()
    {
        return $this->belongsTo('App\Models\State');
    }

    public function birth_city()
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

    public function body_type()
    {
        return $this->belongsTo('App\Models\BodyType');
    }

    public function star()
    {
        return $this->belongsTo('App\Models\Star');
    }

    public function zodiac()
    {
        return $this->belongsTo('App\Models\Zodiac');
    }

    public function dosham()
    {
        return $this->belongsTo('App\Models\Dosham');
    }

    public function family_type()
    {
        return $this->belongsTo('App\Models\FamilyType');
    }

    public function family_status()
    {
        return $this->belongsTo('App\Models\FamilyStatus');
    }

    public function family_values()
    {
        return $this->belongsTo('App\Models\FamilyValue');
    }

    public function physical_status()
    {
        return $this->belongsTo('App\Models\PhysicalStatus');
    }
}
