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

 #form_user_save
//  Route::get('/form_user', function () {
//     return view('pages.form_user'); 

Route::post('/form_user_save','PersonalController@form_user_save');

// function delete_tbuser
// Route::get('delete_user/{user_id}', function ($user_id) {
//     return 'User ='.$user_id;
// });
Route::get('/delete_tbuser/{user_id}','PersonalController@delete_tbuser');

//function form_user_edit

Route::get('/form_user_edit/{id}','PersonalController@form_user_edit');

Route::post('/form_user_update','PersonalController@form_user_update');

 #form_user
 Route::get('/form_user', function () {
    return view('pages.form_user'); 
});

//********************************************************************************//

#show_title
Route::get('/show_title','PersonalController@show_title');
Route::post('/show_title_find','PersonalController@show_title_find');

#form_title
Route::get('/form_title', function () {
    return view('pages.form_title'); 
});

#form_title_save
 Route::post('/form_title_save','PersonalController@form_title_save');


//********************************************************************************//

#show_faculty
Route::get('/show_faculty','PersonalController@show_faculty');
Route::post('/show_faculty_find','PersonalController@show_faculty_find');

#form_faculty
Route::get('/form_faculty', function () {
    return view('pages.form_faculty'); 
});

#form_faculty_save
 Route::post('/form_faculty_save','PersonalController@form_faculty_save');

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

#show_learning
Route::get('/show_learning','PersonalController@show_learning');
Route::post('/show_learning_find','PersonalController@show_learning_find');

#form_learning
Route::get('/form_learning', function () {
    return view('pages.form_learning'); 
});

#form_learning_save
 Route::post('/form_learning_save','PersonalController@form_learning_save');

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

#show_status
Route::get('/show_status','PersonalController@show_status');
Route::post('/show_status_find','PersonalController@show_status_find');

#form_status
Route::get('/form_status', function () {
    return view('pages.form_status'); 
});

#form_status_save
 Route::post('/form_status_save','PersonalController@form_status_save');

 #delete_status
 Route::get('/delete_tdstatus/{status_id}','PersonalController@delete_status');


//********************************************************************************//

#show_blood
Route::get('/show_blood','PersonalController@show_blood');
Route::post('/show_blood_find','PersonalController@show_blood_find');

#form_blood
Route::get('/form_blood', function () {
    return view('pages.form_blood'); 
});

#form_blood_save
 Route::post('/form_blood_save','PersonalController@form_blood_save');

 #delete_blood
 Route::get('/delete_tdblood/{blood_id}','PersonalController@delete_blood');


 //********************************************************************************//

#show_nation
Route::get('/show_nation','PersonalController@show_nation');
Route::post('/show_nation_find','PersonalController@show_nation_find');

#form_nation
Route::get('/form_nation', function () {
    return view('pages.form_nation'); 
});

#form_nation_save
 Route::post('/form_nation_save','PersonalController@form_nation_save');

 #delete_nation
 Route::get('/delete_tdnation/{nation_id}','PersonalController@delete_nation');

  //********************************************************************************//

#show_race
Route::get('/show_race','PersonalController@show_race');
Route::post('/show_race_find','PersonalController@show_race_find');

#form_race
Route::get('/form_race', function () {
    return view('pages.form_race'); 
});

#form_race_save
 Route::post('/form_race_save','PersonalController@form_race_save');

 #delete_nation
 Route::get('/delete_tdrace/{race_id}','PersonalController@delete_race');

//********************************************************************************//

#show_religion
Route::get('/show_religion','PersonalController@show_religion');
Route::post('/show_religion_find','PersonalController@show_religion_find');

#form_religion
Route::get('/form_religion', function () {
    return view('pages.form_religion'); 
});

#form_religion_save
 Route::post('/form_religion_save','PersonalController@form_religion_save');

 #delete_nation
 Route::get('/delete_tdreligion/{religion_id}','PersonalController@delete_religion');


//********************************************************************************//

#show_address
Route::get('/show_address','PersonalController@show_address');
Route::post('/show_address_find','PersonalController@show_address_find');

#form_address
Route::get('/form_address', function () {
    return view('pages.form_address'); 
});

#form_address_save
 Route::post('/form_address_save','PersonalController@form_address_save');

 #delete_nation
 Route::get('/delete_tdaddress/{address_id}','PersonalController@delete_address');

//********************************************************************************//

#show_contact
Route::get('/show_contact','PersonalController@show_contact');
Route::post('/show_contact_find','PersonalController@show_contact_find');

#form_contact
Route::get('/form_contact', function () {
    return view('pages.form_contact'); 
});

#form_contact_save
 Route::post('/form_contact_save','PersonalController@form_contact_save');

 #delete_nation
 Route::get('/delete_tdcontact/{contact_id}','PersonalController@delete_contact');










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

#list_resume
Route::get('/list_resume/{id}','PersonalController@list_resume');





 //===============================edit===================================//

