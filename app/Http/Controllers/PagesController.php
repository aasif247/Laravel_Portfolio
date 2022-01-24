<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        $services = Service::all();
        $portfolios = Portfolio::all();
        return view('pages.index',compact('main','services','portfolios'));
    }

    public function dashboard(){
        return view('pages.dashboard');
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
