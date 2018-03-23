@extends('layouts.main1')

@section('content')

 <h3 class="page-header">ใบสมัคร</h3>


         <div class="container-fluid" style="border:1px solid black;border-radius: 0px 0px 0px 0px;"> 

         <form class="form-group form-inline" action="/form_user_save" medthod="get">

                   
             <div class="container-fluid">
                <div class="row">  
                    <div class="col-md-3">
                       <label style="padding : 15%;background-color:#b3c6ff;">CO-PROVARK</label><br>

                       <label>เลขที่ NO.</label>
                         <input type="text" class="form-control" style="width:55%;" name="NAME" > <br><br>
                                        
                      <label>วันที่ Date</label>
                        <input class="form-control" style="width:55%;" type="text" name="DAY">
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
                     <label>ประวัติส่วนตัว</label><br>  
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
                                        <input type="radio" name="TPYEUSER" value="1" > นักเรียน 
                                        <input type="radio" name="TPYEUSER" value="2" > นักศึกษา 
                                        <input type="radio" name="TPYEUSER" value="3" > ครู/อาจารย์ 
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
                                        <input type="text" name="level_code" class="form-control" placeholder="รหัสนักศึกษาอ้างอิง" style="width :100%" required>
                                    </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>เลขที่บัตรประชาชน</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" name="level_code" class="form-control" placeholder="เลขที่บัตรประชาชน" style="width :100%" required>
                                 </div>
                        </div>
                </div>
        </div>
        <br>
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-2" style="">
                            <label>ชื่อ</label>
                        </div>
                            <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="่ชื่อ-สกุล" name="NAME" >
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
                                        <select class="form-control" style="width:100%" name="BRANCH">
                                        <option value="01">สาขาวิทยาการคอมพิวเตอร์</option>
                                        <option value="02">สาขาวิศวกรรมซอร์ฟแวร์</option>
                                        <option value="03">สาขาเทคโนโลยีมัลติมีเดียและแอนิเมชัน</option>
                                        <option value="04">สาขาเทคโนโลยีสารสนเทศ</option>
                                        </select>   
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>คณะ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:70%" name="FACULTY">
                                        <option value="01">คณะเกษตรศาสตร์</option>
                                        <option value="02">คณะครุศาสตร์</option>
                                        <option value="03">คณะเทคโนโลยีอุตสาหกรรม</option>
                                        <option value="04">คณะวิทยาการคอมพิวเตอร์</option>
                                        <option value="05">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                                        <option value="06">คณะพยาบาลศาสตร์</option>
                                        <option value="07">คณะแพทย์แผนไทยและแพทย์ทางเลือก</option>
                                        <option value="08">คณะสาธารณสุขศาสตร์</option>
                                        <option value="09">คณะนิติศาสตร์</option>
                                        <option value="10">คณะวิทยาศาสตร์</option>
                                        <option value="11">คณะบริหารธุรกิจและการจัดการ</option>
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
                                        <select class="form-control" style="width:100%" name="LEVEL">
                                        <option value="1">ปี 1</option>
                                        <option value="2">ปี 2</option>
                                        <option value="3">ปี 3</option>
                                        <option value="4">ปี 4</option>
                                        <option value="5">ปี 5</option>
                                        <option value="6">ปี 6</option>
                                        </select>  
                                        </div>
                                </div>
                                <div class="col-md-1" style="width:10%">
                                        <label>เกรดเฉลี่ย</label>
                                </div>
                                <div class="col-md-1" style="width:13%">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%" placeholder="เกรดเฉลี่ย" name="GRADE" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>สถาบันการศึกษา</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:100%" name="INSTITUTION">
                                        <option value="001">มหาวิทยาลัยราชภัฏอุบลราชธานี</option>
                                        <option value="002">มหาวิทยาลัยอุบลราชธานี</option>
                                        </select> 
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
                                        <select class="form-control" style="width:100%" name="BRANCH">
                                        <option value="01">สาขาวิทยาการคอมพิวเตอร์</option>
                                        <option value="02">สาขาวิศวกรรมซอร์ฟแวร์</option>
                                        <option value="03">สาขาเทคโนโลยีมัลติมีเดียและแอนิเมชัน</option>
                                        <option value="04">สาขาเทคโนโลยีสารสนเทศ</option>
                                        </select>   
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>คณะ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <select class="form-control" style="width:70%" name="FACULTY">
                                        <option value="01">คณะเกษตรศาสตร์</option>
                                        <option value="02">คณะครุศาสตร์</option>
                                        <option value="03">คณะเทคโนโลยีอุตสาหกรรม</option>
                                        <option value="04">คณะวิทยาการคอมพิวเตอร์</option>
                                        <option value="05">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                                        <option value="06">คณะพยาบาลศาสตร์</option>
                                        <option value="07">คณะแพทย์แผนไทยและแพทย์ทางเลือก</option>
                                        <option value="08">คณะสาธารณสุขศาสตร์</option>
                                        <option value="09">คณะนิติศาสตร์</option>
                                        <option value="10">คณะวิทยาศาสตร์</option>
                                        <option value="11">คณะบริหารธุรกิจและการจัดการ</option>
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
                                        <input type="radio" name="TPYESTUDENT" value="1" > ปกติ 
                                        <input type="radio" name="TPYESTUDENT" value="2" > กศ.บป. 
                                        <input type="radio" name="TPYESTUDENT" value="3" > กศ.อศ. 
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>Learning Style</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <input type="checkbox" name="Style" value="1" > V
                                        <input type="checkbox" name="Style" value="2" > A
                                        <input type="checkbox" name="Style" value="3" > R
                                        <input type="checkbox" name="Style" value="4" > K
                                        <input type="checkbox" name="Style" value="6" > Model
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
                                        <input class="form-control form-control-sm" type="Date" name="ฺBRITHDAY">
                                        </div>
                                </div>
                                <div class="col-md-1" style="">
                                        <label>อายุ(ปี) </label>
                                </div>
                                <div class="col-md-2" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:60%;" placeholder="" name="AGE" >
                                        </div>
                                </div>
                                <div class="col-md-1" style="">
                                        <label>เพศ</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <input type="radio" name="GENDER" value="1" > ชาย 
                                        <input type="radio" name="GENDER" value="2" > หญิง 
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
                                        <input type="text" class="form-control" style="width:100%;" placeholder="น้ำหนัก" name="WEIGHT" >
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
                                        <input type="radio" name="Style" value="2" > A
                                        <input type="radio" name="Style" value="3" > B
                                        <input type="radio" name="Style" value="4" > O
                                        <input type="radio" name="Style" value="6" > AB
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
                                        <input type="radio" name="TPYESTUDENT" value="1" > โสด
                                        <input type="radio" name="TPYESTUDENT" value="2" > แต่งงาน
                                        <input type="radio" name="TPYESTUDENT" value="3" > หม้าย 
                                        <input type="radio" name="TPYESTUDENT" value="3" > อย่าร้าง 
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>สัญชาติ</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <input type="text" name="level_code" class="form-control" id="exampleInputPassword1" placeholder="สัญชาติ" style="width :100%" required>
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
                                        <input type="text" name="level_code" class="form-control" id="exampleInputPassword1" placeholder="เชื้อชาติ" style="width :100%" required>
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>ศาสนา</label>
                                </div>
                                <div class="col-md-3" style="">
                                        <div class="form-group">
                                        <input type="text" name="level_code" class="form-control" id="exampleInputPassword1" placeholder="ศาสนา" style="width :100%" required>
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
                                        <textarea name="area" class="form-control" style="width :750px;height:150px;" placeholder="ที่อยู่ตามภูมิลำเนา" ></textarea>
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
                                        <textarea name="area" class="form-control" style="width :750px;height:150px;" placeholder="ที่อยู่ปัจจุบัน" ></textarea>
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
                                        <input type="text" class="form-control" style="width:100%;" placeholder="่เบอร์โทรศัพท์" name="NAME" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>มือถือ</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="มือถือ" name="NICKNAME" >
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
                                        <input type="text" class="form-control" style="width:100%;" placeholder="่E-mail" name="NAME" >
                                        </div>
                                </div>
                                <div class="col-md-2" style="">
                                        <label>Facebook</label>
                                </div>
                                <div class="col-md-4" style="">
                                        <div class="form-group">
                                        <input type="text" class="form-control" style="width:100%;" placeholder="Facebook" name="NICKNAME" >
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
                                        <input type="text" class="form-control" style="width:350%;" placeholder="่web site" name="NAME" >
                                        </div>
                                </div>
                        </div>
        </div><br><br>

               <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a type="button" href="/form_register" class="btn btn-danger">ยกเลิก</a>                      
                </center>
        
</form>
        </div>
        </div>
        </div> <!---divend -->	
<br>
<br>	
		

@endsection