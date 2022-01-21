<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        // $service = Service::first();
        return view('pages.index')->with('main',$main);
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
