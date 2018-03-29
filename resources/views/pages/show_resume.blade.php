@extends('layouts.main1')

@section('title', 'แสดงข้อมูล')

@section('content')

 <h3 class="page-header">ข้อมูลสมาชิก</h3>

<form action="/show_resume_find" method="post">

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
    <table class="table table-bordered table-striped">
        <tr class="success">
            <td>ลำดับ</td>
            <td>เลขที่ใบสมัคร</td>
            <td>วันที่ใบสมัคร</td>
            <td>ประเภทผู้ใช้งาน</td>
            <td>รหัสนักศึกษา/อาจารย์</td>
            <td>เลขที่บัตรประจำตัว</td>
            <td>ชื่อ</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            <td>{{ $item->main_id }}</td>
            <td>{{ $item->main_no }}</td>
            <td>{{ $item->main_date }}</td>
            <td>{{ $item->user_lavel }}</td>
            <td>{{ $item->main_code }}</td>
            <td>{{ $item->main_idcard }}</td>
            <td>{{ $item->title_code }}{{ $item->main_name }}</td>
            
            <td>
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->main_id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <a href="/form_main_edit/{{ $item->main_id }}" class="btn btn-success btn-xs" role="button">แก้ไข
                       <span class="glyphicon glyphicon-pencil"></span></a>

                <a href="/list_resume/{{ $item->main_id }}" class="btn btn-primary btn-xs" role="button">รายละเอียด
                       <span class="glyphicon glyphicon-list-alt"></span></a>

            </td>
        </tr>
        @endforeach
    </table>
 
    <script>
    function _confirm(main_id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_tb_main/'+main_id;
        }
    }
</script>


@endsection