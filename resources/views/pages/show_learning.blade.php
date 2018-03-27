@extends('layouts.main1')

@section('title', 'แสดงข้อมูล')

@section('content')

<form action="/show_learning_find" method="post">

<div class="form-group col-sm-1">
      <a href="/form_learning"class="btn btn-primary">
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
            <td>style_V</td>
            <td>style_A</td>
            <td>style_R</td>
            <td>style_K</td>
            <td>style_modal</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            
            <td>{{ $item->learning_id }}</td>
        @php
            if($item->style_V == 1){
                $style_V = "style_V";
            }else{
                $style_V = "-";
            };
            if($item->style_A == 2){
                $style_A = "style_A";
            }else{
                $style_A = "-";
            };
            if($item->style_R == 3){
                $style_R = "style_R";
            }else{
                $style_R = "-";
            };
            if($item->style_K == 4){
                $style_K = "style_K";
            }else{
                $style_K = "-";
            };
            if($item->style_modal == 5){
                $style_modal = "style_modal";
            }else{
                $style_modal = "-";
            };
        @endphp
            <td>{{ $style_V }}</td>
            <td>{{ $style_A }}</td>
            <td>{{ $style_R }}</td>
            <td>{{ $style_K }}</td>
            <td>{{ $style_modal }}</td>
          
     
            
            <td>
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->learning_id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <button class="btn btn-warning btn-xs">
                <a href="/form_learning">
                    <span class="glyphicon glyphicon-pencil"></span>  
                    แก้ไข
                </button>
            </td>
        </tr>
        @endforeach
    </table>
 
    <script>
    function _confirm(learning_id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_tblearning/'learning_id;
        }
    }
</script>


@endsection