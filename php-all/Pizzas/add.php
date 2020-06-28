<?php 
	include_once "templates/header.php";
	include_once "config/db_connect.php";
	$errors = array('email'=> '','title'=>'','ingredients'=>'');
	$title = "";
	$email = "";
	$ingredient = "";
	if(isset($_POST["submit"])){	
		$email = $_POST["email"];
		$title = $_POST["title"];
		$ingredient = $_POST['ingredients'];
		//email
		if(empty($email)){
			$errors['email'] = "An email cannot empty";
		}else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$errors['email']= "Email not valid formation";
			}
		}
		//title
		if(empty($title)){
			$errors['title'] = "Title cannot empty";
		}else{
			if(!preg_match("/^[a-zA-Z ]*$/",$title)){
				$errors['title'] = "text and space only";
			}
		}
	//ingredient
		if(empty($ingredient)){
			$errors['ingredients'] = "Ingredients cannot empty";
		}else{
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredient)){
				$errors['ingredients'] = "Ingredients must be comma sparated list";
			}
		}
		// if has on error can not add(escape sql chars)
		if(array_filter($errors)){
			echo "error";
		}else{
			//check prevent database
			$email = mysqli_real_escape_string($connect,$_POST['email']);
			$title = mysqli_real_escape_string($connect,$_POST['title']);
			$ingredient = mysqli_real_escape_string($connect,$_POST['ingredients']);
			//create sql
			$query = "INSERT INTO pizzas(title,ingredients,email) VALUES('$title','$ingredient','$email')";
			$result = mysqli_query($connect,$query);
			//save to db and check
			if($result){
				header('location:index.php');
			}else{
				echo "query error:". mysqli_error($connect);
			}
		}
		
	}
?>
<!DOCTYPE html>
<html>
	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action = "#" method = "post">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php ?>">
			<div class="red-text"><?php echo $errors['email']  ?></div>
			<label>Pizza Title</label>
			<input type="text" name="title" value="<?php ?>">
			<div class="red-text"><?php echo $errors['title']?></div>
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients" value="<?php ?>">
			<div class="red-text"><?php echo $errors['ingredients'] ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php
		include_once "templates/footer.php";
	?>

</html>
''