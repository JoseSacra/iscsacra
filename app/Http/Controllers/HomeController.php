<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{   
    protected $datos;
    public function __construct()
    {
        $data = User::where('id', 1)->first();
        $slider = Slider::all();
        $this->datos = [
            'name' => $data->name,
            'title' => $data->title,
            'phone' => $data->phone,
            'address' => $data->address,
            'birthdate' => $data->birthdate,
            'facebook' => $data->facebook,
            'twitter' => $data->twitter,
            'linkedin' => $data->linkedin,
            'email' => $data->email,
            'about' => $data->about,
            'slogan' => $data->slogan,
            'profile_photo_path' => $data->profile_photo_path,
        ];
        view()->share('datos', $this->datos);
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
