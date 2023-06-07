<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaofshapeController extends Controller
{
    //
    function computeArea(Request $request)
    {
        $a = $request->input('a');
        $h = $request->input('h');
        $e1= $request->input('e1');
        $e2= $request->input('e2');
        $e3 = $request->input('e3');
        $e4= $request->input('e4');
        return view('areaOfShape') -> with (['areaTriangle'=> ($a +$h)/2,'areaQuadrangle'=> ($e1+$e2+$e3+$e4)]);
    }
}
