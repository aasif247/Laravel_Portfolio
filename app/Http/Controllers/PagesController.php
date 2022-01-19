<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        return view('pages.index',compact('main'));
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function services(){
        return view('pages.services');
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
