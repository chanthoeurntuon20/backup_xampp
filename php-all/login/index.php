<?php 
$connect = new mysqli('localhost','root','','login');
$errors = array('email'=>'','name' =>'','password' =>'','cpassword' => '');
    if(isset($_POST['submit'])){
        $name = $connect ->real_escape_string($_POST['name']);
        $email = $connect ->real_escape_string($_POST['email']);
        $password = $connect ->real_escape_string($_POST['password']);
        $cpassword =$connect ->real_escape_string($_POST['cpassword']);
        //echo $name . $email . $password . $cpassword ;
        if(empty($name)){
            $errors['name'] = "Username required";
        }else{
            if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
                $errors['name'] = 'Name must be letters and spaces only';
        }
        if(empty($email)){
			$errors['email'] = "An email cannot empty";
        }else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$errors['email']= "Email not validate";
			}
        }
        
        if(empty($password)){
            $errors['password'] = "Password required";
        }
        if(empty($cpassword)){
            $errors['cpassword'] = "Confirm Password required";
        }
//check if have error can not go
        if(!array_filter($errors)){
            if($password != $cpassword){
                echo "Password doesn't match!!";
            }else{
                $hashPassword = password_hash($password,PASSWORD_BCRYPT);
                $sql = "INSERT INTO user (name,email,password)VALUES('$name','$email','$hashPassword')";
                $connect->query($sql);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login system</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
         <!-- border -->
   <fieldset>
       <legend>Login</legend>
       <form action="#" method="POST">
            <input type="text" name="name" placeholder="Username">
            <p><?php echo $errors['name'];?></p>
            <input type="email" name="email" placeholder="Email">
            <p><?php echo $errors['email'];?></p>
            <input type="password" name="password" placeholder="Password">
            <p><?php echo $errors['password'];?></p>
            <input type="password" name="cpassword" placeholder="Confirm Password">
            <p><?php echo $errors['cpassword'];?></p>
            <button type = "submit" name = "submit">Login</button>
    </form>
   </fieldset>
</body>
</html>