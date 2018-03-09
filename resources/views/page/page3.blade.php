@extends('layouts.main')

@section('title', 'Page Title')



@section('content')


   <h1> page3 </h1>

 <form action="/page12" method="post">
         
        <select name="select">
           <option value="TH">TH</option>
           <option value="LA">LA</option>
           <option value="MA">MA</option>
           <option value="SIG">SIG</option>
           <option value="US">US</option>
        </select> 
        รายละเอียด
        <textarea name="txt_textarea"> </textarea>
        <br><br>
        <input type="submit" value="ส่งค่า">
  </form>   



@endsection