@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_religion_save" method="post" >
                             
                          <div class="form-group">


                        <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">รหัสสภานภาพ</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="RELIGION_CODE">
                                </div>
                          </div> <br><br><br>

                       
                           <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">สถานภาพ</label>
                                <div class="col-sm-8">
                                     <select class="form-control" style="width:15%" name="RELIGION_NAME">
                                         <option value="1">พุทธ</option>
                                         <option value="2">คริส</option>
                                    
                                     </select> 
                                   </div>  
                           </div> <br><br><br>
 
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_religion" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>
@endsection


