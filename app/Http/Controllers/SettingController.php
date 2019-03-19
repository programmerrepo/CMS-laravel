<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;

class SettingController extends Controller
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
    public function index()
    {
        return view('setting.create') -> with('solosetting' , Setting::first());
    }

  
    public function update(Request $request)
    {
        $set = Setting::first();
        
        
          $request->validate([
         "blog_Name" => "required",
         "number" => "required",
         "email" => "required",
         "address" => "required",
         
         ]);
          
          
        $set -> blog_Name =   $request ->blog_Name;         
        $set -> number =   $request ->number;
        $set -> email =   $request ->email;
        $set -> address =   $request ->address;
       

        $set -> save();
        
        
        return redirect() -> back();
        
        
    }


}
