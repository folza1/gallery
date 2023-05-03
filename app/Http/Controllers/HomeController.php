<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $json = file_get_contents(resource_path('data/example.json'));
        $data = json_decode($json, true);

        session()->put('data', $data);

        return view('welcome', ['data' => $data]);
    }
}
