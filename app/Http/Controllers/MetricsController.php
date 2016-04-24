<?php

namespace Gym\Http\Controllers;

use Illuminate\Http\Request;
use Gym\Http\Requests;

class MetricsController extends Controller
{
    protected $request;

    public function __construct(Reqest $request)
    {
        $this->request = $request;
    }

    public function bmi()
    {
        return view('bmi');
    }

    public function calcBmi()
    {
        $height = $this->request->input('height');
        $weight = $this->request->input('weight');

        return $weight / ($height * $height);
    }

    public function bmr()
    {
        return view('bmr');
    }

    public function calcBmr()
    {
        $height = $this->request->input('height');
        $weight = $this->request->input('weight');
        $age = $this->request->input('age');
        $coeff = $this->request->input('coeff');
        
        return $coeff + 13.4 * $weight + 4.8 * $height - 5.7 * $age;
    }

    public function water()
    {
        return view('water');
    }

    public function calcWater()
    {
    }
}
