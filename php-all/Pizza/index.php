<?php
// to use database
	 include_once "config/db_connect.php";
 	 include_once "templates/header.php";
?>
<?php
//write query for all pizzas
	$query = "SELECT title,ingredients,id FROM pizzas ORDER BY created_at";
	//get the result set(set of rows)
	$result = mysqli_query($connect,$query);//get data from database
	//fetch the resulting rows as an array(convert to array association)
	$pizzas = mysqli_fetch_all($result,MYSQLI_ASSOC);
	//var_dump($pizza);
?>
<!DOCTYPE html>
<html>
	<h4 class="center grey-text">Pizzas!</h4>
	<div class="container">
		<div class="row">
		<!-- $pizzas is array -->
			<?php foreach($pizzas as $pizza){?>
				<div class="col s6 m4">
					<div class="card z-depth-0">
						<img src="img/pizza.svg"class="pizza">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza["title"]); ?></h6>
							<!--explode use to  cut , -->
							<ul class="grey-text">
							<!-- loop to display and cut , -->
								<?php foreach(explode(',',$pizza['ingredients']) as $ing): ?>
								<li><?php echo htmlspecialchars($ing);?></li>
								<?php endforeach?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php  ?>">more info</a>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>
<?php
include_once "templates/footer.php";
?>


</html>