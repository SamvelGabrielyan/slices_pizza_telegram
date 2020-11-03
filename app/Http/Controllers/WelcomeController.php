<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class WelcomeController extends Controller
{
    public function index(): Object
    {
        $pizzas = Pizza::all();
        return view('welcome', compact('pizzas'));
    }
}
