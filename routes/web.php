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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/pagle1', function () {
    return view('pagle1');
});


Route::get('/page1', function () {

    $array = [
        "NAME" => "" ,
        "ID"   => "",
        "GEN"  => "",
        "NUM"  =>""
];
    return view('page.page1' , $array);
});

Route::get('/page2', function () {
    return view('page.page2');
});

Route::get('/page3', function () {
    return view('page.page3');
});


Route::get('/page10/{id}', function ($id) {
    $array = [
        "ID" => $id
    ];
    return view('page.page10',$array); 
});

Route::get('/form_register', function () {
    return view('page.form_register'); 
});

Route::get('/login', function () {
    return view('page.login'); 
});

#localhost:8000
Route::post('/page','PageController@show');

#select post
Route::post('/page12','PageController@show_select');

//link form.login
Route::post('/page','PageController@ShowLogin');

Route::get('/login', function () {
    $data = [
        'users'=>[]
    ];
});

//Route::get('/form_check-login', function (){
  //  return view('/form_check-login')
//});


Route::get('/login', function (){
    $data = [
        'users'=>[]
    ];
    return view('/page.login',$data);
});    

Route::post('/login','PageController@login');

/////////////////////////////////////////////////////////////////

Route::get('/form_login2', function () {
    $array = [
        'username'=>'',
        'name'    =>''
    ];
    return view('/page.form_login',$array);
});    

Route::post('/form_login2','PageController@form_login2');



///////////////////////////////////////////////////////////////////



//  Route::get('/list_users', function () {
//      return view('/page.list_users);
//  });   

 Route::get('/list_user','UsersController@list_users');
 Route::post('/list_users_find','UsersController@list_users_find');
 
/////////////////////////////////////////////////////////////////
  Route::get('delete_user/{id}', function ($id) {
     return 'User ='.$id;
 });

Route::get('/delete_user/{id}','UsersController@delete_users');

 #form_register_save
Route::post('/form_register_save','UsersController@form_register_save');
