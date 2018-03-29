@extends('layouts.main1')

@section('content')
<style>
	.bord{
		border-top: 1px solid black;
		border-left: 1px solid black;
		border-bottom:1px solid black;
	}
	td{
        border:1px solid black;
    }
</style>


<div class="row" style="background:linear-gradient(white,#e6e6e6);">
<button type="button" class="btn btn-default navbar-btn" onclick="goBack()">ย้อนกลับ</button>
    <h3 class="fa fa-hand-o-right btn-lg"> รายละเอียดสมาชิก</h3>
</div>
<br>
@foreach($users as $item)
<div class="row">
    <div class="col-sm-2" style="border:1px solid black; height:150px">
		<div class="row" style=";background-color: #b3c6ff;">
			<div style="border:1px solid #b3c6ff; padding:20px 0 20px 0;">
				<center><h4 style="color:white;font-weight: bold;">CO-PROVARK</h4></center>
			</div>
		</div>
		<div class="row" style="padding:10px 0 0 10px;">
			<label>เลขที่</label> {{ $item->main_no }}<br>
			<label>วันที่</label> {{ $item->main_date }}
		</div>
	</div>
	<div class="col-sm-8" style="border-bottom:1px solid black; border-top:1px solid black; height:150px;">
		<center>
			<h4>ใบสมัครเข้าร่วมโครงการวิจัย</h4>
			<p>เรื่อง</p>
			<p>การพัฒนารูปแบบการส่งเสริมศักยภาพผู้ผลิตซอร์ฟแวร์และบริการซอร์ฟแวร์โดยใช้
			เทคนิคการโคชชิ่งตามสไตล์การเรียนรู้แบบ VARK เพื่อให้สอดคล้องกับความต้องการ
			ของผู้ประกอบการและอุตสาหกรรมซอร์ฟแวร์</p>
		</center>
	</div>
	<div class="col-sm-2" style="border:1px solid black; height:150px;">
		<center style="padding:40px 0 28px 0;">
			<p>ขนาดรูปถ่าย</p>
			<p>size</p>
			<p>2" x 2"</p>
		</center>
	</div>
</div>
<div class="row" style="border-left:1px solid black; border-right:1px solid black; border-bottom:1px solid black; background-color:#b3c6ff">
	<label style="padding:5px 0 5px 0;">ประวัติส่วนตัว (Presonal Information)</label>
</div>
<div class="row">
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>ประเภทผู้ใช้งาน</b></td>
					<td class="col-sm-10">{{ $item->user_lavel }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>รหัสนักศึกษา</b></td>
					<td class="col-sm-3">{{ $item->main_code }}</td>
					<td class="col-sm-3"><b>เลขที่บัตรประจำตัวประชาชน</b></td>
					<td class="col-sm-4">{{ $item->main_idcard }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>ชื่อ-สกุล</b></td>
					<td class="col-sm-4">{{ $item->title_code }}{{ $item->main_name }}</td>
					<td class="col-sm-2"><b>ชื่อเล่น</b></td>
					<td class="col-sm-4">{{ $item->main_nickname }}</td>
			</table>
			 <table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>สาขาวิชา</b></td>
					<td class="col-sm-4">{{ $item->mojor_name }}</td>
					<td class="col-sm-2"><b>คณะ</b></td>
					<td class="col-sm-4">{{ $item->faculty_name }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>ชั้นปีที่</b></td>
					<td class="col-sm-2">{{ $item->main_lavel }}</td>
					<td class="col-sm-1"><b>เกรด</b></td>
					<td class="col-sm-1">{{ $item->GPA }}</td>
					<td class="col-sm-2"><b>สถาบันการศึกษา</b></td>
					<td class="col-sm-4">{{ $item->institute_name }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>ประเภทนักศึกษา</b></td>
					<td class="col-sm-4">{{ $item->type_name }}</td>
					<td class="col-sm-2"><b>Learning Style</b></td>
					<td class="col-sm-4">{{ $item->main_style }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>วัน เดือน ปี เกิด</b></td>
					<td class="col-sm-2">{{ $item->main_birthday }}</td>
					<td class="col-sm-1"><b>อายุ (ปี)</b></td>  	
					<td class="col-sm-1">{{ $item->main_age }}</td>
					<td class="col-sm-2"><b>เพศ</b></td>
					<td class="col-sm-4">{{ $item->gender_name }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>น้ำหนัก</b></td>
					<td class="col-sm-2">{{ $item->main_weigth }}</td>
					<td class="col-sm-1"><b>ส่วนสูง</b></td>
					<td class="col-sm-1">{{ $item->main_height }}</td>
					<td class="col-sm-2"><b>หมู่เลือด</b></td>
					<td class="col-sm-4">{{ $item->blood_name }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>สถานภาพ</b></td>
					<td class="col-sm-4">{{ $item->status_name }}</td>
					<td class="col-sm-2"><b>สัญชาติ</b></td>
					<td class="col-sm-4">{{ $item->nation_name }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>เชื้อชาติ</b></td>
					<td class="col-sm-4">{{ $item->race_name }}</td>
					<td class="col-sm-2"><b>ศาสนา</b></td>
					<td class="col-sm-4">{{ $item->religion_name }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2" style="padding-bottom:40px"><b>ที่อยู่ตามภูมิลำเนา</b></td>
					<td class="col-sm-10">{{ $item->main_permenAddress }}</td>
			</table>	
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2" style="padding-bottom:40px"><b>ที่อยู่ปัจจุบัน</b></td>
					<td class="col-sm-10">{{ $item->main_presentAddress }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>เบอร์โทรศัพท์</b></td>
					<td class="col-sm-4">{{ $item->main_phone }}</td>
					<td class="col-sm-2"><b>มือถือ</b></td>
					<td class="col-sm-4">{{ $item->main_mobile }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>E-mail</b></td>
					<td class="col-sm-4">{{ $item->main_Email }}</td>
					<td class="col-sm-2"><b>Facebook</b></td>
					<td class="col-sm-4">{{ $item->main_facebook }}</td>
			</table>
			<table class="table" style="margin-bottom: 0px;">
					<td class="col-sm-2"><b>Web site</b></td>
					<td class="col-sm-10">{{ $item->main_website }}</td>
			</table>  
</div>
@endforeach
<br><br>

<script>
function goBack() {
    window.history.back()
}
</script>
@endsection