<?php 
    include_once('../connection/connect.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $class_id = $_POST['class'];
        echo $name ;
        $sql = "INSERT INTO student(name,email,password,class_id)VALUES('$name','$email','$password',' $class_id')";
        $query = mysqli_query($connect,$sql);
    //    if($query){
    //     header('location:../index.php');
    //    }else{
    //     header('location:../insert.php');
    //    }
    }
?>