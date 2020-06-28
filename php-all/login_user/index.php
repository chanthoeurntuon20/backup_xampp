
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
        $errors = array('name'=>'','email'=>'','password'=>'','cpassword'=>'');
        if(isset($_POST['register'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            //echo $name . $email . $password;
            if(empty($name)){
                $errors['name'] = "Username require!!";
            }
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
            if(empty($cpassword)){
                $errors['cpassword'] = "Password Confirm require!!";
            }
            if(!array_filter($errors)){
                 $sql = "INSERT INTO tbl_user(name,email,password)VALUES('$name','$email','$password')";
                 $result = mysqli_query($connect,$sql);
            }
           
        }
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="">Username:</label>
                        <input type="text" name="name" class="form-control">
                        <span class = "text-danger"><?php echo $errors['name'];?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email" class="form-control">
                        <span class = "text-danger"><?php echo $errors['email'];?></span>

                    </div>
                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" name="password" class="form-control">
                        <span class = "text-danger"><?php echo $errors['password'];?></span>

                    </div>
                    <div class="form-group">
                        <label for="">Confirm password:</label>
                        <input type="password" name="cpassword" class="form-control">
                        <span class = "text-danger"><?php echo $errors['password'];?></span>

                    </div>
                <button class = "btn btn-primary btn-block" name = "register">Register Now</button>
                <a href="login.php" class = "btn btn-info btn-block">Exsising</a>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>