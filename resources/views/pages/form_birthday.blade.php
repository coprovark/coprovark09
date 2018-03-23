@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_birthday_save" method="post" >
                             
                          <div class="form-group">

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">วัน เดือน ปีเกิด</label>
                                <div class="col-sm-3">
                                <input type="date" id="date" onchange="calAge(this);" class="form-control" placeholder="วว//ดด/ปปปป" name="BIRTHDAY" required>
                                </div>
                                <label for="inputPassword" class="col-sm-1 control-label">อายุ (ปี)</label>
                                <div class="col-sm-2">
                                <input type="text" id="age" class="form-control" placeholder="อายุ">
                                </div>
                          </div> <br><br><br>

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">น้ำหนัก</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="WEIGHT">
                                </div>
                          </div> <br><br>
                          
                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">ส่วนสูง</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="HEIGHHT">
                                </div>
                          </div> <br><br><br>

                         
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_birthday" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>
@endsection

<script language="javascript">
function calAge(o){
     var tmp = o.value.split("-");
     var current = new Date();
     var current_year = current.getFullYear();
     document.getElementById("age").value = current_year - tmp[0];
}
</script>