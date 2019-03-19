<?php

use Illuminate\Database\Seeder;

class SettingSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
                              'blog_Name' => 'CMS system' ,
                              'number' => '+201279196029',
                              'email' => 'mohamed.hassan2524@gmail.com',
                              'address' => 'Street No.45 from street No.45 .Alexandria Egypt '
                            
                              ]);
    }
}
