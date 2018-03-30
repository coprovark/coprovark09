<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function show(){
        $query = DB::table('file')->select('*')->get();
        return view('file.upload',[
            'datatable' => $query,
            'edit'      => [],
            'i'         => 1
        ]);
    }

    public function dl(Request $req){
        // return response()->download('upload/'.$req->path);
        return response()->download('upload/'.$req->path,$req->name);
    }

  
    public function rm(Request $req){
        $query = DB::table('file')->where('ID','=',$req->ID)->get();
        foreach($query as $row){
            if(unlink('upload/'.$row->FilePath)){
                DB::table('file')->where('ID','=',$req->ID)->delete();
            }
        }
        return redirect('upload1');
    }
  
    public function deleteItem(Request $req){
        $item = $req->param;
        foreach ($item as $value) {
            $query = DB::table('file')->where('ID','=',$value)->get();
            foreach($query as $row){
                if(@unlink('upload/'.$row->FilePath)){
                    DB::table('file')->where('ID','=',$value)->delete();
                }
            }
        }
        return response()->json($item);
    }


    public function ed(Request $req){
        $query = DB::table('file')->select('*')->get();
        $edit  = DB::table('file')->select('*')->where('ID','=',$req->ID)->get();
        return view('file.upload',[
            'datatable' => $query,
            'edit'      => $edit,
            'i'         => 1
        ]);
    }


    public function update123(Request $req){
      
        $file = $req->file('uploadfile');
        $name = $req->uploadfilename;
        $randomeName = rand(1001,9999);
        if ($req->hasFile('uploadfile')) {
            $type = $req->uploadfile->extension();
            $namefile =  $randomeName.'.'.$type;
            $size = $file->getClientSize();
            DB::table('file')
                ->where('ID', $req->ID)
                ->update(
                [
                    'FileName' => $name, 
                    'FileType' => $type, 
                    'FilePath' => $namefile, 
                    'FileSize' => round($size/1024,2), // -> MB 
                ]
            );
            $file->move('upload',$namefile);
            echo "upload success";
            return redirect('upload1');     
        }else{

            DB::table('file')
                    ->where('ID', $req->ID)
                    ->update([
                        'FileName'   => $req->uploadfilename
                    ]);
            return redirect('upload1'); 
        }


    }

  // upload
  public function upload(Request $req){

    $file = $req->file('uploadfile');
    $name = $req->uploadfilename;
    $randomeName = rand(1001,9999);
    if ($req->hasFile('uploadfile')) {

        $type = $req->uploadfile->extension();
        $namefile =  $randomeName.'.'.$type;
        $size = $file->getClientSize();
        DB::table('file')->insert(
            [
                'FileName' => $name, 
                'FileType' => $type, 
                'FilePath' => $namefile, 
                'FileSize' => round($size/1024,2), // -> MB 
            ]
        );

        $file->move('upload',$namefile);
        echo "upload success";
        return redirect('upload1');
    }

   # $file->getClientSize()
}



}//endclass


