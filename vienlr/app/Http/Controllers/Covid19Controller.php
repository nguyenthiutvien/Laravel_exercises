<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Covid19Controller extends Controller
{
    public function show()
    {
        $response = Http::get('https://api.covid19api.com/summary');
        $data = $response->json();

        return view('covid19', ['data' => $data]);
    }
}
