<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{

    public function __construct()
    {

    }

    public function showString(){

        return 'static String';

    }
}
