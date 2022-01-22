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

    public function edit($id)
    {
    
        $services = Service::find($id);
        return view('pages.services.edit',compact('services'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'icon' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $services = Service::find($id);
        $services->icon = $request->icon;
        $services->name = $request->name;
        $services->description = $request->description;

        $services->save();

        return redirect()->route('admin.service.list')->with('success','Service updated successfully');
    }

    public function destroy($id){
        $services = Service::find($id);
        $services->delete();
        return redirect()->route('admin.service.list')->with('success','Service deleted successfully');
    }

}
