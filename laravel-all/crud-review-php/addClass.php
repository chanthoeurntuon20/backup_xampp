<?php 
    include_once('header/header.php');
    include_once('connect.php');
?>
<div class="container mt-5">
    <h4 class="text-center">Add new class</h4>
    <form action="#" method="post">
        <input type="text" class="form-control" name="class" placeholder="class name"><br>
        <button type="submit" class="btn btn-success" name="submit">Add new class</button>
    </form>
</div>
<?php 
if(isset($_POST['submit'])){
    $class = $_POST['class'];
    echo $class;
    $sql = "INSERT INTO class(class_name)VALUES('$class')";
    $query = mysqli_query($connect,$sql);
    if( $class){
        header('location:index.php');
    }else {
        header('location:addClass.php');
    }
}
?>