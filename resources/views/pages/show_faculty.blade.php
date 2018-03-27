@extends('layouts.main1')

@section('title', 'แสดงข้อมูล')

@section('content')

<form action="/show_faculty_find" method="post">

<div class="form-group col-sm-1">
      <a href="/form_faculty"class="btn btn-primary">
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
            <td>รหัสคณะ</td>
            <td>ชื่อคณะ</td>
            <td>ชั้นปี</td>
            <td>เกรดเฉลี่ย</td>
            <td>ดำเนินการ</td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            
            <td>{{ $item->faculty_id }}</td>
            <td>{{ $item->faculty_code }}</td> 
        @php
            if($item->faculty_name == 1){
                $faculty_name = "วิทยาการคอมพิวเตอร์";
            }else if($item->faculty_name == 2){
                $faculty_name = "เทคโนและอุตสาหกรรม";
            }else if($item->faculty_name == 3){
                $faculty_name = "มนุษศาสตร์และสังคมศาสตร์";
            }else if($item->faculty_name == 4){
                $faculty_name = "ครุศาสตร์";
            }else if($item->faculty_name == 5){
                $faculty_name = "เกษตรศาสตร์";
            }else if($item->faculty_name == 6){
                $faculty_name = "พยาบาลศาสตร์";
            }else if($item->faculty_name == 7){
                $faculty_name = "แพทย์แผนไทย";
            }else if($item->faculty_name == 8){
                $faculty_name = "สาธารณสุขศาสตร์";
            }else if($item->faculty_name == 9){
                $faculty_name = "บริหารธุรกิจและการจัดการ";
            }else if($item->faculty_name == 10){
                $faculty_name = "นิติศาสตร์";
            }else{
                $faculty_name = "วิทยาศาสตร์";
            };

               if($item->faculty_lavel == 1){
                    $faculty_lavel = "ปี 1";
                }else if($item->faculty_lavel == 2){
                    $faculty_lavel = "ปี 2";
                }else if($item->faculty_lavel == 3){
                    $faculty_lavel = "ปี 3";
                }else if($item->faculty_lavel == 4){
                    $faculty_lavel = "ปี 4";
                }else if($item->faculty_lavel == 5){
                    $faculty_lavel = "ปี 5";
                }else{
                    $faculty_lavel= "ปี 6";
                };
        @endphp
        <td>{{ $faculty_name }}</td>
        <td>{{ $faculty_lavel }}</td>

            <td>{{ $item->GPA }}</td>
            
            <td>
                <button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->faculty_id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>

                <button class="btn btn-warning btn-xs">
                <a href="/form_faculty">
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
            window.location.href = '/delete_tbfaculty/'+faculty_id;
        }
    }
</script>


@endsection