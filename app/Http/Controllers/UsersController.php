<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\profile;


class UsersController extends Controller
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
          return view('users.index') -> with('ser' , User::all());;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $this->validate($request , [
                                    'name' => 'required',
                                    'email' => 'required'
                                    
                                    ]);
        
       $user=User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt('password')
                    
                    ]);
        
       $profiles = profile::create([
                    'user_id' => $user->id,
                    'avatar' => 'upload\avatar\1.png',
                    ]);
        
        return redirect() -> route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        return view('users.edit') -> with('solopost' , $user);
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
                 $user = User::find($id);
        
        
         $request->validate([
         "name" => "required",
         "email" => "required",
         "avatar" => "required",
         "password" => "required",
         
         ]);
         
         // ده  عشان يشوف هو في صورة جيالوا ول لا لان مش لازم يعدل تعديل علي صورة
         if($request -> hasFile('avatar'))
         {
         $avatar = $request -> avatar;  // اامسك الصورة فمتغير
         $avatar_new_name = time().$avatar->getClientOriginalName();  // جبت اسم صورة ال مسكتها وضربتها في تيم عشان اغير اسمها
         $avatar -> move('upload/avatar' , $avatar_new_name);
         
         $user -> avatar = 'upload/avatar/'.$avatar_new_name ;
         }
         
        
        $user -> name =   $request ->name;
        $user -> email =   $request ->email;
        $user -> password =  bcrypt('password');

        $user -> save();
        
        
        return redirect() -> route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $user = User::find($id);
           $user -> forceDelete();
           
        return redirect() -> back();
    }
    
    public function admin($id)
    {
           $user = User::find($id);
           $user -> admin = 1;
           $user -> save();
           
        return redirect() -> route('users.index');
    }
    
       public function notAdmin($id)
    {
           $user = User::find($id);
           $user -> admin = 0;
           $user -> save();
           
        return redirect() -> route('users.index');
    }    
}
