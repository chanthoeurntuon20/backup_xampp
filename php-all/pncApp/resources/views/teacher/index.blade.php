{{-- name of file --}}
@extends('layout.layout')
{{-- name of yeil --}}
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class=" m-b-md">
                    <table border="1">
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Province</th>
                            <th>Detail</th>
                        </tr>
                   
                  @foreach ($teachers as $item)
                      <tr>
                      <td>{{$item->name}}</td>
                      <td>{{$item->age}}</td>
                      <td>{{$item->province}}</td>
                      <td><a href="/teacher/{{$item->id}}">View</a></td>

                      </tr>
                  @endforeach
                </table>
                </div>

            </div>
        </div>
@endsection