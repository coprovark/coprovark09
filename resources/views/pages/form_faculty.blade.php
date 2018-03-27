@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_faculty_save" method="post" >
                             
                          <div class="form-group">

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">รหัสคณะ</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="FACULTY_CODE">
                                </div>
                          </div> <br><br>

                           <div class="form-group">
                          <label for="inputPassword" class="col-sm-3 control-label">คณะ</label>
                           <div class="col-sm-8">
                              <select name="FACULTY_NAME" class="form-control">
                                <option value="1">วิทยาการคอมพิวเตอร์</option>
                                <option value="2">เทคโนและอุตสาหกรรม</option>
                                <option value="3">มนุษศาสตร์และสังคมศาสตร์</option>
                                <option value="4">ครุศาสตร์</option>
                                <option value="5">เกษตรศาสตร์</option>
                                <option value="6">พยาบาลศาสตร์</option>
                                <option value="7">แพทย์แผนไทย</option>
                                <option value="8">สาธารณสุขศาสตร์</option>
                                <option value="9">บริหารธุรกิจและการจัดการ</option>
                                <option value="10">นิติศาสตร์</option>
                                <option value="11">วิทยาศาสตร์</option>
                              </select>
                            </div>  
                        </div> <br><br>

                           <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">ชั้นปี</label>
                                <div class="col-sm-8">
                                     <select class="form-control" style="width:15%" name="FACULTY_LAVEL">
                                        <option value="1">ปี 1</option>
                                        <option value="2">ปี 2</option>
                                        <option value="3">ปี 3</option>
                                        <option value="4">ปี 4</option>
                                        <option value="5">ปี 5</option>
                                        <option value="6">ปี 6</option>
                                     </select> 
                                   </div>  
                           </div> <br><br>

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">เกรดเฉลี่ย</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="GPAS">
                                </div>
                          </div> <br><br>
                         
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_faculty" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>
@endsection


