<?php

namespace App\Http\Controllers;

use App\Review;
use App\Tour;
use App\Slider;
//use DB;
use Illuminate\Http\Request;

class MainController extends Controller{
    //
    public function index(){
        return view('index');
    }

    public function home(){
        //DB::enableQueryLog();
        $reviews = Review::where('status', 1)->orderBy('updated_at', 'desc')->take(4)->get();
        $tours = Tour::where('status', 1)->where('recommended', 1)->orderBy('order', 'asc')->get();
        $sliders = Slider::where('status', 1)->orderBy('order', 'asc')->get();
        $tours->load('categories');
        $tours->load('photos');
        return view('home', compact('reviews', 'tours', 'sliders'));
    }
}
