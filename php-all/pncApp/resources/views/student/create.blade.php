{{-- name of file --}}
@extends('layout.layout')
{{-- name of yeil --}}
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    
                    <form action="/student" method="POST">
                        {{-- prevent hacker --}}
                        @csrf
                        <input type="text" name="name" placeholder="Username">
                        <input type="text" name="age" placeholder="Age">
                        <input type="text" name="province" placeholder="Province">
                        <button type="submit">Create student</button>
                    </form>
                </div>

            </div>
        </div>
@endsection