<?php 
    include_once('header.php');
    include_once('connection/connect.php');
?>

<div class="container mt-5">
<a href="insert.php" class = "btn btn-info ">Add new</a>
<a href="class.php" class = "btn btn-warning">Class</a>
    <table class = "table table-bordered mt-2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Class</th>
            <th>Action</th>
     </tr>
<?php 
    $sql = "SELECT * FROM student";
    $query =mysqli_query($connect,$sql);
    $classed = mysqli_query($connect, "SELECT * FROM class");
    foreach($query as $data){
   $id = 1;
?>
        <tr>
            <td><?php echo $data['id']?></td>
            <td><?php echo $data['name']?></td>
            <td><?php echo $data['email']?></td>
            <td><?php echo $data['password']?></td>
            <td>
                 <?php foreach ($classed as $class) { ?>
                    <?php if($class['id'] ==$data['class_id'] ){ ?>
                        <?php echo $class['class_name'] ?>
                    <?php } ?>
                <?php } ?>
            </td>
            <td>
                <a href="process/update.php?id=<?php echo $data['id']?>" class = "btn btn-primary">Update</a>
                <a href="process/delete.php?id=<?php echo $data['id']?>" class = "btn btn-danger"onclick = "confirm('Are you sure to delete?')">Delete</a>
            </td>
        </tr>
    <?php 
    }
        
    ?>
    </table>
</div>
<?php include_once('footer.php')?>
 