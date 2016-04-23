<?php

namespace Gym\Http\Controllers;

use Illuminate\Http\Request;
use Gym\Http\Requests;

class MetricsController extends Controller
{
    public function bmi()
    {
        return view('bmi');
    } 

    public function calcBmi()
    {
        
    }

    public function bmr()
    {
        return view('bmr');
    }

    public function calcBmr()
    {
        
    }

    public function water()
    {
        return view('water');
    }

    public function calcWater()
    {
        
    }
}
