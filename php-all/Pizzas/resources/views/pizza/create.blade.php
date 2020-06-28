@extends('layout.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
           <form action="/pizza" method="POST">
            @csrf
               <input type="text" name="name" placeholder="Username">
               <input type="text" name="type" placeholder="Pizza name">
               <input type="text" name="base" placeholder="Base pizza">
               <input type="submit" value="Book Pizza">
           </form>
        </div>
    </div>
</div>
@endsection