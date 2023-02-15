<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ResponseHelper;
use App\Traits\Utility;
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


class GeneralController extends Controller
{
    use ResponseHelper, Utility;

    public function religion(Request $request)
    {
        $religions = Religion::all();
        return $this->successResponse($religions, 200,"Successfully returned all religions");
        
    }

    public function caste($id,Request $request){

        $castes = Caste::where('religion_id',$id)->get();
        return $this->successResponse($castes, 200,"Successfully returned all castes in this religion");
    }

    public function sub_caste($id,Request $request){

        $castes = SubCaste::where('caste_id',$id)->get();
        return $this->successResponse($castes, 200,"Successfully returned all sub castes in this caste");
    }

    public function gender(Request $request)
    {
        $genders = Gender::all();
        return $this->successResponse($genders, 200,"Successfully returned all genders");
    }

    public function currency(Request $request)
    {
        $currencies = Currency::all();
        return $this->successResponse($currencies, 200,"Successfully returned all currencies");
    }

    public function language(Request $request)
    {
        $languages = Language::all();
        return $this->successResponse($languages, 200,"Successfully returned all languages");
    }

    public function marital_status(Request $request)
    {
        $marital_status = MaritalStatus::all();
        return $this->successResponse($marital_status, 200,"Successfully returned all marital status");
    }

    public function height(Request $request)
    {
        $heights = Height::all();
        return $this->successResponse($heights, 200,"Successfully returned all heights");
    }

    public function weight(Request $request)
    {
        $weights = Weight::all();
        return $this->successResponse($weights, 200,"Successfully returned all weights");
    }

    public function family_status(Request $request)
    {
        $family_statuses = FamilyStatus::all();
        return $this->successResponse($family_statuses, 200,"Successfully returned all family statuses");
    }

    public function family_value(Request $request)
    {
        $family_values = FamilyValue::all();
        return $this->successResponse($family_values, 200,"Successfully returned all family values");
    }

    public function family_type(Request $request)
    {
        $family_types = FamilyType::all();
        return $this->successResponse($family_types, 200,"Successfully returned all family types");
    }

    public function occupation_category(Request $request)
    {
        $occupation_categories = OccupationCategory::all();
        return $this->successResponse($occupation_categories, 200,"Successfully returned all occupation categories");
    }

    public function occupation($id,Request $request)
    {
        $occupations = Occupation::where('occupation_category_id',$id)->get();
        return $this->successResponse($occupations, 200,"Successfully returned all occupations");
    }

    public function education_category(Request $request)
    {
        $education_categories = EducationCategory::all();
        return $this->successResponse($education_categories, 200,"Successfully returned all education categories");
    }

    public function education($id,Request $request)
    {
        $educations = Education::where('education_category_id',$id)->get();
        return $this->successResponse($educations, 200,"Successfully returned all educations");
    }

    public function annual_income(Request $request)
    {
        $annual_incomes = AnnualIncome::all();
        return $this->successResponse($annual_incomes, 200,"Successfully returned all annual income list");
    }

    public function country(Request $request)
    {
        $countries = Country::all();
        return $this->successResponse($countries, 200,"Successfully returned all countries");
    }

    public function state($id,Request $request)
    {
        $states = State::where('country_id',$id)->get();
        return $this->successResponse($states, 200,"Successfully returned all states");
    }

    public function district($id,Request $request)
    {
        $districts = District::where('state_id',$id)->get();
        return $this->successResponse($districts, 200,"Successfully returned all districts");
    }

    public function city($id,Request $request)
    {
        $cities = City::where('state_id',$id)->get();
        return $this->successResponse($cities, 200,"Successfully returned all cities");
    }

    public function eating_habit(Request $request)
    {
        $eating_habits = EatingHabit::all();
        return $this->successResponse($eating_habits, 200,"Successfully returned all eating_habits");
    }

    public function smoking_habit(Request $request)
    {
        $smoking_habits = SmokingHabit::all();
        return $this->successResponse($smoking_habits, 200,"Successfully returned all smoking_habits");
    }

    public function drinking_habit(Request $request)
    {
        $drinking_habits = DrinkingHabit::all();
        return $this->successResponse($drinking_habits, 200,"Successfully returned all drinking_habits");
    }

    public function employed_in(Request $request)
    {
        $employed_ins = EmployedIn::all();
        return $this->successResponse($employed_ins, 200,"Successfully returned all employed_ins");
    }

    public function intrest(Request $request)
    {
        $intrests = Interest::all();
        return $this->successResponse($intrests, 200,"Successfully returned all intrests");
    }

    public function physical_status(Request $request)
    {
        $physical_statuses = PhysicalStatus::all();
        return $this->successResponse($physical_statuses, 200,"Successfully returned all physical_statuses");
    }

    public function star(Request $request)
    {
        $stars = Star::all();
        return $this->successResponse($stars, 200,"Successfully returned all stars");
    }

    public function dosham(Request $request)
    {
        $doshams = Dosham::all();
        return $this->successResponse($doshams, 200,"Successfully returned all doshams");
    }

    public function zodiac(Request $request)
    {
        $zodiacs = Zodiac::all();
        return $this->successResponse($zodiacs, 200,"Successfully returned all zodiacs");
    }

    public function body_type(Request $request)
    {
        $body_types = BodyType::all();
        return $this->successResponse($body_types, 200,"Successfully returned all body_types");
    }

    public function hobby(Request $request)
    {
        $hobbies = Hobby::all();
        return $this->successResponse($hobbies, 200,"Successfully returned all hobbies");
        
    }

    public function father_occupation(Request $request)
    {
        $father_occupations = FatherOccupation::all();
        return $this->successResponse($father_occupations, 200,"Successfully returned all father_occupation list");
        
    }

    public function mother_occupation(Request $request)
    {
        $mother_occupations = MotherOccupation::all();
        return $this->successResponse($mother_occupations, 200,"Successfully returned all mother_occupation list");
        
    }

    public function resident_status(Request $request)
    {
        $resident_statuses = ResidentStatus::all();
        return $this->successResponse($resident_statuses, 200,"Successfully returned all resident_statuses");
        
    }
}
