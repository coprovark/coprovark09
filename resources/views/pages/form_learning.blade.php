@extends('layouts.main1')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

                    <div class="col-sm-12">
                          <form action="/form_learning_save" method="post" >
                             
                          <div class="form-group">


                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">รหัส Learning Style</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" name="learning_CODE">
                                </div>
                          </div> <br><br>
                          <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">Learning Style</label>
                                <div class="col-sm-8">
                                     <input type="checkbox" value="1" name="STYLE_V">V&emsp;
                                     <input type="checkbox" value="2" name="STYLE_A">A&emsp;
                                     <input type="checkbox" value="3" name="STYLE_R">R&emsp; 
                                     <input type="checkbox" value="4" name="STYLE_K">K&emsp; 
                                     <input type="checkbox" value="5" name="STYLE_MODAL">MODAL
                                </div>
                          </div> <br><br><br>

                               
                          
                  <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_learning" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br> <br> <br>

                </form>
@endsection
