@extends('layouts.main')

@section('content')

 <h1 class="page-header">สมัครสมาชิก</h1>


             <form action="/form_register_save" method="post">
              
                     
                        <div class="form-group">
                        <label>ID</label>
                              <input type="text" class="form-control" placeholder="ใส่ id" name="ID" style="width:70%">
                         </div>  
                        <div class="form-group">
                               <label>User</label>
                               <input type="text" class="form-control"placeholder="ใส่ User" name="USERNAME" style="width :70%">
                        </div>
                        <div class="form-group">
                               <label>Password</label>
                               <input type="password" class="form-control"placeholder="ใส่ Password" name="PASSWORD" style="width :70%">
                        </div>
                        <label>STATUS</label>
                        <div class="form-inline" style="width:100%">
                                <select class="form-control" name="STATUS" style="width:9%" >
                                    <option value="1" onclick>1</option>
                                    <option value="2">2</option>
                                </select>
                        </div>
                        <br>
              
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                       
                       
                       
                        <a type="button" href="/form_register" class="btn btn-danger">ยกเลิก</a>                      
                </center>
                        <br>
                </form>



                       <!-- <form>
                            <div class="form-group">
                                    <label for="name">ชื่อ-สกุล</label>
                                    <div class="form-inline" style="width:70%">
                                      <select class="form-control" style="width:13%">
                                          <option>นาย</option>
                                          <option>นาง</option>
                                          <option>นางสาว</option>
                                      </select>
                                      <input type="text" class="form-control" placeholder="ชื่อ" name="name" style="width:30%">
                                      <input type="text" class="form-control" placeholder="สกุล" name="name" style="width:30%">
                                    </div>
                                  </div>
                            <div class="form-group"> 
                                <label for="เพศ">เพศ</label> <br>
                                    <input type="radio"> ชาย
                                    <input type="radio"> หญิง     
                              </div>
                            <div class="form-group">
                              <label for="">เบอร์โทร</label><br>
                              <input type="text" placeholder="เบอร์โทร"  name="เบอร์โทร">
                            </div>
                            <div class="form-group">
                                <label for="">ที่อยู่</label><br>
                                <textarea name="ที่อยู่"> </textarea>
                              </div>
                            <div class="form-group">
                                <label for="">อีเมล</label><br>
                                <input type="text" placeholder="xxxxxx@Gmail.com" name="อีเมล">
                              </div>
                              <div class="form-group">
                                <label for="">สิ่งที่ชอบ</label><br>
                                <input type="checkbox" name="สิ่งที่ชอบ">เขียนโปรแกรม
                                <input type="checkbox" name="สิ่งที่ชอบ">เล่นเกม
                                <input type="checkbox" name="สิ่งที่ชอบ">เล่นกีฬา
                                <input type="checkbox" name="สิ่งที่ชอบ">ดูหนัง
                                <input type="checkbox" name="สิ่งที่ชอบ">นอน
                              </div>
                              <div class="form-group">
                                <label for="">จังหวัด</label><br>
                                <select name="province">
                                        <option value="" selected>--------- เลือกจังหวัด ---------</option>
                                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                        <option value="กระบี่">กระบี่ </option>
                                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                                        <option value="ขอนแก่น">ขอนแก่น</option>
                                        <option value="จันทบุรี">จันทบุรี</option>
                                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                        <option value="ชัยนาท">ชัยนาท </option>
                                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                                        <option value="ชุมพร">ชุมพร </option>
                                        <option value="ชลบุรี">ชลบุรี </option>
                                        <option value="เชียงใหม่">เชียงใหม่ </option>
                                        <option value="เชียงราย">เชียงราย </option>
                                        <option value="ตรัง">ตรัง </option>
                                        <option value="ตราด">ตราด </option>
                                        <option value="ตาก">ตาก </option>
                                        <option value="นครนายก">นครนายก </option>
                                        <option value="นครปฐม">นครปฐม </option>
                                        <option value="นครพนม">นครพนม </option>
                                        <option value="นครราชสีมา">นครราชสีมา </option>
                                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                        <option value="นครสวรรค์">นครสวรรค์ </option>
                                        <option value="นราธิวาส">นราธิวาส </option>
                                        <option value="น่าน">น่าน </option>
                                        <option value="นนทบุรี">นนทบุรี </option>
                                        <option value="บึงกาฬ">บึงกาฬ</option>
                                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                        <option value="ปทุมธานี">ปทุมธานี </option>
                                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                        <option value="ปัตตานี">ปัตตานี </option>
                                        <option value="พะเยา">พะเยา </option>
                                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                        <option value="พังงา">พังงา </option>
                                        <option value="พิจิตร">พิจิตร </option>
                                        <option value="พิษณุโลก">พิษณุโลก </option>
                                        <option value="เพชรบุรี">เพชรบุรี </option>
                                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                        <option value="แพร่">แพร่ </option>
                                        <option value="พัทลุง">พัทลุง </option>
                                        <option value="ภูเก็ต">ภูเก็ต </option>
                                        <option value="มหาสารคาม">มหาสารคาม </option>
                                        <option value="มุกดาหาร">มุกดาหาร </option>
                                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                        <option value="ยโสธร">ยโสธร </option>
                                        <option value="ยะลา">ยะลา </option>
                                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                        <option value="ระนอง">ระนอง </option>
                                        <option value="ระยอง">ระยอง </option>
                                        <option value="ราชบุรี">ราชบุรี</option>
                                        <option value="ลพบุรี">ลพบุรี </option>
                                        <option value="ลำปาง">ลำปาง </option>
                                        <option value="ลำพูน">ลำพูน </option>
                                        <option value="เลย">เลย </option>
                                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                        <option value="สกลนคร">สกลนคร</option>
                                        <option value="สงขลา">สงขลา </option>
                                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                        <option value="สระแก้ว">สระแก้ว </option>
                                        <option value="สระบุรี">สระบุรี </option>
                                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                                        <option value="สุโขทัย">สุโขทัย </option>
                                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                        <option value="สุรินทร์">สุรินทร์ </option>
                                        <option value="สตูล">สตูล </option>
                                        <option value="หนองคาย">หนองคาย </option>
                                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                        <option value="อุดรธานี">อุดรธานี </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                <label for="USER">USER</label><br>
                                <input type="text" placeholder="ชื่อผู้ใช้" name="USER">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label><br>
                                <input type="text" placeholder="รหัสผ่าน" name="Password">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">RePassword</label><br>
                                <input type="text" placeholder="รหัสผ่านอีกครั้ง" name="RePassword">
                              </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> ยอมรับเงื่อนไข
                              </label>
                            </div>
                            <button type="button" class="btn btn-primary">submit</button>
                            <button type="button" class="btn btn-danger">reset</button>

                        </form> -->


@endsection