@extends('layouts.main')
@section('title','บันทึกข้อมูล')
@section('content')

<div class="col-sm-4">
  <form action="/form_student_save" method="post">
    <div class="form-group">
      <label>ID</label>
      <input type="text" name="ID" class="form-control">
    </div>
    <div class="form-group">
      <label>username</label>
      <input type="text" name="USERNAME" class="form-control">
    </div>
    <div class="form-group">
      <label>password</label>
      <input type="password" name="PASSWORD" class="form-control">
    </div>
    <div class="form-group">
      <label>สถานะ</label>
      <select name="STATUS" class="form-control">
        <option value="1">admin</option>
        <option value="2">CEO</option>
        <option value="3">Manager</option>
        <option value="4">Employee</option>
        <option value="5">Normal User</option>
      </select>
    </div>

    <br>
    <button type="submit" class="btn btn-info btn-block">บันทึก</button>

  </form>
</div>
@endsection