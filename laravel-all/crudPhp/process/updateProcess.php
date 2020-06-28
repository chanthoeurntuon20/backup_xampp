<?php 
    include_once('../connection/connect.php');
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "UPDATE student SET name = '$name',email = '$email',password = '$password' WHERE id = $id";
        $query = mysqli_query($connect,$sql);
        if($query){
            header('location:../index.php');
           }else{
            header('location:../update.php');
           }
    }
?>