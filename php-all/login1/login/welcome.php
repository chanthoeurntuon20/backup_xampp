<?php 
session_start();
        $con = new mysqli('localhost', 'root', '', 'login');
        $sql= "SELECT email FORM users";
        $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                    <h3>Welcome to New Day!!</h3>
                    </div>
                    <div class="card-body text-center">
                        <img src="https://dejpknyizje2n.cloudfront.net/svgcustom/clipart/preview/crazy-smiling-emoji-sticker-29833-550x550.png" alt="" width='300'>
                        <h3><?php echo  $_SESSION['email']  ?></h3>
                    </div>
                    <div class="card-footer">
                        <a href="logout.php" class="btn btn-primary" name= "logout">Logout</a>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>