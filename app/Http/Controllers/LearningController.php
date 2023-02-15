<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LearningController extends Controller
{
    
    public function encryption(Request $request){

        $encrypted = Crypt::encryptString('Hello world.');
        $decrypted = Crypt::decryptString($encrypted);
        return $decrypted; 
    }
}
