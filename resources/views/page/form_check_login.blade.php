
<form action="/form_check_login" method="post">

<div class="form-group">
  <label for="exampleInputEmail1">Username</label>
  <input type="text" class="form-control" id="exampleInputEmail1" name="username"placeholder="ชื่อผู้ใช้" style="width:30%">
</div> <br>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="exampleInputPassword1" name="password"placeholder="รหัสผ่าน" style="width:30%">
</div>

<button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
</form>

<hr>


@foreach ($users as $user) 
    {{ $user->id }}
@endforeach