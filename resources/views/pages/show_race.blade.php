@extends('layouts.main1')

@section('tltle', 'แสดงข้อมูล')

@section('content')

<form action="/show_race_find" method="post">

<div class="form-group col-sm-1">
      <a href="/form_race"class="btn btn-primary">
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
            <td>รหัสเชื้อชาติ</td>
            <td>เชื้อชาติ</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            
          <td>{{ $item->race_id }}</td> 
         <td>{{ $item->race_code }}</td> 
            @php
            if($item->race_name == 1){
                $race_name = "ไทย";
            }else if($item->race_name == 2){
                $race_name = "ลาว";
            }else if($item->race_name == 3){
                $race_name = "กัมภูชา";
            }else{
                $race_name = "เวียดนาม";
            };
        @endphp
            <td>{{ $race_name }}</td>

           
           
            <td>
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->race_id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <button class="btn btn-warning btn-xs">
                <a href="/form_race">
                    <span class="glyphicon glyphicon-pencil"></span>  
                    แก้ไข
                </button>
            </td>
        </tr>
        @endforeach
    </table>
 
    <script>
    function _confirm(race_id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_tdrace/'+race_id;
        }
    }
    </script>


@endsection