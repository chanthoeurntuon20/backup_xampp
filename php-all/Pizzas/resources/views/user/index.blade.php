@extends('layout.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza Page
        </div>
        <div class="test">
            <ol>
                @foreach ($pizzas as $pizza)
            <li>{{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}} <a href="/pizza/{{$pizza->id}}">Detail Order</a></li>
                @endforeach
            </ol>
           
        </div>
    <h1>{{session('message')}}</h1>
    </div>
</div>
@endsection