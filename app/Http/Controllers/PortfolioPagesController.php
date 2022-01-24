<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'big_image' => 'required|image',
            'small_image' => 'required|image',
            'description' => 'required|string',
            'client' => 'required|string',
            'category' => 'required|string',
        ]);
        $portfolios = new Portfolio;
        $portfolios->title = $request->title;
        $portfolios->sub_title = $request->sub_title;
        $portfolios->description = $request->description;
        $portfolios->client = $request->client;
        $portfolios->category = $request->category;

        $big_file = $request->file('big_image');
        Storage::putfile('public/img/',$big_file);
        $portfolios->big_image = 'storage/img/' . $big_file->hashName();

        $small_file = $request->file('small_image');
        Storage::putfile('public/img/',$small_file);
        $portfolios->small_image = 'storage/img/' . $small_file->hashName();

        $portfolios->save();

        return redirect()->route('admin.portfolio.create')->with('success','New portfolio created successfully');
    }

    public function list()
    {
        $portfolios = Portfolio::all();
        return view('pages.portfolio.list',compact('portfolios'));
    }
    
    public function edit($id)
    {
    
        $portfolios = Portfolio::find($id);
        return view('pages.portfolio.edit',compact('portfolios'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'description' => 'required|string',
            'client' => 'required|string',
            'category' => 'required|string',
        ]);

        $portfolios = Portfolio::find($id);
        $portfolios->title = $request->title;
        $portfolios->sub_title = $request->sub_title;
        $portfolios->description = $request->description;
        $portfolios->client = $request->client;
        $portfolios->category = $request->category;

        if($request->file('big_image')){
            $big_file = $request->file('big_image');
            Storage::putFile('public/img/', $big_file);
            $portfolios->big_image = "storage/img/".$big_file->hashName();
        }
        
        if($request->file('small_image')){
            $small_file = $request->file('small_image');
            Storage::putFile('public/img/', $small_file);
            $portfolios->small_image = "storage/img/".$small_file->hashName();
        }


        $portfolios->save();

        return redirect()->route('admin.portfolio.list')->with('success','Portfolio updated successfully');
    }

    public function destroy($id){
        $portfolios = Portfolio::find($id);
        $portfolios->delete();
        return redirect()->route('admin.portfolio.list')->with('success','Portfolio deleted successfully');
    }
    
}
