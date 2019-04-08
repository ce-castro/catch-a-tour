<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class MainController extends Controller{
    //
    public function index(){
        return view('index');
    }

    public function home(){
        $reviews = Review::where('status','1')->orderBy('updated_at', 'desc')->take(4)->get();
        return view('home', compact('reviews'));
    }
}
