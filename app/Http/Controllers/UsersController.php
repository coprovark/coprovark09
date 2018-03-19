<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class UsersController extends Controller
{
 
//list_user=====================================//  
    public function list_users()
    {
        $find= '';
        $users = DB::table('coprovark_09')->select('*')->get();
        return view('page.list_user',[
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
        return view('page.list_user',[
          'data_list' => $users,
          'find'      => $find
        ]);
    }

    
//delete_users======================================================//
    public function delete_users($id){
        DB::table('coprovark_09')
            ->where('id', '=', $id)
            ->delete();
        return redirect('list_user');
      }

//delete_update======================================================//
public function update_users($id){
  DB::table('coprovark_09')
      ->increment('id', '=', $id)
      ->update();
  return redirect('list_user');
}      

// form_register_save==============================================//     
      public function form_register_save(Request $req){
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
           return redirect('list_user');
        }else{
           return "เกิดข้อผิดพลาด";
        }
       
       
      }

}//endclass Controller