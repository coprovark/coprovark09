@extends('layouts.main')

@section('content')

 <h1 class="page-header">บันทึกข้อมูล</h1>

 <div class="col-sm-12">

 @foreach($user as $users)
<form action="/list_user_update" method="post">
        <div class="form-group">

                <div class="form-group">
                    <label for="inputPassword" class="col-sm-3 control-label">รหัสนักศึกษา</label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $users->sid }}" class="form-control" name="STD">
                    </div>
                </div> <br><br><br>

        <div class="form-group">
            <label for="inputPassword" class="col-sm-3 control-label">ชื่อ-สกุล</label>
            <div class="form-inline" style="width:100%">
                <select class="form-control" style="width:10%" name="TITLENAME">
                    <option value="1">นาย</option>
                    <option value="2">นาง</option>
                    <option value="3">นางสาว</option>
                </select>
                <input type="text" value="{{ $users->fullName }}" class="form-control" name="FULLNAME" style="width:55%">   
                </div>  
        </div> <br>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-3 control-label">เพศ</label>
            <div class="col-sm-8">
                <input type="radio" value="1" name="GENDER"> ชาย
                <input type="radio" value="2" name="GENDER"> หญิง  
                <input type="radio" value="3" name="GENDER"> เพศทางเลือก  
            </div>
        </div> <br><br><br>
        <div class="form-group">
                <label for="inputPassword" class="col-sm-3 control-label">วัน เดือน ปีเกิด</label>
                <div class="col-sm-3">
                <input type="date" id="date" onchange="calAge(this);" class="form-control"  value="{{ $users->birthDay }}" placeholder="วว//ดด/ปปปป" name="BIRTHDAY" required>
                </div>
                <label for="inputPassword" class="col-sm-1 control-label">อายุ (ปี)</label>
                <div class="col-sm-2">
                <input type="text" id="age" class="form-control" placeholder="อายุ">
                </div>
        </div> <br><br><br>
        <div class="form-group">
                <label for="inputPassword" class="col-sm-3 control-label">สังกัด</label>
                <div class="col-sm-8">
                    <select name="FACULTYID" class="form-control">
                    <option value="1">วิทยาการคอมพิวเตอร์</option>
                    <option value="2">เทคโนและอุตสาหกรรม</option>
                    <option value="3">มนุษศาสตร์และสังคมศาสตร์</option>
                    <option value="4">ครุศาสตร์</option>
                    <option value="5">เกษตรศาสตร์</option>
                    <option value="6">พยาบาลศาสตร์</option>
                    <option value="7">แพทย์แผนไทย</option>
                    <option value="8">สาธารณสุขศาสตร์</option>
                    <option value="9">บริหารธุรกิจและการจัดการ</option>
                    <option value="10">นิติศาสตร์</option>
                    <option value="11">วิทยาศาสตร์</option>
                    </select>
                </div>  
        </div> <br><br><br>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-3 control-label">สาขาวิชา</label>
            <div class="col-sm-8">
                <input type="radio" value="1" name="MAJORID"> CS
                <input type="radio" value="2" name="MAJORID"> SE  
                <input type="radio" value="3" name="MAJORID"> IMA
                <input type="radio" value="4" name="MAJORID"> ITM
            </div>
        </div> <br><br><br>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-3 control-label">ที่อยู่ปัจจุบัน</label>
            <div class="col-sm-8">
            <textarea name="ADDRESS" class="form-control"></textarea>  
            </div>
        </div> <br><br><br>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" value="{{ $users->mobile }}" name="MOBILE">
            </div>
        </div> <br><br><br>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-3 control-label">รายการอาหารที่ชอบ</label>
            <div class="col-sm-8">
            <input type="checkbox" value="1" name="FOOD1"> ส้มตำ
            <input type="checkbox" value="2" name="FOOD2"> ลาบ
            <input type="checkbox" value="3" name="FOOD3"> ก้อย
            <input type="checkbox" value="4" name="FOOD4"> พิซซ่า
            </div>
        </div> <br> <hr>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-3 control-label">User name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" value="{{ $users->username }}" name="USERNAME">
            </div>
        </div> <br><br><br>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" value="{{ $users->password }}" name="PASSWORD">
            </div>
        </div> <br><br><br>
        <center>
        <button type="submit" class="btn btn-primary">บันทึก</button>
        <a type="button" href="/form_register" class="btn btn-danger">ยกเลิก</a>                      
        </center>
        <br> <br> <br>

</form>
@endforeach()
@endsection
 
<script language="javascript">
function calAge(o){
     var tmp = o.value.split("-");
     var current = new Date();
     var current_year = current.getFullYear();
     document.getElementById("age").value = current_year - tmp[0];
}
</script>