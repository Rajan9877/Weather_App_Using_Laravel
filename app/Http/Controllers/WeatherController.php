<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{


public function index()
{
    $apiKey = '81941f22f3f6fe133c9a94ffe9051dfc';
    $city = 'Jalandhar'; // Replace with the desired city or location.
    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey");

    $data = $response->json();
    // Handle and pass $data to the view.
    return view('weather', ['data' => $data]);
}

public function search(Request $request){
    $apiKey = '81941f22f3f6fe133c9a94ffe9051dfc';
    $city = $request->input('searchcity'); // Replace with the desired city or location.
    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey");

    $data = $response->json();
    // Handle and pass $data to the view.
    return view('weather', ['data' => $data]);
}

}
