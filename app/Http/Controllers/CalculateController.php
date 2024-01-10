<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lgs;
use App\Models\Rc;
use App\Models\Sc;
use App\Models\Src;
use App\Models\Wood;


class CalculateController extends Controller
{
    public function calc1_show(){
        return view('calculate.calc1');
    }

    public function calc2_show(){
        return view('calculate.calc2');
    }
}