{{-- name of file --}}
@extends('layout.layout')
{{-- name of yeil --}}
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    {{$cleaner->name}}
                <form action="/cleaner/{{$cleaner->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button>Delete</button>
             </form>
                </div>
            </div>
        </div>
@endsection