<?php ?>

<!DOCTYPE html>
<html>

	<div class="container center grey-text">
		<?php  ?>
			<h4><?php ?></h4>
			<p>Created by <?php ?></p>
			<p><?php  ?></p>
			<h5>Ingredients:</h5>
			<p><?php  ?></p>

			<!-- DELETE FORM -->
			<form action="details.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php ?>">
				<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
			</form>

		<?php  ?>
			<h5>No such pizza exists.</h5>
		<?php  ?>
	</div>

</html>