<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\catagory;

use App\post;

use App\Tag;

class postController extends Controller
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
        return view('post.index') -> with('posts' , post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cater = catagory::all();
        
        if($cater -> count() == 0){
            return  redirect() -> route('category.create');
        }
       return view('post.create') -> with('dbcat' , catagory::all()) -> with('tager' , Tag::all());// takecare here dot not backslach
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());  // die dump its used to view all data sent on this request to data base
       
       // now we will make avalidation on field in form we will make it requird
       
       $request->validate([
         "title" => "required",
         "content" => "required",
         "catagory_id" => "required",
         "tags" => "required",
         "featured" => "required|image",
         ]);
       $featured= $request -> featured;  // اامسك الصورة فمتغير
       $featured_new_name = time().$featured->getClientOriginalName();  // جبت اسم صورة ال مسكتها وضربتها في تيم عشان اغير اسمها
       $featured -> move('upload/posts' , $featured_new_name );  // send image with new name to public file and create upload by hand and posts on it
       
       $post = post::create([
         "title" => $request -> title,
         "content" => $request -> content,
         "catagory_id" => $request -> catagory_id,
         "featured" =>  'upload/posts/'.$featured_new_name 
         ]);
         
       $post -> Tag() -> attach($request->tags);
       
       return redirect() -> back();
       //dd($request -> all());
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
         $posts = post::find($id);
        
        return view('post.edit') -> with('solopost' , $posts) -> with('cate', catagory::all()) ->with('tagersss' , Tag::all());;
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
        
         $posts = post::find($id);
        
        
         $request->validate([
         "title" => "required",
         "content" => "required",
         
         ]);
         
         // ده  عشان يشوف هو في صورة جيالوا ول لا لان مش لازم يعدل تعديل علي صورة
         if($request -> hasFile('featured'))
         {
         $featured= $request -> featured;  // اامسك الصورة فمتغير
         $featured_new_name = time().$featured->getClientOriginalName();  // جبت اسم صورة ال مسكتها وضربتها في تيم عشان اغير اسمها
         $featured -> move('upload/posts' , $featured_new_name );
         
         $posts -> featured = 'upload/posts/'.$featured_new_name ;
         }
         
        
        $posts -> title =   $request ->title;
        $posts -> content =   $request ->content;
        $posts -> Tag() -> sync($request ->tags); 
        $posts -> catagory_id =   $request ->catagory_id;
        $posts -> save();
        
        
        return redirect() -> route('post.views');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    // to delete post but when we use SoftDelete on post model class will make this delete soft untill use delete not force delete.
    public function destroy($id)
    {
         $posts = post::find($id);
         $posts -> delete();
         
        return redirect() -> back();
    }
    
    
    // for soft delet and dont forget use use Illuminate\Database\Eloquent\SoftDeletes; on post model and use SoftDelete on class on post model
    // get only trashed post and view in softdelete page
  public function trashed()
    {
         $postss = post::onlyTrashed()->get();
         
        return view('post.softdelete') -> with('posted' , $postss);
    }
    
    
     // عشان تدمر البوست حتي من فيو بتاع السوفت ومن داتا بيز
     public function hdelete($id)
    {
       $posts = post::withTrashed() -> where('id', $id)->first();   // withtrashrd mean sotdelete post make to this id first delete as force
       $posts -> forceDelete(); // امسحوا خالص 
         
        return redirect() -> back();
    }
    
     public function restore($id)
    {
       $posts = post::withTrashed() -> where('id', $id)->first();   // withtrashrd mean sotdelete post make to this id first delete as force
       $posts -> restore(); // رجع البوست ال كنت عملوا تراش  هيشيل ال ديليت ات وقت حذف
         
        return redirect()->route('post.views');
}


}