<?php

namespace DtechBmi\BMI\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BMIController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('weight') && $request->has('heigh')) {
            $weight = $request->get('weight');
            $heigh = $request->get('heigh');
            try {
                $bmi = round($weight/($heigh * $heigh), 1);
            } catch (\Exception $e) {
                $bmi = 0;
            }
        } else {
            $bmi = 0;
        }

        return view('bmi::index', compact('bmi'));
    }
}