@extends('layout.style')
@section('content')
   <div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Province</th>
            <th>Details</th>
        </tr>
        @foreach ($teacher as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->province}}</td>
                <td><a href="/teacher/{{$item->id}}" class="btn btn-info">Show</a></td>
            </tr>
        @endforeach
    </table>
   </div>
@endsection