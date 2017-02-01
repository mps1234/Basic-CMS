<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php include('includes/header.php'); ?>
		<table id="structure">
			<tr>
				<td id="navigation">
					<ul class="subjects">
				<?php

				//Perform DB query
				$result = mysqli_query($connection,"SELECT * FROM subjects");

				//Use Returned Data
				while($row = mysqli_fetch_array($result))
					{
						echo "<li>{$row['menu_name']}</li>";
						$result = mysqli_query($connection,"SELECT * FROM pages");
						echo "<ul class=\"pages\">";
						while($row = mysqli_fetch_array($result))
							{
						echo "<li>{$row['menu_name']}</li>";
							}
						echo "</ul>";
					}
				?>
					</ul>


				&nbsp;</td>
				<td id="page">
					<h2>Content Area</h2>
					 
				</td>
			</tr>
		</table>
<?php require('includes/footer.php'); ?> 