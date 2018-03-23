@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_type_save" method="post" >
                             
                          <div class="form-group">

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">รหัสประเภทการศึกษา</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="PYPE_CODE">
                                </div>
                          </div> <br><br>
                          
                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">ชื่อประเภทการศึกษา</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="TYPE_NAME">
                                </div>
                          </div> <br><br><br>

                         
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_type" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>
@endsection


