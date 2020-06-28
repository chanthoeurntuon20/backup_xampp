<?php 
    include_once('header.php');
    include_once('connection/connect.php');
    $class = mysqli_query($connect, "SELECT * FROM class");
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
                <select name="class" class="form-control">
                    <?php foreach ($class as $key => $value) { ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['class_name'] ?></option>
                    <?php }?>
                </select><br>
                <button type = "submit" name ="submit" class = "btn btn-primary btn-block">Add new</button>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>