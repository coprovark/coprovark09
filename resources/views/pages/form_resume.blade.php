@extends('layouts.main1')

@section('content')

 <h3 class="page-header">ใบสมัคร</h3>


         <div class="container-fluid" style="border:1px solid black;border-radius: 0px 0px 0px 0px;"> 
         
         <form class="form-group form-inline" action="/form_resume_save" method="post">

                   
             <div class="container-fluid">
                <div class="row">  
                    <div class="col-md-3">
                       <label style="padding : 15%;background-color:#b3c6ff;">CO-PROVARK</label><br>

                       <label>เลขที่ NO.</label>
                         <input type="text" class="form-control" style="width:65%;" name="NO" > <br><br>
                                        
                      <label>วันที่ Date</label>
                        <input class="form-control" style="width:65%;" type="date" name="DATE">
                    </div>
                     <center>
                    <div class="col-md-6" style="">      
                           <div class="form-group">
                                <br><h4>ใบสมัครเข้าร่วมโครงการวิจัย</h4>
                                <br>เรื่อง
                                <br>การพัฒนารูปแบบการส่งเสริมศักยภาพผู้ผลิตซอฟต์แวร์และบริการซอฟแวร์โดยใช้
                                <br>เทคนิคการโคชชิ่งตามสไตล์การเรียนรู้แบบ VARK เพื่อให้สอดคล้องกับความต้อง
                                 <br>การของผู้ประกอบการและอุตสสาหกรรมซอฟแวร์
                            </div>
                     </div>     
                <div class="col-md-3" style=" padding: 10px; width: 100px; margin: 50px 10px 10px 60px; border: 1px solid #b3c6ff;">
                                        <div class="form-group">
                                        <br>
                                        ขนาดรูปถ่าย
                                        <br>
                                        <br>
                                       size 2 X 2
                                        </div>
                                </div>
                                </center>
 
                </div> <!-- class="row" -->    
            </div>    <!-- class="container" -->
            <hr>
            <div class="row">
            <div class="container-fluid" style=";background-color:#b3c6ff;">    
                <div class="col-md-12" style="">
                     <label>ประวัติส่วนตัว (Presonal Information)</label><br>  
                </div>
                </div>
            </div>
                     <br>
        
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-2" style="">
                                <label>ประเภทผู้ใช้งาน</label>
                        </div>
                                <div class="col-md-10" style="">
                                    <div class="form-group">
                                        <input type="radio" name="TYPE" value="1" > นักเรียน 
                                        <input type="radio" name="TYPE" value="2" > นักศึกษา 
                                        <input type="radio" name="TYPE" value="3" > ครู/อาจารย์ 
                                    </div>
                         </div>
                 </div>
        </div>
        <br>
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-2" style="">
                             <label>รหัสนักศึกษาอ้างอิง</label>
                        </div>
                                <div class="col-md-4" style="">
                                    <div class="form-group">
                                        <input type="text" name="CODE" class="form-control" placeholder="รหัสนักศึกษาอ้างอิง" style="width :100%" required>
                                    </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>เลขที่บัตรประชาชน</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" name="IDCARD" class="form-control" placeholder="เลขที่บัตรประชาชน" style="width :100%" required>
                                 </div>
                        </div>
                </div>
        </div>
        <br>
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-2" style="">
                            <label>ชื่อ-สกุล</label>
                        </div>
                            <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:35%" name="TITLENAME">
                                        @foreach($title as $item)
                                                <option value="{{ $item->title_id }}">{{ $item->title_code }}</option>;
                                        @endforeach     
                                     </select> 
                                        <input type="text" class="form-control" style="width:60%;" placeholder="่ชื่อ-สกุล" name="NAME" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                     <label>ชื่อเล่น</label>
                                </div>
                                <div class="col-md-4" style="">
                                 <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="ชื่อเล่น" name="NICKNAME" >
                                 </div>
                         </div>
                 </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>สาขาวิชา</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:100%" name="MOJOR">
                                        @foreach($mojor as $item)
                                                <option value="{{ $item->mojor_code }}">{{ $item->mojor_name }}</option>;
                                        @endforeach    
                                        </select>   
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>คณะ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:100%" name="FACULTY">
                                        @foreach($faculty as $item)
                                                <option value="{{ $item->faculty_id }}">{{ $item->faculty_name }}</option>;
                                        @endforeach  
                                        </select>
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>ชั้นปี</label>
                                </div>
                                <div class="col-md-2" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:100%" name="LAVEL">
                                        @foreach($faculty as $item)
                                                <option value="{{ $item->faculty_idlavel }}">{{ $item->faculty_lavel }}</option>;
                                        @endforeach  
                                        </select>  
                                        </div>
                                </div>
                                <div class="col-md-1" style="width:10%">
                                        <label>เกรดเฉลี่ย</label>
                                </div>
                                <div class="col-md-1" style="width:13%">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%" placeholder="เกรดเฉลี่ย" name="GPAS" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>สถาบันการศึกษา</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:100%" name="INSTITUTE">
                                        @foreach($institute as $item)
                                                <option value="{{ $item->institute_code }}">{{ $item->institute_name }}</option>;
                                        @endforeach  
                                        </select> 
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>ประเภทนักศึกษา</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="radio" name="STUDENTTYPE" value="1" > ปกติ 
                                        <input type="radio" name="STUDENTTYPE" value="2" > กศ.บป. 
                                        <input type="radio" name="STUDENTTYPE" value="3" > กศ.อศ. 
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>Learning Style</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <input type="checkbox" name="STYLE" value="1" > V
                                        <input type="checkbox" name="STYLE" value="2" > A
                                        <input type="checkbox" name="STYLE" value="3" > R
                                        <input type="checkbox" name="STYLE" value="4" > K
                                        <input type="checkbox" name="STYLE" value="5" > Model
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>วัน เดือน ปีเกิด</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <input class="form-control form-control-sm" type="Date" id="date" onchange="calAge(this);" name="BIRTHDAY">
                                        </div>
                                </div>
                                <div class="col-md-1" style="">
                                        <label>อายุ(ปี) </label>
                                </div>
                                <div class="col-md-2" style="">
                                        <div class="form-group">
                                        <input type="text" id="age" class="form-control" style="width:60%;" placeholder="อายุ" name="AGE" >
                                        </div>
                                </div>
                                <div class="col-md-1" style="">
                                        <label>เพศ</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <input type="radio" name="GENDER" value="1" > ชาย 
                                        <input type="radio" name="GENDER" value="2" > หญิง 
                                        <input type="radio" name="GENDER" value="3" > เพศทางเลือก 
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>น้ำหนัก</label>
                                </div>
                                <div class="col-md-2" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="น้ำหนัก" name="WEIGTH" >
                                        </div>
                                </div>
                                <div class="col-md-1" style="">
                                        <label>ส่วนสูง</label>
                                </div>
                                <div class="col-md-2" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="ส่วนสูง" name="HEIGHT" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="width:10%">
                                        <label>หมูเลือด</label>
                                </div>
                                <div class="col-md-2" style="">
                                        <div class="form-group">
                                        <input type="radio" name="BLOOD" value="1" > A
                                        <input type="radio" name="BLOOD" value="2" > B
                                        <input type="radio" name="BLOOD" value="3" > O
                                        <input type="radio" name="BLOOD" value="4" > AB
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>สถานภาพ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="radio" name="STATUS" value="1" > โสด
                                        <input type="radio" name="STATUS" value="2" > แต่งงาน
                                        <input type="radio" name="STATUS" value="3" > หม้าย 
                                        <input type="radio" name="STATUS" value="4" > หย่าร้าง 
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>สัญชาติ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:100%" name="NATION">
                                                @foreach($nation as $item)
                                                <option value="{{ $item->nation_code }}">{{ $item->nation_name }}</option>;
                                                @endforeach    
                                        </select>   
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>เชื้อชาติ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:100%" name="RACE">
                                        @foreach($race as $item)
                                                <option value="{{ $item->race_code }}">{{ $item->race_name }}</option>;
                                        @endforeach    
                                        </select>   
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>ศาสนา</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:100%" name="RELIGION">
                                        @foreach($religion as $item)
                                                <option value="{{ $item->religion_code }}">{{ $item->religion_name }}</option>;
                                        @endforeach    
                                        </select>   
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>ที่อยู่ตามภูมิลำเนา</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <textarea name="PERMANADDRESS" class="form-control" style="width :750px;height:150px;" placeholder="ที่อยู่ตามภูมิลำเนา" ></textarea>
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>ที่อยู่ปัจจุบัน</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <textarea name="PRESENTANADDRESS" class="form-control" style="width :750px;height:150px;" placeholder="ที่อยู่ปัจจุบัน" ></textarea>
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>เบอร์โทรศัพท์</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="่เบอร์โทรศัพท์" name="PHONE" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>มือถือ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="มือถือ" name="MOBILE" >
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>E-mail</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="่E-mail" name="EMAIL" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>Facebook</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="Facebook" name="FACEBOOK" >
                                        </div>
                                </div>
                        </div>
        </div>
        <br>
        <div class="container-fluid">
                        <div class="row">
                                <div class="col-md-2" style="">
                                        <label>web site</label>
                                </div>
                                <div class="col-md-10" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:350%;" placeholder="่web site" name="WEBSITE" >
                                        </div>
                                </div>
                        </div>
        </div><br><br> 

               <center>
                        <button type="submit" class="btn btn-primary" onclick="newDoc()">บันทึก</button>
                        <a type="button" href="/form_resume" class="btn btn-danger">ยกเลิก</a>                      
                </center>
        
</form>


        </div>
        </div>
        </div> <!---divend -->	
<br>
<br>	

	

@endsection

<script language="javascript">
function calAge(o){
     var tmp = o.value.split("-");
     var current = new Date();
     var current_year = current.getFullYear();
     document.getElementById("age").value = current_year - tmp[0];
}

function newDoc() {
    if(confirm('ยืนยันการบันทึก')){
    window.location.assign("")
   }
}

</script>
	