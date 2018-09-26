
<?php

	$uname = $_POST['username'];
	$uage = $_POST['age'];

?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Lesson 1 Processing</title>
		<meta charset="utf-8">
	</head>
	
	<body>

		<?php

			// echo "<pre>";
			// print_r($_POST);
			// echo "</pre>";

		?>

		<h1>Hello <?php echo "$uname"; ?></h1>
		
		<p>
			In 10 years, you will be
			<?php $x = 10 * $uage; 
			echo " $x";
			?> years old.
		</p>

	</body>

</html>