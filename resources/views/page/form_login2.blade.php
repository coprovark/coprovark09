@extends('layouts.main')
@setion('title','เข้าสู่ระบบ')
@section('content')

 <h1 class="page-header">เข้าสู่ระบบ</h1>
 <form action="/form_login2" method="post">

  <div class="form-group">
    <label for="exampleInputEmail1">ผู้ใช้</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username"placeholder="ชื่อผู้ใช้" style="width:30%">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">รหัสผ่าน</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password"placeholder="รหัสผ่าน" style="width:30%">
  </div>
  
  <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
</form>

<h2>username =</h2>
{{$username}}

@endsection