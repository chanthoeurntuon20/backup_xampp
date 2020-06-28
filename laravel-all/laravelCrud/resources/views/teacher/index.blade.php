@extends('layout.layout')
@section('content')
    <div class="container">
        <table class= "table table-bordered">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Province</th>
                <th>Detail</th>
            </tr>
            @foreach ($teacher as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->age}}</td>
                    <td>{{$item->province}}</td>
                    <td><a href="/teacher/{{$item->id}}" class="btn btn-primary">Show</a></td>
                </tr>
            @endforeach
        </table>
        <h1>{{session('message')}}</h1>
    </div>
@endsection