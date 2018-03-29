@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_blood_save" method="post" >
                             
                          <div class="form-group">


                        <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">รหัสหมู่เลือด</label>
                                <div class="col-sm-8">
                                  <input type="text" id="data" class="form-control" style="width:20%" name="BLOOD_CODE">
                                </div>
                          </div> <br><br><br>

                       
                           <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">หมู่เลือด</label>
                                <div class="col-sm-8">
                                     <select class="form-control" style="width:20%" name="BLOOD_NAME" onchange="getData()" id="datalist">
                                         <option value="1">A</option>
                                         <option value="2">B</option>
                                         <option value="3">O</option>
                                         <option value="4">AB</option>
                                     </select> 
                                   </div>  
                           </div> <br><br><br>
 
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_blood" class="btn btn-danger">ยกเลิก</a>                      
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


