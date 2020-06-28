<?php 
    include_once('layout/header.php');
    include_once('connection/connect.php');
?>
<?php   
    $id = $_GET['id'];
    $sql = "SELECT * FROM student where id = $id";
    $class = mysqli_query($connect, "SELECT * FROM class");
    $query =mysqli_query($connect,$sql);
    foreach($query as $data){

?>
<h1 class = "text-center">Add new student</h1>
<div class="container">
    <form action="#" method = "post">
    <div class="form-group">
            <label for="">Username</label>
            <input type="text" name = "name" class = "form-control" value = "<?php echo $data['name']?>" >
    </div>
    <div class="form-group">
            <label for="">Email</label>
            <input type="text" name = "email" class = "form-control" value = "<?php echo $data['email']?> " >
    </div>
    <div class="form-group">
            <label for="">Password</label>
            <input type="text" name = "password" class = "form-control" value = "<?php echo $data['password']?> " >
    </div>
    <select name="class" id="" class="form-control">
            <?php foreach ($class as $key => $class) { ?>

                <?php if ($class['id'] ==  $data['class_id']) { ?>
                         <option selected value="$class['id']"><?php echo $class['class_name'] ?></option>
                 <?php } ?>​​​​
                        <option <?php if ($class['id'] ==  $data['class_id']) { ?>​​​​​​​​​​​​​ hidden <?php } ?> value="$class['id']"><?php echo $class['class_name'] ?></option>
                <?php } ?>

     </select>
    <button type = "submit" name ="update" class = "btn btn-primary btn-block">Add new</button>
    <?php }?>
    </form>
</div>