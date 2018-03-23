@extends('layouts.main1')

@section('title', 'แสดงข้อมูล')

@section('content')

<form action="/show_title_find" method="post">

<div class="form-group col-sm-1">
      <a href="/form_title"class="btn btn-primary">
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
            <td>คำนำหน้าชื่อ	</td>
            <td>ชื่อ-สกุล</td>
            <td>ชื่อเล่น</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            
        <td>{{ $item->title_id }}</td> 
            @php
            if($item->title_code == 1){
                $title_code = "นาย";
            }else if($item->title_code == 2){
                $title_code = "นาง";
            }else{
                $title_code = "นางสาว";
            };
        @endphp
            <td>{{ $title_code }}</td>

            <td>{{ $item->title_name }}</td> 
            <td>{{ $item->title_nicname }}</td>
            
            <td>
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->title_id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <button class="btn btn-warning btn-xs">
                <a href="/form_title">
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
            window.location.href = '/delete_tbtitle/'+title_id;
        }
    }
</script>


@endsection