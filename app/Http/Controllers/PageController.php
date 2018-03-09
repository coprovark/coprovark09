<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


}