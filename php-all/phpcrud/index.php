<?php 
include_once "layout/header.php";
include_once "db_connect/db.php";
?>
<div class="container mt-5">
    <table class ="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Province</th>
            <th>Action</th>
        </tr>
        <?php 
        $sql = "SELECT * FROM tbl_student";
        $query = mysqli_query($connect,$sql);
            foreach ($query as $data) {
        ?>
            <tr>
                <td><?php echo $data['id']?></td>
                <td><?php echo $data['name']?></td>
                <td><?php echo $data['age']?></td>
                <td><?php echo $data['province']?></td>
                <td><a href="action/delete.php?id=<?php echo $data['id']?>" >Delete</a></td>
                <td><a href="">Edit</a></td>
            </tr>
        <?php }?>
    </table>
</div>
<?php include_once "layout/footer.php"?>