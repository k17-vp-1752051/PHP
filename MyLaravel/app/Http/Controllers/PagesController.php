<?php namespace App\Http\Controllers;

class PagesController extends Controller {
    
    public function about() { 
        return view('about'); 
    }
    
    public function contact() { 
        return view('contact'); 
    }

    public function home() {
        return view('home');
    }

}