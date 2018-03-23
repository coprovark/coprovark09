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


//***********************************************************//



//  Route::get('/list_users', function () {
//      return view('/page.list_users);
//  });   

 Route::get('/list_user','UsersController@list_users');
 Route::post('/list_users_find','UsersController@list_users_find');
 
//=================================================================//
// function delete_users
  Route::get('delete_user/{id}', function ($id) {
     return 'User ='.$id;
 });

Route::get('/delete_user/{id}','UsersController@delete_users');

//===============================================================//
//function form_user_edit

// Route::post('/list_user_edit/{id}','UsersController@list_user_edit');

Route::get('/list_user_edit/{id}','UsersController@list_user_edit');

Route::post('/list_user_update','UsersController@list_user_update');


//=============================================================//
 #form_register_save
Route::post('/form_register_save','UsersController@form_register_save');
//=============================================================//
  





//=============================Personal===============================//

// #show_user
// Route::get('/show_user','PersonalController@list_users');
// Route::post('/list_users_find','PersonalController@list_users_find');

#show_user
Route::get('/show_user','PersonalController@show_user');
Route::post('/show_user_find','PersonalController@show_user_find');


//  #form_personal_save
//  Route::get('/form_personal', function () {
//     return view('pages.form_personal'); 
// });

 #form_user_save
//  Route::get('/form_user', function () {
//     return view('pages.form_user'); 

Route::post('/form_user_save','PersonalController@form_user_save');

// function delete_tbuser
// Route::get('delete_user/{user_id}', function ($user_id) {
//     return 'User ='.$user_id;
// });
Route::get('/delete_tbuser/{user_id}','PersonalController@delete_tbuser');

 #form_user
 Route::get('/form_user', function () {
    return view('pages.form_user'); 
});

//********************************************************************************//

#show_title
Route::get('/show_title','PersonalController@show_title');
Route::post('/show_title_find','PersonalController@show_title_find');

#form_user
Route::get('/form_title', function () {
    return view('pages.form_title'); 
});

#form_title_save
 Route::post('/form_title_save','PersonalController@form_title_save');


//********************************************************************************//

#show_faculty
Route::get('/show_faculty','PersonalController@show_faculty');
Route::post('/show_faculty_find','PersonalController@show_faculty_find');

#form_user
Route::get('/form_title', function () {
    return view('pages.form_title'); 
});

#form_title_save
 Route::post('/form_title_save','PersonalController@form_title_save');

//********************************************************************************//

#show_title
Route::get('/show_mojor','PersonalController@show_mojor');
Route::post('/show_mojor_find','PersonalController@show_mojor_find');

#form_title
Route::get('/form_mojor', function () {
    return view('pages.form_mojor'); 
});

#form_title_save
 Route::post('/form_mojor_save','PersonalController@form_mojor_save');

 //********************************************************************************//

#show_type
Route::get('/show_type','PersonalController@show_type');
Route::post('/show_type_find','PersonalController@show_type_find');

#form_type
Route::get('/form_type', function () {
    return view('pages.form_type'); 
});

#form_type_save
 Route::post('/form_type_save','PersonalController@form_type_save');

  //********************************************************************************//

#show_institute
Route::get('/show_institute','PersonalController@show_institute');
Route::post('/show_institute_find','PersonalController@show_institute_find');

#form_institute
Route::get('/form_institute', function () {
    return view('pages.form_institute'); 
});

#form_institute_save
 Route::post('/form_institute_save','PersonalController@form_institute_save');

 //********************************************************************************//

#show_birthday
Route::get('/show_birthday','PersonalController@show_birthday');
Route::post('/show_birthday_find','PersonalController@show_birthday_find');

#form_birthday
Route::get('/form_birthday', function () {
    return view('pages.form_birthday'); 
});

#form_birthday_save
 Route::post('/form_birthday_save','PersonalController@form_birthday_save');

 //********************************************************************************//

#show_gender
Route::get('/show_gender','PersonalController@show_gender');
Route::post('/show_gender_find','PersonalController@show_gender_find');

#form_gender
Route::get('/form_gender', function () {
    return view('pages.form_gender'); 
});

#form_gender_save
 Route::post('/form_gender_save','PersonalController@form_gender_save');






 //********************************************************************************//

#show_resume
Route::get('/show_resume','PersonalController@show_resume');
Route::post('/show_resume_find','PersonalController@show_resume_find');

#form_resume
Route::get('/form_resume', function () {
    return view('pages.form_resume'); 
});

#form_resume_save
 Route::post('/form_resume_save','PersonalController@form_resume_save');




 //===============================edit===================================//

