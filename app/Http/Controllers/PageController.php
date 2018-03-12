<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    
    public function show(Request $request)
    {
        $txt_name = $request->input('name');
        $txt_radio = $request->input('radio');
        $txt_hidden = $request->input('hidden');
        $txt_password = $request->input('password');

        $array = [
            "NAME" => $txt_name,
            "ID" => $txt_hidden,
            "GEN" => $txt_radio,
            "NUM" => $txt_password
        
    ];

        return view('page.page1',$array);   
    }

   #show_select
   public function show_select(Request $res){
       return view('page.page12',$res);
   }

   public function ShowLogin(Request $request)
   {
       $txtUser = $request->input('user');
       $txtPassword = $request->input('password');
       $data = ["USER"=>$txtUser,"PASSWORD"=>$txtPassword];
       return view('page.login',$data);
   }

   public function login(Request $res){
       #ค่ารับมา
       $txt_name = $res->input('username');
       $txt_pass = $res->input('password');

       #เงื่อนไขการทำงาน
   $users = DB::select('select * from users where username = ? and password = ?',
       [$res['username'],$res['password']] 
    );
    foreach ($users as $value){
        if($txtUser == $value->username){
            if($txtPassword == $value->password){
                $data['status'] = "true";
            }
        }
    }
    return  view('page.login',['users'=>$users]) ;

   }

#form_login2
public function form_login2(Request $res){


    $users = DB::table('users')->where([
        ['username','=',$res['username']],
        ['password','=',$res['password']]
    ])->get();
    $name ='';
    foreach($users as $value){
          $name = $value->id;
    }
    $res['name'] = $name;


    return view('page.form_login',$res);
}
///-------------view----------------------



} //end class