<?php 
    //$teachers = array('channk','Ronan','Sieha','Rady','Rith');
    // @if(count($teacher) > 0){
    //     foreach ($teacher as $teachers) {
    //     {{$teacher}}
    // @endforeach
    // @else {
    //     Emypty array
    // }
    // @endif
    // }
    // }
    // foreach ($teacher as $teachers) {
    //     {{$teachers}}
    // }
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            
        </tr>
        @foreach ($student as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->password}}</td>
                //<td><a href="/teacher/{{$item->id}}" class="btn btn-info">Show</a></td>
            </tr>
        @endforeach
    </table>
?>