<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;


class ServicePagesController extends Controller
{

    public function create()
    {
        return view('pages.services.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'icon' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $services = new Service;
        $services->icon = $request->icon;
        $services->name = $request->name;
        $services->description = $request->description;

        $services->save();

        return redirect()->route('admin.service.create')->with('success','New service created successfully');
    }

    public function list()
    {
        $services = Service::all();
        return view('pages.services.list',compact('services'));
    }

}
