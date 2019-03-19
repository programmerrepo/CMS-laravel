<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    
    
       protected $fillable = [
        'user_id', 'avatar', 'facebook', 'twitter' , 'git' , 'about' ,
    ];

    
    
    
             public function user()
    {
        return $this->belongsTo('App\User');   //reverse to catagory of the post   // this post belogn to this catagory on app
    }
}
        