<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud laravel1</title>
    <link rel="stylesheet" href="/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <a href="">Add student</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($students as $student)
                <tr>
                    <td>{{$student['id']}}</td>
                    <td>{{$student['firstName']}}</td>
                    <td>{{$student['lastName']}}</td>
                    <td>{{$student['age']}}</td>
                    <td>
                        <a href="" class="btn btn-danger">Delete</a>
                        <a href="" class="btn btn-info">Update</a>
                    </td>
                    
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>