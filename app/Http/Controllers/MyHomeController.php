<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Team;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\About;



class MyHomeController extends Controller
{
    public function index(){
        $data = Slider::all();
        return view('home',compact('data'));
    }

    public function donate(){
        return view('frontend.donet');
    }

    public function contactUs(){
        return view('frontend.contact_us');
    }

    public function about(){

        $data = About::all();
        return view('frontend.about',compact('data'));
    }

    public function gallery(){
        $data = Gallery::all();
        return view('frontend.gallery',compact('data'));
    }
    public function media(){
        $data = Media::all();
        // dd($data);
        return view('frontend.media',compact('data'));
    }

    public function show($id)
    {
    	$media = Media::find($id);

        return view('Admin.master.media.show',compact('media'));
    }

    public function services(){
        return view('frontend.services');
    }

    public function team(){
        $data = Team::all();
        return view('frontend.team',compact('data'));
    }

    public function project(){
        return view('frontend.project');
    }
    public function group(){
        return view('frontend.group');
    }
}
