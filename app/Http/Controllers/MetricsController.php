<?php

namespace Gym\Http\Controllers;

use Gym\Http\Requests;
use Illuminate\Http\Request;

class MetricsController extends Controller
{
    public function bmi()
    {
        return view('bmi');
    }
    
    public function bmr()
    {
        return view('bmr');
    }
    
    public function water()
    {
         return view('water');
    }

    protected function calcBmi(Request $request) {
        return $request->input('weight') / 
            ( $request->input('height') * $request->input('height') );
    }

    protected function calcBmr($request)
    {
        $activity_level = $request->input('activity_level') ?? 1;

        if ($request->input('gender') == 'male') {
            return $activity_level * (88.36 + 13.4 * $request->input('weight')
                + 4.8 * $request->input('height') - 5.7 * $request->input('age') );
        } 

        return $activity_level * (447.6 + 9.2 * $request->input('weight')
                + 3.1 * $request->input('height') - 4.3 * $request->input('age') );
    }

    public function calcWater($request)
    {
        if ($request->input('gender') == 'male') {
            return $request->input('weight') * 0.04 + $request->input('physical-activity') * 0.6;
        }

        return $request->input('weight') * 0.03 + $request->input('physical-activity') * 0.4;
    }

    protected function getBmiMessage($bmi, $missingWeight)
    {
        if ($bmi <= 18.5) {
            $message = 'Your BMI is <span class="highlight">' . $bmi . '</span>, 
                        that means you should gain weight, 
                        because your body mass index is really extremely low, you need to gain <span class="highlight">' . $missingWeight . '</span> kilos';
        } else if ($bmi <= 25) {
            $message = 'Your BMI is <span class="highlight">' . $bmi . '</span>, 
                        that means your weight is ok, 
                        but we recommend you to gain <span class="highlight">' . $missingWeight . '</span> kilos, 
                        you will look much better, your body structure 
                        and even your face will get some changes to better side.';
        } else if ($bmi <= 30) {
            $message = 'Your BMI is <span class="highlight">' . $bmi . '</span>, that means you are overweight, 
                        but don’t worry, it’s ok, we will help you to lose some. 
                        So, you should take it serious and take care about your health, 
                        and we already took care about nutrition and the workout plan for you.';
        } else {
            $message = 'Your BMI is <span class="hightlight">' . $bmi . '</span>, 
                        that means you are heavily overweight, 
                        but don’t worry, it’s ok, we will help you to lose some. 
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
                        <p>In this case, it’s better to set 
                        an appointment with a profession doctor, and discuss the situation.
                        We can propose you just a diet plan without trainings, it’s not good idea, 
                        because it’s could be a bit dangerous for your health.</p>';
        }
        return $message;
    }

    protected function getBmrMessage($bmr)
    {
         return 'You need to eat <span class="highlight">' . $bmr . '</span> a day.
                    If you will follow this way, you will not lose any weight and will not gain also.
                    If you want to lose some weight:
                        -	You need to cut 500 calories form your nutrition 
                    If you want to gain some weight:
                        -	You need to add 500 calories to your nutrition';
    }

    protected function getWaterMessage($water)
    {
         return 'We recommend you to drink <span class="highlight">' . $water . '</span> 
                    liters of pure water/day except of tea, coffee and some other drinks.
                    In case you drunk some tea or coffee, you have to compensate it drinking pure water glass.
                    If your goal is to lose some weight:
                        -	 you should drink --------liters----- of water + 500- 750 ml extra
                    But just drink --------liters----------- of water and do nothing more will not 
                    help that much as special workout plan and special diet plan.
                    <br><br>
                    If your goal is to gain some weight:
                    -	you should drink --------liters----- of water + 750 ml – 1-liter extra';
    }

    public function obtainBmi(Request $request)
    {
        $this->validate($request, [
            'coeff'  => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
        ]);

        $bmi = round($this->calcBmi($request), 2);

        $missingWeight = round($this->calcMissingWeight($request, $bmi), 2);

        $message = $this->getBmiMessage($bmi, $missingWeight);

        return response()->json(['message' => $message, 'notifyMessage' => 'Your BMI is ' . $bmi], 200);
    }

    public function obtainBmr(Request $request)
    {
        $this->validate($request, [
            'gender'  => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'age'    => 'required|integer',
            'activity_level'    => 'required',
        ]);

        $bmr = round($this->calcBmr($request), 2);
        $message = $this->getBmrMessage($bmr);

        return response()->json(['message' => $message, 'notifyMessage' => 'Your BMR is ' . $bmr], 200);
    }

    protected function obtainWater(Request $request)
    {
        $this->validate($request, [
            'gender'  => 'required',
            'weight' => 'required|numeric',
            'physical-activity' => 'required|integer',
        ]);

        $water = round($this->calcWater($request), 2);
        $message = $this->getWaterMessage($water);

        return response()->json(['message' => $message, 'notifyMessage' => 'Your water is:) ' . $water], 200);
    }

    public function calcMissingWeight(Request $request, $bmi)
    {
        $maximumHealthyWeight = 25;
        $missingIndex = $maximumHealthyWeight - $bmi;

        $missingIndexPercent = 100 * $missingIndex / $bmi;
        return $missingIndexPercent * $request->input('weight') / 100;
    }
}
