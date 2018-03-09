@extends('layouts.main')

@section('content')

 <h1 class="page-header">เข้าสู่ระบบ</h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">อีเมล</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="อีเมล" style="width:30%">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">รหัสผ่าน</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="รหัสผ่าน" style="width:30%">
  </div>
  
  <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
</form>


@endsection