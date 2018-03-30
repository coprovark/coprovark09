<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    //โฟล์เดอร์
    public function show_gallery()
{
    $find= '';
    $gall = DB::table('tbgallery')->select('*')->get();
    return view('file.gallery',[
      'data_list' => $gall,
      'find'      => $find,
      'i'         => 1
    ]);
}
}
