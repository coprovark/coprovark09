@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_title_save" method="post" >
                             
                          <div class="form-group">

                           <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">คำนำหน้าชื่อ</label>
                                <div class="col-sm-8">
                                     <select class="form-control" style="width:15%" name="TITLE_CODE">
                                         <option value="1">นาย</option>
                                         <option value="2">นาง</option>
                                         <option value="3">นางสาว</option>
                                     </select> 
                                   </div>  
                           </div> <br><br><br>

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">ชื่อ-สกุล</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="TITLE_NAME">
                                </div>
                          </div> <br><br>
                          
                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">ชื่อเล่น</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="TITLE_NICNAME">
                                </div>
                          </div> <br><br><br>

                         
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_title" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>
@endsection


