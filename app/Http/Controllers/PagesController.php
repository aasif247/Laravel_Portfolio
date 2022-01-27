<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\About;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $main = Main::first();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $abouts = About::all();
        return view('pages.index',compact('main','services','portfolios','abouts'));
    }

    
    public function portfolio(){
        return view('pages.portfolio');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }
}
