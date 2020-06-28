<?php 
    include_once('header.php');
?>
<h1 class = "text-center">Add new student</h1>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
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
                <button type = "submit" name ="submit" class = "btn btn-primary btn-block">Add new</button>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<?php 
   // include_once('../connect.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo $name;
    }
?>