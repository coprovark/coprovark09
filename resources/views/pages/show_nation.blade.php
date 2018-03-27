@extends('layouts.main1')

@section('tltle', 'แสดงข้อมูล')

@section('content')

<form action="/show_nation_find" method="post">

<div class="form-group col-sm-1">
      <a href="/form_nation"class="btn btn-primary">
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
            <td>รหัสสัญชาติ</td>
            <td>สัญชาติ</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            
          <td>{{ $item->nation_id }}</td> 
         <td>{{ $item->nation_code }}</td> 
         <td>{{ $item->nation_name }}</td>
           
           
            <td>
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->nation_id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <button class="btn btn-warning btn-xs">
                <a href="/form_nation">
                    <span class="glyphicon glyphicon-pencil"></span>  
                    แก้ไข
                </button>
            </td>
        </tr>
        @endforeach
    </table>
 
    <script>
    function _confirm(nation_id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_tdnation/'+nation_id;
        }
    }
    </script>


@endsection