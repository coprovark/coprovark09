@extends('layouts.maingallery')

@section('content')

 <h3 class="page-header">หมวดหมู่รูปภาพ/ไฟล์</h3>

 <div class="col-sm-12">
 <form action="/gallery_find" method="post">

  <div class="form-group col-sm-10">
    <input type="text" class="form-control" name="find" placeholder="ค้นหา">
  </div>
  <div class="form-group col-sm-1">
      <button class="btn btn-primary">
        <span class="glyphicon glyphicon-search"></span>  
        ค้นหา</button>
  </div>
  <div class="form-group col-sm-1">
      <a href="/form_gallery"class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"></span>  
        เพิ่ม</a>
  </div>

</form>
    <table class="table table-bordered table-striped">
        <tr class="info">
            <td>ลำดับ</td>
            <td>ชื่อ Gallery</td>
            <td>วันที่สร้าง</td>
            <td>วันที่ปรับปรุง</td>
            <td>จำนวนภาพ/ไฟล์</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            <td>{{ $i++ }}</td>    
            <td>{{ $item->gallery_name }}</td>
            <td>{{ $item->gallery_date }}</td>
            <td>{{ $item->gallery_update }}</td>
            <td>{{ $item->gallery_number }}</td>
            
            <td>
              
                <a onclick="return _confirm('{{ $item->gallery_id }}')" class="btn btn-danger btn-xs" role="button">ลบรายการ
                       <span class="glyphicon glyphicon-remove"></span></a>

                <a href="/form_user_edit/{{ $item->gallery_id }}" class="btn btn-success btn-xs" role="button">แก้ไข
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


