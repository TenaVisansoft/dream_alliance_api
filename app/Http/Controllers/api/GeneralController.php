<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ResponseHelper;
use App\Traits\Utility;
use App\Http\Resources\CommonCollection;
use App\Models\Religion;
use App\Models\Caste;
use App\Models\SubCaste;
use App\Models\Gender;
use App\Models\Currency;
use App\Models\Language;
use App\Models\Height;
use App\Models\Weight;
use App\Models\Country;
use App\Models\State;
use App\Models\District;
use App\Models\City;
use App\Models\Star;
use App\Models\Dosham;
use App\Models\Zodiac;
use App\Models\BodyType;
use App\Models\MaritalStatus;
use App\Models\FamilyStatus;
use App\Models\FamilyValue;
use App\Models\FamilyType;
use App\Models\EducationCategory;
use App\Models\Education;
use App\Models\OccupationCategory;
use App\Models\Occupation;
use App\Models\AnnualIncome;
use App\Models\EatingHabit;
use App\Models\SmokingHabit;
use App\Models\DrinkingHabit;
use App\Models\EmployedIn;
use App\Models\Interest;
use App\Models\PhysicalStatus;
use App\Models\Hobby;
use App\Models\MotherOccupation;
use App\Models\FatherOccupation;
use App\Models\ResidentStatus;
use App\Models\CreatedFor;


class GeneralController extends Controller
{
    use ResponseHelper, Utility;

    public function religion(Religion $religion)
    {
        return $this->successResponse(new CommonCollection($religion->select('id','name')->get()) , 200,'Successfully returned all religion');
        
    }

    public function caste($id,Caste $caste){

        return $this->successResponse(new CommonCollection($caste->where('religion_id',$id)->select('id','name')->get()) , 200,'Successfully returned all caste');
    }

    public function sub_caste($id,SubCaste $sub_caste){

        return $this->successResponse(new CommonCollection($sub_caste->where('caste_id',$id)->select('id','name')->get()) , 200,'Successfully returned all sub caste');
    }

    public function gender(Gender $gender)
    {
        return $this->successResponse(new CommonCollection($gender->select('id','name')->get()) , 200,'Successfully returned all gender');
    }

    public function currency(Currency $currency)
    {
        return $this->successResponse(new CommonCollection($currency->select('id','name')->get()) , 200,'Successfully returned all currencies');
    }

    public function language(Language $language)
    {
        return $this->successResponse(new CommonCollection($language->select('id','name')->get()) , 200,'Successfully returned all language');
    }

    public function marital_status(MaritalStatus $marital_status)
    {
        return $this->successResponse(new CommonCollection($marital_status->select('id','name')->get()) , 200,'Successfully returned all marital_status');
    }

    public function height(Height $height)
    {
         return $this->successResponse(new CommonCollection($height->select('id','name')->get()) , 200,'Successfully returned all height');
    }

    public function weight(Weight $weight)
    {
        return $this->successResponse(new CommonCollection($weight->select('id','name')->get()) , 200,'Successfully returned all weight');
    }

    public function family_status(FamilyStatus $family_status)
    {
        return $this->successResponse(new CommonCollection($family_status->select('id','name')->get()) , 200,'Successfully returned all family status');
    }

    public function family_value(FamilyValue $family_value)
    {
        return $this->successResponse(new CommonCollection($family_value->select('id','name')->get()) , 200,'Successfully returned all family value');
    }

    public function family_type(FamilyType $family_type)
    {
        return $this->successResponse(new CommonCollection($family_type->select('id','name')->get()) , 200,'Successfully returned all family type');
    }

    public function occupation_category(OccupationCategory $occupation_category)
    {
        return $this->successResponse(new CommonCollection($occupation_category->select('id','name')->get()) , 200,'Successfully returned all occupation category');
    }

    public function occupation($id,Occupation $occupation)
    {

        return $this->successResponse(new CommonCollection($occupation->where('occupation_category_id',$id)->select('id','name')->get()) , 200,'Successfully returned all occupations');
    }

    public function education_category(EducationCategory $education_category)
    {
        return $this->successResponse(new CommonCollection($education_category->select('id','name')->get()) , 200,'Successfully returned all education category');
    }

    public function education($id,Education $education)
    {
        return $this->successResponse(new CommonCollection($education->where('education_category_id',$id)->select('id','name')->get()) , 200,'Successfully returned all educations');
    }

    public function annual_income(AnnualIncome $annual_income)
    {
        return $this->successResponse(new CommonCollection($annual_income->select('id','name')->get()) , 200,'Successfully returned all education category');
    }

    public function country(Country $country)
    {
        return $this->successResponse(new CommonCollection($country->select('id','name')->get()) , 200,'Successfully returned all country');
    }

    public function state($id,State $state)
    {
        return $this->successResponse(new CommonCollection($state->where('country_id',$id)->select('id','name')->get()) , 200,'Successfully returned all states');
    }

    public function district($id,District $district)
    {
        return $this->successResponse(new CommonCollection($district->where('state_id',$id)->select('id','name')->get()) , 200,'Successfully returned all districts');
    }

    public function city($id,City $city)
    {
        return $this->successResponse(new CommonCollection($city->where('state_id',$id)->select('id','name')->get()) , 200,'Successfully returned all cities');
    }

    public function eating_habit(EatingHabit $eating_habit)
    {
        return $this->successResponse(new CommonCollection($eating_habit->select('id','name')->get()) , 200,'Successfully returned all eating habits');
    }

    public function smoking_habit(SmokingHabit $smoking_habit)
    {
        return $this->successResponse(new CommonCollection($smoking_habit->select('id','name')->get()) , 200,'Successfully returned all smoking habits');
    }

    public function drinking_habit(DrinkingHabit $drinking_habit)
    {
        return $this->successResponse(new CommonCollection($drinking_habit->select('id','name')->get()) , 200,'Successfully returned all drinking habits');
    }

    public function employed_in(EmployedIn $employed_in)
    {
        return $this->successResponse(new CommonCollection($employed_in->select('id','name')->get()) , 200,'Successfully returned all employed in list');
    }

    public function intrest(Interest $intrest)
    {
        return $this->successResponse(new CommonCollection($intrest->select('id','name')->get()) , 200,'Successfully returned all intrest');
    }

    public function physical_status(PhysicalStatus $physical_status)
    {
        return $this->successResponse(new CommonCollection($physical_status->select('id','name')->get()) , 200,'Successfully returned all physical status');
    }

    public function star(Star $star)
    {
        return $this->successResponse(new CommonCollection($star->select('id','name')->get()) , 200,'Successfully returned all star');
    }

    public function dosham(Dosham $dosham)
    {
        return $this->successResponse(new CommonCollection($dosham->select('id','name')->get()) , 200,'Successfully returned all dosham');
    }

    public function zodiac(Zodiac $zodiac)
    {
        return $this->successResponse(new CommonCollection($zodiac->select('id','name')->get()) , 200,'Successfully returned all zodiac');
    }

    public function body_type(BodyType $body_type)
    {
        return $this->successResponse(new CommonCollection($body_type->select('id','name')->get()) , 200,'Successfully returned all body type');
    }

    public function hobby(Hobby $hobby)
    {
        return $this->successResponse(new CommonCollection($hobby->select('id','name')->get()) , 200,'Successfully returned all hobby');
        
    }

    public function father_occupation(FatherOccupation $father_occupation)
    {
        return $this->successResponse(new CommonCollection($father_occupation->select('id','name')->get()) , 200,'Successfully returned all father occupation');
        
    }

    public function mother_occupation(MotherOccupation $mother_occupation)
    {
        return $this->successResponse(new CommonCollection($mother_occupation->select('id','name')->get()) , 200,'Successfully returned all mother occupation');
        
    }

    public function resident_status(ResidentStatus $resident_status)
    {
        return $this->successResponse(new CommonCollection($resident_status->select('id','name')->get()) , 200,'Successfully returned all resident status');
    }

    public function created_for(CreatedFor $created_for)
    {
        return $this->successResponse(new CommonCollection($created_for->select('id','name')->get()) , 200,'Successfully returned all created for list');
    }
}
