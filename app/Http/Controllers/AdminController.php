<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Slider;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    
    /* public function create()
    {
        return view('admin.create');
    } */

    public function store(Request $request)
    {
        // Handle the form submission
        // Validate and save the data
       // return redirect()->route('admin.index')->with('success', 'Admin created successfully.');
    }

    public function edit()
    {
        return view('profile.show');
    }

    public function update(Request $request,$id)
    {
        $datos= $request->all();
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }else{
            if(isset($datos['photo'])){

                $file = $datos['photo'];
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $fileName);
                $user->profile_photo_path = $fileName;
            }
            $user->about = $datos['about'];
            $user->slogan = $datos['slogan'];
            $user->name = $datos['name'];
            $user->title = $datos['title'];
            $user->phone = $datos['phone'];
            $user->address = $datos['location'];
            $user->facebook = $datos['facebook'];
            $user->twitter = $datos['twitter'];
            $user->linkedin = $datos['linkedin'];
            $user->email = $datos['email']; 

        }
        
        $user->save();
        
        // Handle the form submission
        // Validate and update the data
        return redirect()->route('profile')->with('success', 'Admin updated successfully.');
    }

    public function slider()
    {
        $sliders = Slider::all();
        return view('profile.slider', compact('sliders'));
    }
   
    public function storeSlider(Request $request)
    {
        $datos= $request->all();
        $slider = new Slider();
        if(isset($datos['image'])){

            $file = $datos['image'];
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/slider'), $fileName);
            $slider->image = $fileName;
        }
        $slider->title = $datos['title'];
        $slider->description = $datos['description'];
        $slider->order = 0;
        $slider->status = 1;

        $slider->save();

        // Handle the form submission
        // Validate and update the data
        return redirect()->route('slider')->with('success', 'Slider created successfully.');
    }
    public function destroySlider($id)
    {
        $slider = Slider::find($id);
        if ($slider) {
            $slider->delete();
            return redirect()->route('slider')->with('success', 'Slider deleted successfully.');
        } else {
            return redirect()->route('slider')->with('error', 'Slider not found.');
        }
    }
    public function editSlider($id)
    {
        $slider = Slider::find($id);
        if ($slider) {
            return view('profile.editSlider', compact('slider'));
        } else {
            return redirect()->route('slider')->with('error', 'Slider not found.');
        }
    }
    public function updateSlider(Request $request, $id)
    {
        $datos= $request->all();
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->back()->with('error', 'Slider not found.');
        }else{
            if(isset($datos['image'])){

                $file = $datos['image'];
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/slider'), $fileName);
                $slider->image = $fileName;
            }
            $slider->title = $datos['title'];
            $slider->description = $datos['description'];
            $slider->order = 0;
            if($datos['status'] == 1){
                $slider->status = 1;
            }else{
                $slider->status = 0;
            }
            

        }
        
        $slider->save();
        
        // Handle the form submission
        // Validate and update the data
        return redirect()->route('slider')->with('success', 'Slider updated successfully.');
    }
}
