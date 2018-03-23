@extends('layouts.main1')

@section('title', 'แสดงข้อมูล')

@section('content')

<form action="/show_user_find" method="post">

<div class="form-group col-sm-1">
      <a href="/form_user"class="btn btn-primary">
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
            <td>ระดับ</td>
            <td>รหัสนักศึกษา/อาจารย์</td>
            <td>เลขที่บัตร</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            <td>{{ $item->user_id }}</td>
            @php
            if($item->user_lavel == 1){
                $user_lavel = "นักเรียน";
            }else if($item->user_lavel == 2){
                $user_lavel = "นักศึกษา";
            }else{
                $user_lavel = "อาจารย์";
            };
        @endphp
            <td>{{ $user_lavel }}</td>
            
            <td>{{ $item->user_code }}</td>
            <td>{{ $item->user_codename }}</td>
            
            <td>
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->user_id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <button class="btn btn-warning btn-xs">
                <a href="/form_user">
                    <span class="glyphicon glyphicon-pencil"></span>  
                    แก้ไข
                </button>
            </td>
        </tr>
        @endforeach
    </table>
 
    <script>
    function _confirm(user_id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_tbuser/'+user_id;
        }
    }
</script>


@endsection