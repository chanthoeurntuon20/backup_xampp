<?php 
    include_once('../header/header.php');
    include_once('../connect.php');
    $class = mysqli_query($connect, "SELECT * FROM class");
?>
<h1 class = "text-center">Add new student</h1>
<div class="container">
    <form action="#" method = "post">
    <div class="form-group">
            <label for="">Username</label>
            <input type="text" name = "name" class = "form-control" >
    </div>
    <div class="form-group">
            <label for="">Email</label>
            <input type="text" name = "email" class = "form-control" >
    </div>
    <div class="form-group">
            <label for="">Password</label>
            <input type="text" name = "password" class = "form-control" >
    </div>
    <select name="class" class="form-control">
        <?php foreach ($class as $key => $value) { ?>
                <option value="<?php echo $value['id'] ?>"><?php echo $value['class_name'] ?></option>
        <?php }?>
    </select><br>
    <button type = "submit" name ="submit" class = "btn btn-primary btn-block">Add new</button>
    </form>
</div>
<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $class_id = $_POST['class'];
        echo $class_id;
        $sql = "INSERT INTO student(name,email,password,class_id)VALUES('$name','$email','$password',' $class_id')";
        $query = mysqli_query($connect,$sql);
       if($query){
        header('location:../index.php');
       }else{
        header('location:../insert.php');
       }
    }
?>