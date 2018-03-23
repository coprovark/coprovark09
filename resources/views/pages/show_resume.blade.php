@extends('layouts.main1')

@section('title', 'แสดงข้อมูล')

@section('content')

<form action="/list_resume_find" method="post">

<div class="form-group col-sm-1">
      <a href="/form_resume"class="btn btn-primary">
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
            @php
            if($item->facultyID == 1){
                $facultyID = "วิทยาการคอมพิวเตอร์";
            }else if($item->facultyID == 2){
                $facultyID = "เทคโนและอุตสาหกรรม";
            }else if($item->facultyID == 3){
                $facultyID = "มนุษศาสตร์และสังคมศาสตร์";
            }else if($item->facultyID == 4){
                $facultyID = "ครุศาสตร์";
            }else if($item->facultyID == 5){
                $facultyID = "เกษตรศาสตร์";
            }else if($item->facultyID == 6){
                $facultyID = "พยาบาลศาสตร์";
            }else if($item->facultyID == 7){
                $facultyID = "แพทย์แผนไทย";
            }else if($item->facultyID == 8){
                $facultyID = "สาธารณสุขศาสตร์";
            }else if($item->facultyID == 9){
                $facultyID = "บริหารธุรกิจและการจัดการ";
            }else if($item->facultyID == 10){
                $facultyID = "นิติศาสตร์";
            }else{
                $facultyID = "วิทยาศาสตร์";
            };
        @endphp
        <td>{{ $facultyID }}</td>
        
            <td>

        
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <button class="btn btn-warning btn-xs">
                <a href="/form_resume">
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
            window.location.href = '/delete_user/'+id;
        }
    }
</script>


@endsection