<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php 
    $connect = new mysqli('localhost','root','','login');
    $errors = array('name'=>'','email'=>'','password'=>'','cpassword'=>'');
   if(isset($_POST['register'])){
        $name = $connect->real_escape_string($_POST['name']);
        $email = $connect->real_escape_string($_POST['email']);
        $password = $connect->real_escape_string($_POST['password']);
        $cpassword = $connect->real_escape_string($_POST['cpassword']);
       
        if(empty($name)){
           $errors['name']="Username cannot empty";
        }else{

        }
        if(empty($email)){
            $errors['email']="Email cannot empty";
        }else{
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors['email']="Email not validate";
            }
        }
        if(empty($password)){
            $errors['password']="Password cannot empty";
        }
        if(empty($cpassword)){
            $errors['cpassword']="Confirm password cannot empty";
        }
        if($password!=$cpassword){
            $errors['password']="Password doesn't match with confirm password";
            $errors['cpassword']="Confirm password not the same previus password";
        }
        if(!array_filter($errors)){
            $hash= password_hash($password,PASSWORD_BCRYPT);
            $sql= "INSERT INTO tbl_user(name,email,password) VALUES('$name','$email','$hash')";
            $connect->query($sql);
        }
   }
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Register Now!</div>
                    <div class="card-body">
                         <form action ="index.php" method="POST">
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" class="form-control"  name="name" placeholder="Enter name">
                                <small class="form-text text-danger"><?php echo $errors['name'] ;?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control"  name="email" placeholder="Enter email">
                                <small class="form-text text-danger"><?php echo $errors['email'] ;?></small>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" id="password">
                                <small class="form-text text-danger"><?php echo $errors['password'] ;?></small>
                            </div>
                            <div class="form-group">
                                <label for="cpassword">Confirm Password</label>
                                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" id="cpassword">
                                <small class="form-text text-danger "><?php echo $errors['cpassword'] ;?></small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                            <a href="login.php" class="btn btn-success btn-block">Existing Account</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>