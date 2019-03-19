<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
          protected $fillable = [          // كدة انا بعمل عدم تلاعب مع المدخلات ال بيتعامل معاها ال موديل فورم
        'blog_Name', 'number', 'email', 'address',
    ];
}
