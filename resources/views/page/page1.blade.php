@extends('layouts.main')

@section('title', 'Page Title')



@section('content')


      CO Provark09<br>
     <h1> page1 </h1>

     <form action="/page" method="post">
         

         <input type="text" name="name">
         <input type="hidden" name="hidden" value="59122420129">

         <input type="radio" name="radio" value="M"> ชาย
         <input type="radio" name="radio" value="F"> หญิง
          <br>

         <input type="submit" value="ส่งค่า">
     
      </form>   

      <h1>แสดงค่า</h1>
     ชื่อ = {{ $NAME }} <br>
     ID = {{ $ID }} <br>
     เพศ = {{ $GEN }} 


@endsection