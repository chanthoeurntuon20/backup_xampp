<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <form action="#" method = "post">
         <input type="text" name = "name">
         <button type = "submit" class = "btn btn-primary" name ="submit" >Submit</button>
    </form>
    
</body>
</html>
<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo $name;
    }
?>