@extends('layout.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza Page
        </div>
        <div class="test">
            <ul>
                @foreach ($pizzas as $pizza)
            <li>{{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}} <a href="/pizza/{{$pizza->id}}">Detail Order</a></li>
                @endforeach
            </ul>
           
        </div>
    <h1>{{session('message')}}</h1>
    </div>
</div>
@endsection