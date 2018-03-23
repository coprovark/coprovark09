<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    //list_user=====================================//  
    public function list_users()
    {
        $find= '';
        $users = DB::table('coprovark_09')->select('*')->get();
        return view('pages.show_user',[
          'data_list' => $users,
          'find'      => $find
        ]);
    }

    //list_users_find========================================//
    public function list_users_find(Request $req)
    {
        $find = $req->find;
        $users = DB::table('coprovark_09')
              ->select('*')
              ->where('id','=',$find)
              ->get();
        return view('pages.show_user',[
          'data_list' => $users,
          'find'      => $find
        ]);
    }

    
//delete_users======================================================//
    public function delete_users($id){
        DB::table('coprovark_09')
            ->where('id', '=', $id)
            ->delete();
        return redirect('show_user');
      }
     

// form_personal_save==============================================//     
      public function form_personal_save(Request $req){
        $status = DB::table('coprovark_09')->insert(
          [
            'sid'        => $req->STD,
            'titleName'  => $req->TITLENAME,
            'fullName'   => $req->FULLNAME,
            'gender'     => $req->GENDER,
            'birthDay'   => $req->BIRTHDAY,
            'facultyID'  => $req->FACULTYID,
            'majorID'    => $req->MAJORID, 
            'address'    => $req->ADDRESS,
            'mobile'     => $req->MOBILE,
            'food1'      => $req->FOOD1,
            'food2'      => $req->FOOD2, 
            'food3'      => $req->FOOD3,
            'food4'      => $req->FOOD4,
            'username'   => $req->USERNAME,
            'password'   => $req->PASSWORD
          ]
        );
        if($status){
           return redirect('show_user');
        }else{
           return "เกิดข้อผิดพลาด";
        }
       
       
      }

//======================================================================================================================//
 
//show_user======================================================================================================//  
public function show_user()
{
    $find= '';
    $users = DB::table('tbuser')->select('*')->get();
    return view('pages.show_user',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#show_user_find
public function show_user_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tduser')
          ->select('*')
          ->where('user_id','=',$find)
          ->get();
    return view('pages.show_user',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_user_save     
public function form_user_save(Request $req){
  $status = DB::table('tbuser')->insert(
    [
      'user_lavel'        => $req->USER_LAVEL,
      'user_code'         => $req->USER_CODE,
      'user_codename'     => $req->USER_CODENAME
    ]
  );
  if($status){
     return redirect('show_user');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#delete_tbuser
public function delete_tbuser($user_id){
  DB::table('tbuser')
      ->where('user_id', '=', $user_id)
      ->delete();
  return redirect('show_user');
}      


#show_title==========================================================================================================  
public function show_title()
{
    $find= '';
    $users = DB::table('tbtitle')->select('*')->get();
    return view('pages.show_title',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_title_find
public function show_title_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tduser')
          ->select('*')
          ->where('user_id','=',$find)
          ->get();
    return view('pages.show_title',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_title_save     
public function form_title_save(Request $req){
  $status = DB::table('tbtitle')->insert(
    [
      'title_code'        => $req->TITLE_CODE,
      'title_name'         => $req->TITLE_NAME,
      'title_nicname'     => $req->TITLE_NICNAME
    ]
  );
  if($status){
     return redirect('show_title');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#show_faculty==========================================================================================================  

public function show_faculty()
{
    $find= '';
    $users = DB::table('tbfaculty')->select('*')->get();
    return view('pages.show_faculty',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_title_find
public function show_faculty_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdfaculty')
          ->select('*')
          ->where('faculty_id','=',$find)
          ->get();
    return view('pages.show_title',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_faculty_save     
public function form_faculty_save(Request $req){
  $status = DB::table('tbfaculty')->insert(
    [
      'faculty_id'        => $req->FACULTY_ID,
      'faculty_code'      => $req->FACULTY_CODE,
      'faculty_name'      => $req->FACULTY_NAME
    ]
  );
  if($status){
     return redirect('show_faculty');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}


#show_mojor==========================================================================================================  

public function show_mojor()
{
    $find= '';
    $users = DB::table('tbmojor')->select('*')->get();
    return view('pages.show_mojor',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_mojor_find
public function show_mojor_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdmojor')
          ->select('*')
          ->where('mojor_id','=',$find)
          ->get();
    return view('pages.show_mojor',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_mojor_save     
public function form_mojor_save(Request $req){
  $status = DB::table('tbmojor')->insert(
    [
      
      'mojor_code'      => $req->MOJOR_CODE,
      'mojor_name'      => $req->MOJOR_NAME
    ]
  );
  if($status){
     return redirect('show_mojor');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#show_type==========================================================================================================  

public function show_type()
{
    $find= '';
    $users = DB::table('tbtype')->select('*')->get();
    return view('pages.show_type',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_type_find
public function show_type_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdtype')
          ->select('*')
          ->where('type_id','=',$find)
          ->get();
    return view('pages.show_type',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_type_save     
public function form_type_save(Request $req){
  $status = DB::table('tbtype')->insert(
    [
      
      'type_code'      => $req->TYPE_CODE,
      'type_name'      => $req->TYPE_NAME
    ]
  );
  if($status){
     return redirect('show_type');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#show_institute==========================================================================================================  

public function show_institute()
{
    $find= '';
    $users = DB::table('tbinstitute')->select('*')->get();
    return view('pages.show_institute',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_institute_find
public function show_institute_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdinstitute')
          ->select('*')
          ->where('institute_id','=',$find)
          ->get();
    return view('pages.show_institute',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_institute_save     
public function form_institute_save(Request $req){
  $status = DB::table('tbinstitute')->insert(
    [
      
      'institute_code'      => $req->INSTITUTE_CODE,
      'institute_name'      => $req->INSTITUTE_NAME
    ]
  );
  if($status){
     return redirect('show_institute');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#show_birthday==========================================================================================================  

public function show_birthday()
{
    $find= '';
    $users = DB::table('tbbirthday')->select('*')->get();
    return view('pages.show_birthday',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_birthday_find
public function show_birthday_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdbirthday')
          ->select('*')
          ->where('birthday_id','=',$find)
          ->get();
    return view('pages.show_birthday',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_birthday_save     
public function form_birthday_save(Request $req){
  $status = DB::table('tbbirthday')->insert(
    [
      
      'birthday_id'   => $req->BIRTHDAY_ID,
      'birthday'      => $req->BIRTHDAY,
      'weight'        => $req->WEIGHT,
      'height'        => $req->HEIGHHT
    ]
  );
  if($status){
     return redirect('show_birthday');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#show_gender==========================================================================================================  

public function show_gender()
{
    $find= '';
    $users = DB::table('tbgender')->select('*')->get();
    return view('pages.show_gender',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_gender_find
public function show_gender_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdgender')
          ->select('*')
          ->where('gender_id','=',$find)
          ->get();
    return view('pages.show_gender',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_gender_save     
public function form_gender_save(Request $req){
  $status = DB::table('tbgender')->insert(
    [
      
      'gender_id'      => $req->GENDER_ID,
      'gender_code'    => $req->GENDER_CODE,
      'gender_name'    => $req->GENDER_NAME,
 
    ]
  );
  if($status){
     return redirect('show_gender');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}



}//endclass Controller

