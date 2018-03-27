@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_address_save" method="post" >
                             
                          <div class="form-group">


                        <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">ที่อยู่ภูมิลำเนา</label>
                                <div class="col-sm-8">
                                <textarea name="ADDRESS_PERMANENT" class="form-control"></textarea>  
                                </div>
                          </div> <br><br><br>

                       
                       <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">ที่อยู่ปัจจุบัน</label>
                                <div class="col-sm-8">
                                <textarea name="ADDRESS_PRESENT" class="form-control"></textarea>  
                                </div>
                          </div> <br><br><br>
 
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_address" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>
@endsection


