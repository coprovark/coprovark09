<?php

namespace App\Http\Controllers;

use App\coprovark_09;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class coprovark_09Controller extends Controller
{
    
    public function list_coprovark_09()
    {
        $find= '';
        $coprovark_09 = DB::table('coprovark_09')->select('*')->get();
        return view('page.list_coprovark_09',[
          'data_list' => $coprovark_09,
          'find'      => $find
        ]);
    }

    public function list_coprovark_09_find(Request $req)
    {
        $find = $req->find;
        $coprovark_09 = DB::table('coprovark_09')
              ->select('*')
              ->where('id','=',$find)
              ->get();
        return view('page.list_coprovark_09',[
          'data_list' => $coprovark_09,
          'find'      => $find
        ]);
    }

    
     
    public function delete_coprovark_09($id){
        DB::table('coprovark_09')->where('id', '=', $id)->delete();
        return redirect('list_coprovark_09');
      }

      
      public function form_student_save(Request $req){

        $status = DB::table('coprovark_09')->insert(
          [
            'id'      => $req->ID,
            'sid'      => $req->SID,
            'fullName'=> $req->FULLNAME,
            'birthDay'=> $req->DIRTHDAY,
            'facultyID'  => $req->FACULTYID
          ]
        );
        if($id){
           return redirect('list_coprovark_09');
        }else{
           return "เกิดข้อผิดพลาด";
        }
       
      }

}//class