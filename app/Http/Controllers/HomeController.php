<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function __construct()
    {
        // Cargar los datos de la base dedatos para el llenado dinamico de las vistas
        $datos = User::where('name', 'Jose Sacramento Muñoz Perez')->select('name', 'title', 'phone', 'address', 'birthdate', 'facebook', 'twitter', 'linkedin', 'email', 'about', 'slogan', 'profile_photo_path')->get();
        foreach ($datos as $dato)
        $slider = Slider::all()->where('status', 1)->sortBy('order')->take(5);
        view()->share('sacra', $dato);
        view()->share('slider', $slider);
    }
    public function index()
    {
        //return $datos;
        
        return view('welcome');
    }

    public function resume()
    {
        return view('resume');
    }
}
