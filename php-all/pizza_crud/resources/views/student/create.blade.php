@extends('layout.style');
@section('content')
    <div class="container">
        <form action="/student" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Username:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Age:</label>
                <input type="text" name="age" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Province:</label>
                <input type="text" name="province" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add new</button>
        </form>
    </div>
@endsection