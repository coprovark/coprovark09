@extends('layouts.main')

@section('title', 'สมาชิก')

@section('content')


<h1>แสดงข้อมูล</h1>
<br>
<form action="/list_student_find" method="post">

<div class="form-group col-sm-1">
      <a href="/form_student"class="btn btn-primary">
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
    <table class="table">
        <tr>
            <td><input type="checkbox"</td>
            <td>รหัสนักศึกษา</td>
            <td>ชื่อ-สกุล</td>
            <td>วัน เดือน ปีเกิด</td>
            <td>สังกัด</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->sid }}</td>
            <td>{{ $item->fullName }}</td>
            <td>{{ $item->birthDay }}</td>
            <td>{{ $item->facultyID }}</td>
            <td>
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <button class="btn btn-warning btn-xs">
                    <span class="glyphicon glyphicon-pencil"></span>  
                    แก้ไข
                </button>
            </td>
        </tr>
        @endforeach
    </table>

    <script>
    function _confirm(id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_coprovark_09/'+id;
        }
    }
</script>


@endsection