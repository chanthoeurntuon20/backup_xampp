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
          {{-- @foreach ($student as $item)
            <tr>
            <td>{{$item->name}}</td>
            </tr>
          @endforeach --}}
        </table>
    </div>
@endsection