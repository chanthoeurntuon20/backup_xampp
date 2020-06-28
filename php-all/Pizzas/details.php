<?php 	
	include_once "templates/header.php";
	include_once "config/db_connect.php";
 ?>
<!DOCTYPE html>
<html>
<?php  
			if(isset($_POST['delete'])){
				 $id = mysqli_real_escape_string($connect,$_POST['id_to_delete']);
				//$id = $_POST['id_to_delete'];
				$query = "DELETE FROM pizzas WHERE id = '$id'";
				$result = mysqli_query($connect,$query);
				if($result){
					header('location:index.php');
				}else{
					echo "Cannot delete";
				}
				
			}
		?>
	<div class="container center grey-text">
		<?php 
			if(isset($_GET['id'])){
				// prevent hacker hak website 
				$id = mysqli_real_escape_string($connect,$_GET['id']);
				$query =  "SELECT * FROM pizzas WHERE id = $id" ;
				$result = mysqli_query($connect,$query);
				//convert to association
				$pizza = mysqli_fetch_assoc($result);
			}
		?>
			<h4><?php echo $pizza['title'] ?></h4>
			<p>Created by <?php echo $pizza['email'] ?></p>
			<h5>Ingredients:</h5>
			<p><?php echo $pizza['ingredients'] ?></p>
			<!-- DELETE FORM -->
			<form action="details.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']?>">
				<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
			</form>
			<h5>No such pizza exists.</h5>
		<?php 
			include_once "templates/footer.php";
		 ?>
	</div>

</html>