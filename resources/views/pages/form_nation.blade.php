@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_nation_save" method="post" >
                             
                          <div class="form-group">


                        <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">รหัสสภานภาพ</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="NATION_CODE">
                                </div>
                          </div> <br><br><br>

                       
                           <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">สถานภาพ</label>
                                <div class="col-sm-8">
                                     <select class="form-control" style="width:15%" name="NATION_NAME">
                                         <option value="ไทย">ไทย</option>
                                         <option value="ลาว">ลาว</option>
                                         <option value="กัมภูชากั">กัมภูชา</option>
                                         <option value="เวียดนาม4">เวียดนาม</option>
                                     </select> 
                                   </div>  
                           </div> <br><br><br>
 
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_nation" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>
@endsection


