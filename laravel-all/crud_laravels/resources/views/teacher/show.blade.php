@extends('layout.style')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Detail information
            </div>
            <div class="card-body">
               Name: {{$teacher->name}}<br>
               Age: {{$teacher->age}}<br>
                Province: {{$teacher->province}}<br>
            </div>
            <div class="card-footer">
                <form action="/teacher/{{$teacher->id}}" method="POST">
                    @csrf
                    <button class="btn btn-primary">Delete</button>
                    @method('DELETE')
                </form>
            </div>
        </div>
    
    </div>
@endsection