@extends('layouts.main')

@section('content')

 <h1 class="page-header">เข้าสู่ระบบ</h1>
 <form action="/page" method="post">

  <div class="form-group">
    <label for="exampleInputEmail1">ผู้ใช้</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user"placeholder="ชื่อผู้ใช้" style="width:30%">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">รหัสผ่าน</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password"placeholder="รหัสผ่าน" style="width:30%">
  </div>
  
  <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
</form>

<b>Data set</b><br>
    User = sam<br>
    Password = 1234<br>
    <br>
<b>Data input</b><br>
    User = {{$USER}}<br>
    Password = {{$PASSWORD}}<br>
    <br>
<h1>
    <?php
        if($USER=='sam' && $PASSWORD=='1234'){
            echo "TRUE";
        }else{
            echo "FALSE";
        }
    ?>
</h1>


@endsection