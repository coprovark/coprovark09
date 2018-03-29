@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_type_save" method="post" >
                             
                          <div class="form-group">

                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">รหัสประเภทนักศึกษา</label>
                                <div class="col-sm-8">
                                  <input type="text" id="data" class="form-control" style="width:20%" name="PYPE_CODE">
                                </div>
                          </div> <br><br>
                          
                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">ชื่อประเภทนักศึกษา</label>
                                <div class="col-sm-8">
                                  <select class="form-control" style="width:20%" name="TYPE_NAME" onchange="getData()" id="datalist">
                                         <option value="1">ปกติ</option>
                                         <option value="2">กศ.บป.</option>
                                         <option value="3">กศ.อศ.</option>
                                     </select> 
                                </div>
                          </div> <br><br><br>

                         
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_type" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>

<script type="text/javascript">
     function getData(){
           var data = document.getElementById('datalist').value;
           document.getElementById('data').value = data;
   }
</script>                
@endsection


