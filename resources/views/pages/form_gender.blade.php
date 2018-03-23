@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_gender_save" method="post" >
                             
                          <div class="form-group">


                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">รหัสเพศ</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="GENDER_CODE">
                                </div>
                          </div> <br><br>
                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">เพศ</label>
                                <div class="col-sm-8">
                                     <input type="radio" value="1" name="GENDER_NAME"> ชาย
                                     <input type="radio" value="2" name="GENDER_NAME"> หญิง  
                                     <input type="radio" value="3" name="GENDER_NAME"> เพศทางเลือก  
                                </div>
                          </div> <br><br><br>

                          
                          
                         
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_gender" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>
@endsection
