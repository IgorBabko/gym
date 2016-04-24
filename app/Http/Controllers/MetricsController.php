<?php

namespace Gym\Http\Controllers;

use Illuminate\Http\Request;
use Gym\Http\Requests;

class MetricsController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function bmi()
    {
        return view('bmi');
    }

    public function calcBmi()
    {
        return Request::input('weight') / 
            ( Request::input('height') * Request::input('height') );
    }

    public function bmr()
    {
        return view('bmr');
    }

    public function calcBmr()
    {
        return Request::input('coeff') + 13.4 * Request::input('weight')
                + 4.8 * Request::input('height') - 5.7 * Request::input('age');
    }

    public function water()
    {
        return view('water');
    }

    public function calcWater()
    {
        if (Request::input('gender') == 'male') {
            return Request::input('weight') * 0.04 * Request::input('physical-activity') * 0.6;
        }

        return Request::input('weight') * 0.03 * Request::input('physical-activity') * 0.4;
    }
}
