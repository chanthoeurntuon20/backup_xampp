<?php 
$localhost = 'localhost';
$database = 'crud-review-php';
$username = 'root';

     $connect = mysqli_connect($localhost,$username,'',$database);
    if($connect){
        echo "success";
    }else{
        echo "cannot connect";
    }
?>