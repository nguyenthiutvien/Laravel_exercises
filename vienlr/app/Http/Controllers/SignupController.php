<?php

namespace App\Http\Controllers;

use App\Http\Requests\singupRequest;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function index(){
        return view('form');
    }

    public function displayInFor(singupRequest $request){
        $usre =[
            'name'=>$name=$request->input("name"),
            'age'=>$name=$request->input("age"),
            'date'=>$name=$request->input("date"),
            'phone'=>$name=$request->input("phone"),
            'web'=>$name=$request->input("web"),
            'address'=>$name=$request->input("address"),
        ];
        return view('form')->with('user',$usre);
    }

}