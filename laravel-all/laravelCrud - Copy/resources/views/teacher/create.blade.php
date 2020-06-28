@extends('layout.layout');
@section('content');
<div class="container">
  {{-- when we clik on button submit it go to route method post --}}
  <form action="/teacher" method="POST">
      {{-- stand for Cross Site Request Forgery --}}
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter name" name="name">
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="text" class="form-control" placeholder="Enter age" name="age">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" placeholder="Enter email" name="email">
      </div>
    
      <button type="submit" class="btn btn-primary">Add student</button>
    </form>
</div>
@endsection