<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
     public function posts()
    {
        return $this->hasMany('App\post');  // this its refer to catagory of of post  //and this catagory has many post on post module
    }

}
