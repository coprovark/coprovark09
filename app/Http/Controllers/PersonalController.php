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
public function delete_tbuser($id){
  DB::table('tbuser')
      ->where('id', '=', $id)
      ->delete();
  return redirect('show_user');
}      

//form_user_edit
public function form_user_edit(Request $req){
  $find = $req->id;
  $user = DB::table('tbuser')
        ->select('*')
        ->where('id','=',$find)
        ->get();

  return view('pages.form_user_edit',[
    'user' => $user,
    
  ]);
}

//form_user_update
public function form_user_update(Request $req){
  $user_id           = $req->ID;
  $user_code         = $req->USER_CODE;
  $user_codename     = $req->USER_CODENAME;
  $data = [
      'user_code'    =>$user_code,
      'user_codename'=>$user_codename
  ];
  $status = DB::table('tbuser')
              ->where('id', $user_id)
              ->update($data);
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


//show_faculty_find
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
      'faculty_name'      => $req->FACULTY_NAME,
      'faculty_lavel'     => $req->FACULTY_LAVEL,
      'GPA'               => $req->GPAS
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

#show_learning==========================================================================================================  

public function show_learning()
{
    $find= '';
    $users = DB::table('tblearning')->select('*')->get();
    return view('pages.show_learning',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_learning_find
public function show_learningr_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdlearning')
          ->select('*')
          ->where('learning_id','=',$find)
          ->get();
    return view('pages.show_learning',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_learning_save     
public function form_learning_save(Request $req){
  $status = DB::table('tblearning')->insert(
    [
      
      'learning_id'      => $req->LEARNING_ID,
      'style_V'          => $req->STYLE_V,
      'style_A'          => $req->STYLE_A,
      'style_R'          => $req->STYLE_R,
      'style_K'          => $req->STYLE_K,
      'style_modal'      => $req->STYLE_MODAL,
 
    ]
  );
  if($status){
     return redirect('show_learning');
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


#show_status==========================================================================================================  

public function show_status()
{
    $find= '';
    $users = DB::table('tbstatus')->select('*')->get();
    return view('pages.show_status',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_status_find
public function show_status_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdstatus')
          ->select('*')
          ->where('status_id','=',$find)
          ->get();
    return view('pages.show_status',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_status_save     
public function form_status_save(Request $req){
  $status = DB::table('tbstatus')->insert(
    [
      
      'status_id'      => $req->STATUS_ID,
      'status_code'    => $req->STATUS_CODE,
      'status_name'    => $req->STATUS_NAME,
 
    ]
  );
  if($status){
     return redirect('show_status');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#delete_status
public function delete_status($status_id){
  DB::table('tbstatus')
      ->where('status_id', '=', $status_id)
      ->delete();
  return redirect('show_status');
}

#show_blood==========================================================================================================  

public function show_blood()
{
    $find= '';
    $users = DB::table('tbblood')->select('*')->get();
    return view('pages.show_blood',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_blood_find
public function show_blood_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdblood')
          ->select('*')
          ->where('blood_id','=',$find)
          ->get();
    return view('pages.show_blood',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_blood_save     
public function form_blood_save(Request $req){
  $status = DB::table('tbblood')->insert(
    [
      
      'blood_id'      => $req->BLOOD_ID,
      'blood_code'    => $req->BLOOD_CODE,
      'blood_name'    => $req->BLOOD_NAME,
 
    ]
  );
  if($status){
     return redirect('show_blood');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#delete_status
public function delete_blood($blood_id){
  DB::table('tbblood')
      ->where('blood_id', '=', $blood_id)
      ->delete();
  return redirect('show_blood');
}

#show_nation==========================================================================================================  

public function show_nation()
{
    $find= '';
    $users = DB::table('tbnation')->select('*')->get();
    return view('pages.show_nation',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_nation_find
public function show_nation_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdnation')
          ->select('*')
          ->where('nation_id','=',$find)
          ->get();
    return view('pages.show_nation',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_nation_save     
public function form_nation_save(Request $req){
  $status = DB::table('tbnation')->insert(
    [
      
      'nation_id'      => $req->NATION_ID,
      'nation_code'    => $req->NATION_CODE,
      'nation_name'    => $req->NATION_NAME,
 
    ]
  );
  if($status){
     return redirect('show_nation');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#delete_nation
public function delete_nation($nation_id){
  DB::table('tbnation')
      ->where('nation_id', '=', $nation_id)
      ->delete();
  return redirect('show_nation');
}

#show_race==========================================================================================================  
public function show_race()
{
    $find= '';
    $users = DB::table('tbrace')->select('*')->get();
    return view('pages.show_race',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_race_find
public function show_race_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdrace')
          ->select('*')
          ->where('race_id','=',$find)
          ->get();
    return view('pages.show_race',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_race_save     
public function form_race_save(Request $req){
  $status = DB::table('tbrace')->insert(
    [
      
      'race_id'      => $req->RACE_ID,
      'race_code'    => $req->RACE_CODE,
      'race_name'    => $req->RACE_NAME,
 
    ]
  );
  if($status){
     return redirect('show_race');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#delete_race
public function delete_race($race_id){
  DB::table('tbrace')
      ->where('race_id', '=', $race_id)
      ->delete();
  return redirect('show_race');
}

#show_religion==========================================================================================================  
public function show_religion()
{
    $find= '';
    $users = DB::table('tbreligion')->select('*')->get();
    return view('pages.show_religion',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_religion_find
public function show_religion_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdreligion')
          ->select('*')
          ->where('religion_id','=',$find)
          ->get();
    return view('pages.show_religion',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_religion_save     
public function form_religion_save(Request $req){
  $status = DB::table('tbreligion')->insert(
    [
      
      'religion_id'      => $req->RELIGION_ID,
      'religion_code'    => $req->RELIGION_CODE,
      'religion_name'    => $req->RELIGION_NAME,
 
    ]
  );
  if($status){
     return redirect('show_religion');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#delete_race
public function delete_religion($race_id){
  DB::table('tbreligion')
      ->where('religion_id', '=', $race_id)
      ->delete();
  return redirect('show_religion');
}

#show_address==========================================================================================================  
public function show_address()
{
    $find= '';
    $users = DB::table('tbaddress')->select('*')->get();
    return view('pages.show_address',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_address_find
public function show_address_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdaddress')
          ->select('*')
          ->where('address_id','=',$find)
          ->get();
    return view('pages.show_address',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_address_save     
public function form_address_save(Request $req){
  $status = DB::table('tbaddress')->insert(
    [
      
      'address_id'           => $req->RELIGION_ID,
      'address_permanent'    => $req->ADDRESS_PERMANENT,
      'address_present'      => $req->ADDRESS_PRESENT,
 
    ]
  );
  if($status){
     return redirect('show_address');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#delete_address
public function delete_address($address_id){
  DB::table('tbaddress')
      ->where('address_id', '=', $address_id)
      ->delete();
  return redirect('show_address');
}

#show_contact==========================================================================================================  
public function show_contact()
{
    $find= '';
    $users = DB::table('tbcontact')->select('*')->get();
    return view('pages.show_contact',[
      'data_list' => $users,
      'find'      => $find
    ]);
}


//show_contact_find
public function show_contact_find(Request $req)
{
    $find = $req->find;
    $users = DB::table('tdcontact')
          ->select('*')
          ->where('contact_id','=',$find)
          ->get();
    return view('pages.show_acontact',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_contact_save     
public function form_contact_save(Request $req){
  $status = DB::table('tbcontact')->insert(
    [
      
      'contact_id'        => $req->CONTACT_ID,
      'contact_phone'     => $req->CONTACT_PHONE,
      'contact_mobile'    => $req->CONTACT_MOBILE,
      'contact_Email'     => $req->CONTACT_EMAIL,
      'contact_facebook'  => $req->CONTACT_FACEBOOK,
      'contact_wedsite'   => $req->CONTACT_WEDSITE,
      
 
    ]
  );
  if($status){
     return redirect('show_contact');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

#delete_contact
public function delete_contact($contact_id){
  DB::table('tbcontact')
      ->where('contact_id', '=', $contact_id)
      ->delete();
  return redirect('show_contact');
}








//show_resume======================================================================================================//  
public function show_resume()
{
    $find= '';
    $users = DB::table('tbuser')
             ->join('tbnodate','tbuser.id','=', 'tbnodate.id')
             ->join('tbtitle','tbuser.id','=','tbtitle.title_id')
             ->select('tbuser.*','tbnodate.nos','tbnodate.date','tbtitle.*')
             ->get();

    return view('pages.show_resume',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#show_resume_find
public function show_resume_find(Request $req)
{
    $find = $req->find;
    $users =  DB::table('tbuser')
          ->join('tbnodate','tbuser.id','=', 'tbnodate.id')
          ->join('tbtitle','tbuser.id','=','tbtitle.title_id')
          ->select('tbuser.*','tbnodate.nos','tbnodate.date','tbtitle.*')
          ->where('id','like',$find)
          ->get();
    return view('pages.show_user',[
      'data_list' => $users,
      'find'      => $find
    ]);
}

#form_resume_save     
public function form_resume_save(Request $req){
  $status = DB::table('tbuser')->insert(
    [
      'user_lavel'        => $req->USER_LAVEL,
      'user_code'         => $req->USER_CODE,
      'user_codename'     => $req->USER_CODENAME
    ]
  );
  if($status){
     return redirect('show_resume');
  }else{
     return "เกิดข้อผิดพลาด";
  } 
}

// #delete_tbuser
// public function delete_tbuser($id){
//   DB::table('tbuser')
//       ->where('id', '=', $id)
//       ->delete();
//   return redirect('show_user');
// }      

// //form_user_edit
// public function form_user_edit(Request $req){
//   $find = $req->id;
//   $user = DB::table('tbuser')
//         ->select('*')
//         ->where('id','=',$find)
//         ->get();

//   return view('pages.form_user_edit',[
//     'user' => $user,
    
//   ]);
// }

// //form_user_update
// public function form_user_update(Request $req){
//   $user_id           = $req->ID;
//   $user_code         = $req->USER_CODE;
//   $user_codename     = $req->USER_CODENAME;
//   $data = [
//       'user_code'    =>$user_code,
//       'user_codename'=>$user_codename
//   ];
//   $status = DB::table('tbuser')
//               ->where('id', $user_id)
//               ->update($data);
//   return redirect('show_user');
// }

#list_resume
public function list_resume(Request $req){
  $id = $req->id;
  $users = DB::table('tbuser')
      ->join('tbnodate','tbuser.id','=', 'tbnodate.id')
      ->join('tbtitle','tbuser.id','=','tbtitle.title_id')
      ->join('tbfaculty','tbuser.id','=','tbfaculty.faculty_id')
      ->join('tbmojor','tbuser.id','=','tbmojor.mojor_id')
      ->join('tbtype','tbuser.id','=','tbtype.type_id')
      ->join('tbinstitute','tbuser.id','=','tbinstitute.institute_id')
      ->join('tblearning','tbuser.id','=','tblearning.learning_id')
      ->join('tbbirthday','tbuser.id','=','tbbirthday.birthday_id')
      ->join('tbgender','tbuser.id','=','tbgender.gender_id')
      ->join('tbstatus','tbuser.id','=','tbstatus.status_id')
      ->join('tbblood','tbuser.id','=','tbblood.blood_id')
      ->join('tbnation','tbuser.id','=','tbnation.nation_id')
      ->join('tbrace','tbuser.id','=','tbrace.race_id')
      ->join('tbreligion','tbuser.id','=','tbreligion.religion_id')
      ->join('tbaddress','tbuser.id','=','tbaddress.address_id')
      ->join('tbcontact','tbuser.id','=','tbcontact.contact_id')
      ->select('tbuser.*', 
              'tbnodate.*',
              'tbtitle.*',
              'tbfaculty.*',
              'tbmojor.*',
              'tbtype.*',
              'tbinstitute.*',
              'tblearning.*',
              'tbbirthday.*',
              'tbgender.*',
              'tbstatus.*',
              'tbblood.*',
              'tbnation.*',
              'tbrace.*',
              'tbreligion.*',
              'tbaddress.*',
              'tbcontact.*')
      ->where('tbuser.id', '=', $id)
      ->get();

  return view('pages.list_resume', [
     'users'=>$users
  ]);
}    



}//endclass Controller

