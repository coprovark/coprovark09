@extends('layouts.maingallery')

@section('content')

 <h3 class="page-header">เพิ่ม/แก้ไข Gallery</h3>

                    <div class="col-sm-10">
                          <form action="/form_gallery_save" method="post" >
      
                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-2 control-label">Gallery</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="" placeholder="ชื่อแกลเลอรี">
                                </div>
                          </div> <br><br>
                                            
                  <center>
                        <button type="submit" class="btn btn-primary" onclick="newDoc()">Create Gallery</button>
                        <a type="button" href="/form_gallery" class="btn btn-danger">Cancel</a>                      
                </center>
                        <br> <br> <br>

                </form>

<script>
function newDoc() {
    if(confirm('ยืนยันการบันทึก')){
    window.location.assign("")
   }
}

</script>                
@endsection


