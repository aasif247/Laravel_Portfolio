<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;


class ServicePagesController extends Controller
{
    public function index()
    {
        $service = Service::first();
        return view('pages.services',compact('service'));
    }

    public function create()
    {
        return view('pages.services.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'sub_title' => 'required|string',
            'icon' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $services = new Service;
        $services->sub_title = $request->sub_title;
        $services->icon = $request->icon;
        $services->name = $request->name;
        $services->description = $request->description;

        $services->save();

        return redirect()->route('admin.service.create')->with('success','New service created successfully');
    }

    // public function update(Request $request)
    // {
    //     $validateData = $request->validate([
    //         'title' => 'required|string',
    //         'sub_title' => 'required|string',
    //         'name' => 'required|string',
    //         'description' => 'required|string',
    //     ]);

    //     $service = Service::first();
    //     $service->title = $request->title;
    //     $service->sub_title = $request->sub_title;
    //     $service->name = $request->name;
    //     $service->description = $request->description;

    //     if($request->file('service_logo')){
    //         $img_file = $request->file('service_logo');
    //         $img_file->storeAs('public/img/','service_logo.' . $img_file->getClientOriginalExtension());
    //         $service->bg_img = 'storage/img/service_logo.' . $img_file->getClientOriginalExtension();
    //     }

    //     if($service->save()){
    //         return redirect()->route('admin.service')->with('success','Service page data has been updated successfully');
    //     }else{
    //         return redirect()->route('admin.service');
    //     };

        
    // }


}
