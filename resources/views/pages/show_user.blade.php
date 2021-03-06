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
    <table class="table table-bordered table-striped">
        <tr class="success">
        <td><input type="checkbox"</td>
            <td>ระดับ</td>
            <td>รหัสนักศึกษา/อาจารย์</td>
            <td>เลขที่บัตร</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->user_lavel }}</td>    
            <td>{{ $item->user_code }}</td>
            <td>{{ $item->user_codename }}</td>
            
            <td>
              
                <a onclick="return _confirm('{{ $item->id }}')" class="btn btn-danger btn-xs" role="button">ลบรายการ
                       <span class="glyphicon glyphicon-remove"></span></a>

                <a href="/form_user_edit/{{ $item->id }}" class="btn btn-success btn-xs" role="button">แก้ไข
                       <span class="glyphicon glyphicon-pencil"></span></a>

            </td>
        </tr>
        @endforeach
    </table>
 
    <script>
    function _confirm(id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_tbuser/'+id;
        }
    }
</script>


@endsection