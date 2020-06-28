@extends('layout.layout')
@section('content')
<div class="container mt-5">
    <div class="card">
          <div class="card-header">
              <h1>Teacher Information</h1>
          </div>
          <div class="card-body">
              {{$teacher->name}}<br>
              {{$teacher->age}}<br>
              {{$teacher->email}}
          </div>
          <div class="card-footer">
              <form action="/teacher/{{$teacher->id}}"method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
          </div>
    </div>
  </div>
@endsection