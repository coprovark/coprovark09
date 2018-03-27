@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_contact_save" method="post" >
                             
                          <div class="form-group">

                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="CONTACT_PHONE">
                                </div>
                          </div> <br><br><br>

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">มือถือ</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="CONTACT_MOBILE">
                                </div>
                          </div> <br><br>

                           <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="CONTACT_EMAIL">
                                </div>
                          </div> <br><br>

                           <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">Facebook</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="CONTACT_FACEBOOK">
                                </div>
                          </div> <br><br>
                          
                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">Web Site</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="CONTACT_WEDSITE">
                                </div>
                          </div> <br><br><br>

                         
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_contact" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>
@endsection


