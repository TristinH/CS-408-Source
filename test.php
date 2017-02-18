<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="test.php" method="post">
		<div>
			<h1>Test if a number is prime</h1>
			<input type="text" name="prime">
			<input type="submit">
		</div>
	</form>
	<div>
		<?php 
		function isPrime($number) {
			//check if the number is 1
			if ($number == 1)
				return false;
			//check if the number is 2
			if ($number == 2)
				return true;

			$test = 2;
			$primeFound = true;
			// test all choices until half the number
			while ($test < ($number / 2)) {
				if ($number % $test == 0) {
					$primeFound = false;
					break;
				}
				$test++;
			}
			return $primeFound;
		}

		if (isset($_POST["prime"])) {
			$check = $_POST["prime"];
			if (is_numeric($check)) 
				$check = intval($check);

			if (is_integer($check)) {
				if (isPrime($check)) {
					echo $check;
					echo " is prime";
				} else {
					echo $check;
					echo " is not prime";
				}
			} else {
				echo "You must enter a number";
			}
		}
		?>
	</div>
</body>
</html>