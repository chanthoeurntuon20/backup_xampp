@extends('layout.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Detail Pags
        </div>
        <ul>
        <li>Name: {{$pizza->name}}</li>
        <li>Type: {{$pizza->type}}</li>
        <li>Base: {{$pizza->base}}</li>
        </ul>
        <a href="/pizza">Back to Pizza List</a>
        <br>
        <form action="/pizza/{{$pizza->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete Order</button>
        </form>
    </div>
</div>
@endsection