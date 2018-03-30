@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_user_save" method="post" >
                             
                          <div class="form-group">

                           <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">ประเภทผู้ใช้งาน</label>
                                <div class="col-sm-8">
                                     <input type="checkbox" value="1" name="USER_LAVEL"> นักเรียน
                                     <input type="checkbox" value="2" name="USER_LAVEL"> นักศึกษา  
                                     <input type="checkbox" value="3" name="USER_LAVEL"> อาจารย์ 
                                </div>
                          </div> <br><br>

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">รหัสนักศึกษา/อ้างอิง</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="USER_CODE">
                                </div>
                          </div> <br><br>
                          
                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">เลขที่บัตรประจำตัวประชาชน</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="USER_CODENAME">
                                </div>
                          </div> <br><br><br>

                         
                          
                  <center>
                        <button type="submit" class="btn btn-primary" onclick="newDoc()">บันทึก</button>
                        <a type="button" href="/form_user" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>

<script>
function newDoc() {
    if(confirm('ยืนยันการบันทึก')){
    window.location.assign("")
   }
}

</script>                
@endsection


