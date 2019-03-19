<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use\post;

class Tag extends Model
{
    
      protected $fillable = [          // كدة انا بعمل عدم تلاعب مع المدخلات ال بيتعامل معاها ال موديل فورم
        'tag',
    ];
      
      
      
       public function post()
    {
        return $this->belongsToMany('App\post');   //reverse to catagory of the post   // this post belogn to this catagory on app
    }
}
