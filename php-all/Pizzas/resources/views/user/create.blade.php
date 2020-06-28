@extends('layout.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
           <form action="/user" method="POST">
           @csrf
               <input type="text" name="name" placeholder="Username">
               <input type="text" name="age" placeholder="Pizza name">
               <input type="text" name="province" placeholder="Base pizza">
               <input type="submit" value="Rigister">
           </form>
        </div>
    </div>
</div>
@endsection