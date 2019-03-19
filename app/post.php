<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use\Tag;

class post extends Model
{
    
    use SoftDeletes;   // عشان يعمل ديستروي بس سوفت
    
      protected $fillable = [          // كدة انا بعمل عدم تلاعب مع المدخلات ال بيتعامل معاها ال موديل فورم
        'title', 'content', 'catagory_id', 'featured',
    ];
      
      // دي عشان يحول الصورة ل لينك ويقدر يظهر الصورة فالسايت
      public function getFeaturedAttribute($featured)
    {
        return asset($featured);   //reverse to catagory of the post   // this post belogn to this catagory on app
    }  
      
     public function catgorys()
    {
        return $this->belongsTo('App\catagory');   //reverse to catagory of the post   // this post belogn to this catagory on app
    }
    
    
    
         public function Tag()
    {
        return $this->belongsToMany('App\Tag');   //reverse to catagory of the post   // this post belogn to this catagory on app
    }
}
