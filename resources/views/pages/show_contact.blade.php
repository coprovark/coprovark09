@extends('layouts.main1')

@section('title', 'แสดงข้อมูล')

@section('content')

<form action="/show_contact_find" method="post">

<div class="form-group col-sm-1">
      <a href="/form_contact"class="btn btn-primary">
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
            <td>เบอร์โทรศัพท์</td>
            <td>มือถือ</td>
            <td>E-mail</td>
            <td>facebook/Line</td>
            <td>web site</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            <td>{{ $item->contact_id }}</td>
            <td>{{ $item->contact_phone }}</td>
            <td>{{ $item->contact_mobile }}</td>
            <td>{{ $item->contact_Email }}</td>
            <td>{{ $item->contact_facebook }}</td>
            <td>{{ $item->contact_wedsite }}</td>
            
            <td>
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->contact_id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <button>

                  <a href="/form_contact_edit/{{ $item->contact_id }}" class="btn btn-info">แก้ไข</a>   
                    
                </button>
            </td>
        </tr>
        @endforeach
    </table>
 
    <script>
    function _confirm(contact_id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_tbcontact/'+contact_id;
        }
    }
</script>


@endsection