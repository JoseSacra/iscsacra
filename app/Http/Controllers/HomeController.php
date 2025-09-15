<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Slider;
use App\Models\User;
use App\Models\Education;
use App\Models\Skills;

class HomeController extends Controller
{   
    public function __construct()
    {
        // Cargar los datos de la base dedatos para el llenado dinamico de las vistas
        $datos = User::where('name', 'Jose Sacramento Muñoz Perez')->select('name', 'title', 'phone', 'address', 'birthdate', 'facebook', 'twitter', 'linkedin', 'email', 'about', 'slogan', 'profile_photo_path')->get();
        foreach ($datos as $dato)
        $slider = Slider::all()->where('status', 1)->sortBy('order')->take(5);
        $jobs = Experience::all()->sortBy('order');
        $educations = Education::all()->sortBy('order');
        // Obtenemos las skills por categoria
        $languages = Skills::all()->where('category', 'lenguaje')->sortBy('order');
        $systems = Skills::all()->where('category', 'sistema Operativo')->sortBy('order');
        $softskills = Skills::all()->where('category', 'blandas')->sortBy('order');
        $cibersecurity = Skills::all()->where('category', 'ciberseguridad')->sortBy('order');
        $frameworks = Skills::all()->where('category', 'framework')->sortBy('order');
        $databases = Skills::all()->where('category', 'base de datos')->sortBy('order');
        $tools = Skills::all()->where('category', 'herramienta')->sortBy('order');
        $design = Skills::all()->where('category', 'design')->sortBy('order');
        $office = Skills::all()->where('category', 'ofimatica')->sortBy('order');
        // Compartimos los datos con las vistas
        view()->share('frameworks', $frameworks);
        view()->share('databases', $databases);
        view()->share('tools', $tools);
        view()->share('languages', $languages);
        view()->share('systems', $systems);
        view()->share('softskills', $softskills);
        view()->share('cibersecurity', $cibersecurity);
        view()->share('design', $design);
        view()->share('office', $office);
        view()->share('sacra', $dato);
        view()->share('slider', $slider);
        view()->share('jobs', $jobs);
        view()->share('educations', $educations);
        // Esto es para que se pueda acceder a los datos en las vistas y realizar el llenado dinamico de las vistas
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
