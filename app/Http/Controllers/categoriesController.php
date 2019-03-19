<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\catagory;   // عشان تعمل تعديل علي الداتا بيز لازم تستدعي ال موديل جوة ال كنترول بتاعها

class categoriesController extends Controller
{
    
    
    
    
     public function __construct()   // its to enter post after login not before
 {
    $this->middleware('auth');
  }
  
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    // to view data from DB.
    public function index()
    {
    return view('category.index') -> with('cat' , catagory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
         "name" => "required"
         ]);
         
         
         $catagories = new catagory;   // هعمل اوبجكت من ال موديل ال عملتلوا استخدام فوق
         
         
         
         // $DB-NAME -> NAME OF COL ON DB = $request -> NAME ON THE REQUEST
         $catagories->name = $request->name;   
         
         $catagories->save();
         
         
         //return redirect('some/url');
         // or
         return redirect() -> back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $catagories = catagory::find($id);
        
        return view('category.edit') -> with('solo' , $catagories);
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $catagories = catagory::find($id);
        $catagories -> name =   $request ->name;
        $catagories -> save();
        return redirect() -> back();
        //return redirect() -> route(path);
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $catagories = catagory::find($id);
         $catagories -> delete();
        
         
        return redirect() -> back();
    }
}
