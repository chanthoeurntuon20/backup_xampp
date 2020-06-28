<?php
 include_once('connection/connect.php');
 ?>

<?php 
    $id = $_GET['id'];
    echo $id;
    $sql = "DELETE FROM student where id= $id";
    $query = mysqli_query($connect,$sql);
    header('location:../index.php');
?>