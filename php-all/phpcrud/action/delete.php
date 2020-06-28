<?php 
    include_once "../db_connect/db.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_student WHERE id = $id";
    $query = mysqli_query($connect,$sql);
   header('location:../index.php');
?>