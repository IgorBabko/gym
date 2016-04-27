<?php

namespace Gym\Http\Controllers;

use Gym\Http\Requests;
use Illuminate\Http\Request;

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

    public function obtainBmi(Request $request)
    {
        $this->validate($request, [
            'coeff'  => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
        ]);

        $bmi = $this->calcBmi($request);
        $message = $this->getBmiMessage($bmi);

        return response()->json(['message' => $message]);
    }

    protected function calcBmi(Request $request) {
        return $request->input('weight') / 
            ( $request->input('height') * $request->input('height') );
    }

    protected function getBmiMessage()
    {
        if ($bmi <= 18.5) {
            $message = 'Your BMI is ' . $bmi . ', \
                        that means you should gain weight, \
                        because your body mass index is really extremely low, you need to gain ---- kg';
        } else if ($bmi <= 25.5) {
            $message = 'Your BMI is ' . $bmi . ', \
                        that means your weight is ok, \
                        but we recommend you to gain ---kg---- kilos, \
                        you will look much better, your body structure \
                        and even your face will get some changes to better side.\
                        So, you should take it serious and take care about your health, \
                        and we already took care about nutrition and the workout plan for you.';
        } else if ($bmi <= 30) {
            $message = 'Your BMI is ' . $bmi . ', that means you are overweight, \
                        but don’t worry, it’s ok, we will help you to lose some. \
                        So, you should take it serious and take care about your health, \
                        and we already took care about nutrition and the workout plan for you.';
        } else {
            $message = 'Your BMI is ' . $bmi . ', \
                        that means you are heavily overweight, \
                        but don’t worry, it’s ok, we will help you to lose some.\ 
                        Overweight and obese individuals are at an increased risk for the following diseases:
                        <ul>
                            <li>Coronary heart disease</li>
                            <li>Dyslipidemia</li>
                            <li>Type 2 diabetes</li>
                            <li>Gallbladder disease</li>
                            <li>Hypertension</li>
                            <li>Osteoarthritis</li>
                            <li>Sleep apnea</li>
                            <li>Stroke</li>
                        <ul>
                        <p>In this case, it’s better to set \
                        an appointment with a profession doctor, and discuss the situation.\
                        We can propose you just a diet plan without trainings, it’s not good idea, \
                        because it’s could be a bit dangerous for your health.</p>';
        }
    }

    public function bmr()
    {
        return view('bmr');
    }

    public function calcBmr()
    {
        $activity_level = Request::input('activity_level') ?? 1;

        if (Request::input('gender') == 'male') {
            return $activity_level * (88.36 + 13.4 * Request::input('weight')
                + 4.8 * Request::input('height') - 5.7 * Request::input('age') );
        } 

        return $activity_level * (447.6 + 9.2 * Request::input('weight')
                + 3.1 * Request::input('height') - 4.3 * Request::input('age') );
    }

    public function water()
    {
        return view('water');
    }

    public function calcWater()
    {
        if (Request::input('gender') == 'male') {
            return Request::input('weight') * 0.04 + Request::input('physical-activity') * 0.6;
        }

        return Request::input('weight') * 0.03 + Request::input('physical-activity') * 0.4;
    }
}
