<?php include_once "../layout/header.php"?>
<div class="container">
        <form action="#"method = "POST">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Age</label>
                <input type="text" name="age" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Province</label>
                <input type="text" name="province" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name = "login">Add new</button>
        </form>
    </div>
<?php 
include_once "../layout/footer.php";
include_once "../db_connect/db.php";
    if(isset($_POST['login'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $province = $_POST['province'];
        // echo $name.$age.$province;
        $sql = "INSERT INTO tbl_student(name,age,province)VALUES('$name','$age','$province')";
        $query = mysqli_query($connect,$sql);
        if($query){
        header('location:../index.php');
        }else{
            echo "Cannot insert";
        }
    }
?>