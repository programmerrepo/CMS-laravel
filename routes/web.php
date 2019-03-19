<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


    // route post
     Route::get('/post/hdelete/{id}', 'postController@hdelete')->name('post.hdelete');
     
     Route::get('/post/restore/{id}', 'postController@restore')->name('post.restore');
    
    Route::get('/post/trashed', 'postController@trashed')->name('post.trashed');
    
    Route::get('/post/create', 'postController@create')->name('post.create');

    Route::post('/post/store', 'postController@store')->name('post.store');
    
    Route::get('/post/views', 'postController@index')->name('post.views');
    
    Route::get('/post/edit/{id}', 'postController@edit')->name('post.edit');
        
    Route::get('/post/delete/{id}', 'postController@destroy')->name('post.delete');
    
    Route::post('/post/update/{id}', 'postController@update')->name('post.update');

     
    
    
    //route category
        Route::get('/categories', 'categoriesController@index')->name('categories'); //for view
        
        Route::get('/category/edit/{id}', 'categoriesController@edit')->name('category.edit');
        
        Route::get('/category/delete/{id}', 'categoriesController@destroy')->name('category.delete');
       
        Route::get('/category/create', 'categoriesController@create')->name('category.create');

        Route::post('/category/store', 'categoriesController@store')->name('category.store');
        
        Route::post('/category/update/{id}', 'categoriesController@update')->name('category.update');
        
        
        


    // route tag
    
    Route::get('/tag/create', 'TagController@create')->name('tag.create');

    Route::post('/tag/store', 'TagController@store')->name('tag.store');
    
    Route::get('/tag/views', 'TagController@index')->name('tag.views');
    
    Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
        
    Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete');
    
    Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update');
        
        
        
        
           // route user
    Route::get('/user/admin/{id}', 'UsersController@admin')->name('user.admin');
    
    Route::get('/user/notadmin/{id}', 'UsersController@notAdmin')->name('user.notadmin');
    
    Route::get('/user/create', 'UsersController@create')->name('user.create');

    Route::post('/user/store', 'UsersController@store')->name('user.store');
    
    Route::get('/users/index', 'UsersController@index')->name('users.index');
    
    Route::get('/user/edit/{id}', 'UsersController@edit')->name('user.edit');
        
    Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user.delete');
    
    Route::post('/user/update/{id}', 'UsersController@update')->name('user.update');
    
    
    
    
    // route setting 
    
    Route::get('/setting/view', 'SettingController@index')->name('setting.view');  
    
    Route::post('/setting/update', 'SettingController@update')->name('setting.update');
    
    
        // route home 
    
    Route::get('/', 'welcomeController@index')->name('index');  
    

    
    
    
    
    
    
    
    
    
    
              //لو مش عايز تحط ال اثونتكشن لوج ان ل روت جروب دول في كنترولر ممكن تعمل روت جروب بشكل دة     
    //Route::group(['prefix' => 'Admin' , 'middleware' =>'auth'] , function(){
    //
    //Route::get('/post/create', 'postController@create')->name('post.create');
    //
    //Route::post('/post/store', 'postController@store')->name('post.store');
    //
    //
    //});
    
    
    // دة مثال بسيط علي ازاي تبحث علي كاتجوري بتاعت البوست ال اي دي بتاعوا 2 فبتروح لل اب موديل بوست وتقولوا اوجد اسم الدالة ال في موديل بوست ال عملة علاقة مع بوست ل اي دي 2
 //Route::post('/Search', function(){
 //                                  return App\post::find(2) -> catgorys ;
 //                                  })->name('Search');
 
 
 