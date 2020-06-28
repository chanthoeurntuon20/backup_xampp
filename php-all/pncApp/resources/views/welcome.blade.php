{{-- name of file --}}
@extends('layout.layout')
{{-- name of yeil --}}
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Welcome pn school
                </div>
                <a href="/student/create">add student</a><br>
                <a href="/student">List student</a>
            </div>
        </div>
@endsection