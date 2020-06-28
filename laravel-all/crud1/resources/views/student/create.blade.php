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
        <form action="">
            @csrf
            <div class="form-group">
              <label for="name">Usrnname: </label>
              <input type="name" class="form-control" placeholder="Enter name" id="name">
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" placeholder="Enter password" id="pwd">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>
