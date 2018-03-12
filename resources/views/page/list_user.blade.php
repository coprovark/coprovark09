@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<h1>List Users</h1>
<table class="table">
      <tr>
           <td class="info">ID</td>          
           <td class="danger">USERNAME</td>
           <td class="warning">PASSWORD</td>
           <td class="success">STATUS</td>
      </tr>  
@foreach($data_list as $item)     
      <tr>
           <td class="info">{{$item->id}}</td>          
           <td class="danger">{{$item->username}}</td>
           <td class="warning">{{$item->password}}</td>
           <td class="success">{{$item->status}}</td>
      </tr> 
@endforeach            
</table>           


@endsection