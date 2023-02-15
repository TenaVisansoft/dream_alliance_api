<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\CurrencyCollection;
use App\Http\Resources\CurrencyResource;
use Illuminate\Http\Request;
use App\Traits\ResponseHelper;
use App\Traits\Utility;
use App\Models\Currency;

class CurrencyController extends Controller
{
    use ResponseHelper, Utility;

    public function currencies(Currency $currency){

        $data = new CurrencyCollection($currency->get());
        return $this->successResponse($data , 200,'Currencies Returned Successfully');
    }

    public function currency($id,Currency $currency){

        $data = new CurrencyResource($currency->find($id));
        return $this->successResponse($data , 200,'Currency Returned Successfully');
    }
}
