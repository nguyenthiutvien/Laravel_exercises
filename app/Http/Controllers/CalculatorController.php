<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
        return view('calculate');
    }
    public function calculate(Request $request)
    {
        $operator = $request->get('operator');
        $num1 = $request->get('num1');
        $num2 = $request->get('num2');
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
            default:
                $result = 'Invalid operator';
        }

        return view('calculate', [
            'num1' => $num1,
            'num2' => $num2,
            'operator' => $operator,
            'result' => $result,
        ]);
    }
}
