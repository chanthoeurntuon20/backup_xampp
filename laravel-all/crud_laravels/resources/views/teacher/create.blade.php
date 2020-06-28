@extends('layout.style')
@section('content')
    <div class="container">
        <form action="/teacher"method = "post">
            @csrf
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" name="age" class="form-control">
            </div>
            <div class="form-group">
                <label for="province">Province</label>
                <input type="text" name="province" class="form-control">
            </div>
            <button class="btn btn-primary">Add teacher</button>
        </form>
    </div>
@endsection