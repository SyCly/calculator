<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Calculator</title>
</head>
	<body>
		<form method="post" attribute="post" action="calc.php">
			<p>First Value:
			<input type="text" id="first" name="first">

			Second Value:
			<input type="text" id="second" name="second">
			</p>

			<input type="radio" name="group1" value="add" checked="true">+
			<input type="radio" name="group1" value="subtract">-
			<input type="radio" name="group1" value="times">x
			<input type="radio" name="group1" value="divide">/

			<button type="submit" name="answer" id="answer" value="answer">Calculate</button>
		</form>
		<?php
			if(!is_numeric($_POST['first']) or $_POST['first'] == '' or !is_numeric($_POST['second']) or $_POST['second'] == '') {
				echo 'Please enter two valid numbers.';
			}
			else {
				$num1 = $_POST['first'];
				$num2 = $_POST['second'];
				if($_POST['group1'] == 'add'){
					echo $num1.' plus '.$num2.' is '.($num1 + $num2).'.';
				}
				if($_POST['group1'] == 'subtract'){
					echo $num1.' minus '.$num2.' is '.($num1 - $num2).'.';
				}
				if($_POST['group1'] == 'times'){
					echo $num1.' times '.$num2.' is '.($num1 * $num2).'.';
				}
				if($_POST['group1'] == 'divide'){
					echo $num1.' divided by '.$num2.' is '.($num1 / $num2).'.';
				}
			}
		?>
	</body>
</html>