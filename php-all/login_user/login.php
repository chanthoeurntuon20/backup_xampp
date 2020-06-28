<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login user</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php 
        include_once "connection/connect.php";
        $errors = array('email'=>'','password'=>'');
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            if(empty($email)){
                $errors['email'] = "Email require!!";
            }else{
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $errors['email'] = "Email not validate";
                }
            }
            if(empty($password)){
                $errors['password'] = "Password require!!";
            }
            if(!array_filter($errors)){
                $sql = "SELECT id,password FROM tbl_user where email = '$email'";
                $result = mysqli_query($connect,$sql);
                if($result->num_rows > 0){
                    $data = $result->fetch_array();
                    if(password_verify($password,$data['password'])){
                        $_SESSION['email'] = $email;
                        header('location:success.php');
                    }else{
                   $errors['password'] = $errors['email'] = "Password and Email not match";
                    }
                }else{
                    $errors['email'] = "Email not correct!!";
                }
            }
        } 
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-block" name = "login">Login</button>
                    <a href="index.php" class = "btn btn-info btn-block">Register</a>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>
