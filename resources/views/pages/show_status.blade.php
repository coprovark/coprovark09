@extends('layouts.main1')

@section('tltle', 'แสดงข้อมูล')

@section('content')

<form action="/show_status_find" method="post">

<div class="form-group col-sm-1">
      <a href="/form_status"class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"></span>  
        เพิ่ม</a>
  </div>

  <div class="form-group col-sm-4">
    <input type="text" class="form-control" name="find" placeholder="ค้นหา">
  </div>
  <div class="form-group col-sm-1">
      <button class="btn btn-primary">
        <span class="glyphicon glyphicon-search"></span>  
        ค้นหา</button>
  </div>
</form>
    <table class="table table-bordered">
        <tr class="success">
        <td><input type="checkbox"</td>
            <td>รหัสสถานภาพ</td>
            <td>สถานภาพ</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            
          <td>{{ $item->status_id }}</td> 
         <td>{{ $item->status_code }}</td> 
            @php
            if($item->status_name == 1){
                $status_name = "โสด";
            }else if($item->status_name == 2){
                $status_name = "แต่งงาน";
            }else if($item->status_name == 3){
                $status_name = "หม้าย";
            }else{
                $status_name = "หย่าร้าง";
            };
        @endphp
            <td>{{ $status_name }}</td>

           
           
            <td>
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->status_id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <button class="btn btn-warning btn-xs">
                <a href="/form_status">
                    <span class="glyphicon glyphicon-pencil"></span>  
                    แก้ไข
                </button>
            </td>
        </tr>
        @endforeach
    </table>
 
    <script>
    function _confirm(status_id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_tdstatus/'+status_id;
        }
    }
    </script>


@endsection