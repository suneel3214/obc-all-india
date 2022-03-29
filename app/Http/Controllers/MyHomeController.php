<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;


class MyHomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function donate(){
        return view('frontend.donet');
    }

    public function contactUs(){
        return view('frontend.contact_us');
    }

    public function about(){
        return view('frontend.about');
    }

    public function gallery(){
        return view('frontend.gallery');
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
        return view('frontend.team');
    }

    public function project(){
        return view('frontend.project');
    }
    public function group(){
        return view('frontend.group');
    }
}
