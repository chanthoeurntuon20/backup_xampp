<?php
    $connect = new mysqli('localhost','root','','login');
    if($connect){
        echo "succcess";
    }else {
        echo "can not connect";
    }
?>