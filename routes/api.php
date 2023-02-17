<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\GeneralController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\LeadController;
use App\Http\Controllers\api\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//General api's for registeration form
Route::get('created_for',[GeneralController::class, 'created_for'])->name('created_for');
Route::get('religion',[GeneralController::class, 'religion'])->name('religion');
Route::get('caste/{id}',[GeneralController::class, 'caste'])->name('caste');
Route::get('sub_caste/{id}',[GeneralController::class, 'sub_caste'])->name('sub_caste');
Route::get('gender',[GeneralController::class, 'gender'])->name('gender');
Route::get('currency',[GeneralController::class, 'currency'])->name('currency');
Route::get('language',[GeneralController::class, 'language'])->name('language');
Route::get('marital_status',[GeneralController::class, 'marital_status'])->name('marital_status');
Route::get('height',[GeneralController::class, 'height'])->name('height');
Route::get('weight',[GeneralController::class, 'weight'])->name('weight');
Route::get('family_status',[GeneralController::class, 'family_status'])->name('family_status');
Route::get('family_value',[GeneralController::class, 'family_value'])->name('family_value');
Route::get('family_type',[GeneralController::class, 'family_type'])->name('family_type');
Route::get('occupation_category',[GeneralController::class, 'occupation_category'])->name('occupation_category');
Route::get('occupation/{id}',[GeneralController::class, 'occupation'])->name('occupation');
Route::get('education_category',[GeneralController::class, 'education_category'])->name('education_category');
Route::get('education/{id}',[GeneralController::class, 'education'])->name('education');
Route::get('annual_income',[GeneralController::class, 'annual_income'])->name('annual_income');
Route::get('country',[GeneralController::class, 'country'])->name('country');
Route::get('state/{id}',[GeneralController::class, 'state'])->name('state');
Route::get('district/{id}',[GeneralController::class, 'district'])->name('district');
Route::get('city/{id}',[GeneralController::class, 'city'])->name('city');
Route::get('eating_habit',[GeneralController::class, 'eating_habit'])->name('eating_habit');
Route::get('smoking_habit',[GeneralController::class, 'smoking_habit'])->name('smoking_habit');
Route::get('drinking_habit',[GeneralController::class, 'drinking_habit'])->name('drinking_habit');
Route::get('drinking_habit',[GeneralController::class, 'drinking_habit'])->name('drinking_habit');
Route::get('employed_in',[GeneralController::class, 'employed_in'])->name('employed_in');
Route::get('intrest',[GeneralController::class, 'intrest'])->name('intrest');
Route::get('physical_status',[GeneralController::class, 'physical_status'])->name('physical_status');
Route::get('star',[GeneralController::class, 'star'])->name('star');
Route::get('dosham',[GeneralController::class, 'dosham'])->name('dosham');
Route::get('zodiac',[GeneralController::class, 'zodiac'])->name('zodiac');
Route::get('body_type',[GeneralController::class, 'body_type'])->name('body_type');
Route::get('hobby',[GeneralController::class, 'hobby'])->name('hobby');
Route::get('mother_occupation',[GeneralController::class, 'mother_occupation'])->name('mother_occupation');
Route::get('father_occupation',[GeneralController::class, 'father_occupation'])->name('father_occupation');
Route::get('resident_status',[GeneralController::class, 'resident_status'])->name('resident_status');

//Register and Login
Route::post('/register',[AuthController::class, 'register'])->name('register');
Route::post('/login',[AuthController::class, 'login'])->name('login');

//Lead Creation
Route::post('/basic_detail',[LeadController::class, 'basic_detail'])->name('basic_detail');
Route::post('/personal_religion_details/{id}',[LeadController::class, 'personal_religion_details'])->name('personal_religion_details');


//Individual Profile View
Route::get('profile/{id}',[ProfileController::class, 'profile'])->name('profile');






