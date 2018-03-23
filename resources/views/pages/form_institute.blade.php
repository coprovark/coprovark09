@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_institute_save" method="post" >
                             
                          <div class="form-group">

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">รหัสสถาบันการศึกษา</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="INSTITUTE_CODE">
                                </div>
                          </div> <br><br>
                          
                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">สถาบันการศึกษา</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="INSTITUTE_NAME">
                                </div>
                          </div> <br><br><br>

                         
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_institute" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>
@endsection


