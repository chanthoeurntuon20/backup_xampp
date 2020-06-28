{{-- name of file --}}
@extends('layout.layout')
{{-- name of yeil --}}
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class=" m-b-md">
                  <table>
                      <tr>
                          <th>Name</th>
                          <th>Age</th>
                          <th>Province</th>
                          <th>Action</th>
                      </tr>
                      @foreach ($cleaners as $item)
                          <tr>
                          <td>{{$item->name}}</td>
                          <td>{{$item->age}}</td>
                          <td>{{$item->province}}</td>
                          <td><a href="/cleaner/{{$item->id}}">Detail</a></td>
                          </tr>
                      @endforeach
                  </table>
                <h1>{{session('message')}}</h1>
                </div>

            </div>
        </div>
@endsection