<h1 class = "text-center">Student Information</h1>
<div class="container mt-5">
<a href="index.php?action=add" class = "btn btn-primary btn-sm">Add student</a>
<a href="index.php?action=view_class" class = "btn btn-info btn-sm">View class</a>
    <table class="table table-bordered mt-3">
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Class_id</th>
            <th>Password</th>
            <th>Email</th>
        </tr>
        <?php 
            $id = 1;
            if(isset($data['view'])){
                foreach ($data['view'] as $student) { 
        ?>
            <tr>
                <td> <?php echo $student['id']?></td>
                <td> <?php echo $student['FirstName']?></td>
                <td> <?php echo $student['LastName']?></td>
                <td>    </td>
                <td> <?php echo $student['pwd']?></td>
                <td> <?php echo $student['email']?></td>
            </tr>
            <?php 
            }
        }
        $id++;
    ?>
    </table>

</div>