@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_address_save" method="post" >
                             
                          <div class="form-group">

                        <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">ที่อยู่ภูมิลำเนา</label>
                                <div class="col-sm-8">
                                <textarea name="ADDRESS_PERMANENT" class="form-control" id="myTextarea"></textarea>  
                                </div><br>
                              
                          </div> <br><br><br>
                         
                          <div class="form-group">
                                <label></label>
                                <div class="col-sm-8">
                                <input type="checkbox" name="" onclick="myFunction()">ที่อยู่เดิม
                                </div><br>
                          </div> <br><br><br>    

                      
                       <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">ที่อยู่ปัจจุบัน</label>
                                <div class="col-sm-8">
                                
                                <textarea name="ADDRESS_PRESENT" class="form-control" id="demo"></textarea>  
                                </div>
                          </div> <br><br><br>
 
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button><br>
                        <a type="button" href="/form_address" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>

<script>
function myFunction() {
    var x = document.getElementById("myTextarea").value;
    document.getElementById("demo").innerHTML = x;
}
</script>  

@endsection


