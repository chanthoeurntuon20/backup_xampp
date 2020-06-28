<?php 
    function m_view(){
        include("connection.php");
        $sql = "SELECT * FROM student";
        $result = mysqli_query($connection,$sql);
        //var_dump($result);
        $rows = [];
        if($result && mysqli_num_rows($result) > 0){
            foreach($result as $student){
                $rows[] = $student;
            }
        }
        return $rows;
    }
    function m_add(){
        include("connection.php");
        $firsname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['pwd'];
        $email = $_POST['email'];
        $sql = "INSERT INTO student(FirstName,LastName,pwd,email)VALUES('$firsname','$lastname','$password','$email')";
        $result = mysqli_query($connection,$sql);
        return $result;
    }
   
?>