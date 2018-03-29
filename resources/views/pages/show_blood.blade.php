@extends('layouts.main1')

@section('tltle', 'แสดงข้อมูล')

@section('content')

<form action="/show_blood_find" method="post">

<div class="form-group col-sm-1">
      <a href="/form_blood"class="btn btn-primary">
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
           <td>ลำดับ</td>
            <td>รหัสหมู่เลือด</td>
            <td>หมู่เลือด</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            
            <td>{{ $item->blood_id }}</td> 
            <td>{{ $item->blood_code }}</td> 
            <td>{{ $item->blood_name }}</td>

           
           
            <td>
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->blood_id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <button class="btn btn-warning btn-xs">
                <a href="/form_blood">
                    <span class="glyphicon glyphicon-pencil"></span>  
                    แก้ไข
                </button>
            </td>
        </tr>
        @endforeach
    </table>
 
    <script>
    function _confirm(blood_id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_tdblood/'+blood_id;
        }
    }
    </script>


@endsection