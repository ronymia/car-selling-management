<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $cars = Car::where('published_at', "<", now())
            ->orderBY('published_at', 'desc')
            ->limit(30)
            ->get();

        return view('home.index', ['cars' => $cars]);
    }
}
