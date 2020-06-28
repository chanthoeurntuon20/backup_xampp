{{-- name of file --}}
@extends('layout.layout')
{{-- name of yeil --}}
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class=" m-b-md">
                   @foreach ($student as $stu)

                       <ul>
                       <li>{{$stu->name}} - {{$stu->age}} - {{$stu->province}} 
                       <a href="/student/{{$stu->id}}">Detail</a></li>
                       </ul>
                   @endforeach
                </div>

            </div>
        </div>
@endsection