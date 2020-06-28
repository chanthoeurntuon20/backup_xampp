<?php 
$con = new mysqli('localhost', 'root', '', 'login');
session_start();
$errors = array(
    'email' => '', 
    'password' => '', 
);
?>
<?php 
    if(isset($_POST['login'])){
        $email = $con->real_escape_string($_POST['email']);
        $password = $con->real_escape_string($_POST['password']);
        if(empty($email)) {
            $errors['email'] = "Email required";
          
        }else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Email not validate";
              
            }
        }
        if(empty($password)) {
            $errors['password'] = "Password required";
           
        }
        if(!array_filter($errors)){
            $sql = "SELECT id,password FROM tbl_user WHERE email = '$email' ";
            $query = $con->query($sql);
            // check data of rows in database have of not
            if($query->num_rows > 0){
                //convert to array association
                $data = $query->fetch_array();
                //compare between password form login and password risgister
                if(password_verify($password,$data['password'])){
                    //we user session want to use in another page
                    $_SESSION['email'] = $email;
                    header('location:Welcome.php');
                }else{
                   $errors['password'] = $errors['email'] = "Password and Email not match";
                }
            }else{
                $errors['email'] = "Email not correct!!";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Login Now!</div>
                    <div class="card-body">
                         <form action ="#" method="POST">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                <small class="form-text text-danger"><?php echo $errors['email']?></small>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" id="password">
                                <small class="form-text text-danger"><?php echo $errors['password']?></small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="login">Login Now</button>
                            <a href="index.php" class="btn btn-success btn-block">Register Now</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>