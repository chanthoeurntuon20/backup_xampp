<?php
 include_once('../header/header.php');
 include_once('../connect.php');
 ?>

<?php 
    $id = $_GET['id'];
    echo $id;
    $sql = "DELETE FROM student where id= $id";
    $query = mysqli_query($connect,$sql);
    header('location:../index.php');
?>