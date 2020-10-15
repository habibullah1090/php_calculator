<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Md. Habibullah || Calculator</title>
	<style>
		.sign,.add{
			margin-top: 2rem;
			background-color: #f9f9f9;
			padding: 1rem 3rem;
			border: 1px solid #f5ecec;
		}
	</style>
</head>
<body>
<div class="add">
	<form method="GET" >
		<input required type="text" name="num1" placeholder="Number 01" > 
		<select name="operator" id="">
			<option value="0">None</option>
			<option value="+">Add</option>
			<option value="-">Substract</option>
			<option value="*">Multiply</option>
			<option value="/">Devide</option>
		</select>
		<input required type="text" name="num2" min="0.01" placeholder="Number 02">
		<input type="submit" value="Result">
	</form>
	<?php
	if ( isset($_GET["num1"])) {
		$num1 = $_GET["num1"];
		$num2 = $_GET["num2"];
		$result = "Try again";
		
		switch ($_GET["operator"]) {
			case '+':
				$result = $num1+$num2;
				break;
			case '-':
				$result = $num1-$num2;
				break;
			case '*':
				$result = $num1*$num2;
				break;
			case '/':
				$result = $num1/$num2;
				break;
			case '0':
				echo '<h1>Select any operator from the options.</h1>';
				break;
			default:
				echo '<h1>Hello hacker.</h1>';
				break;
		}


	
		if ($result == "Try again") {
			echo "<h1>Sorry, $result </h1>";
		}elseif (is_nan($result)) {
			echo "<h1>Sorry, The result is not a number.</h1>";
		}
		else{
			echo "<h1>The result is : $result </h1>";
		}
	}
	?>
</div>

	<!-- <form action="" method="POST" class="sign">
		<label for="inp"></label>
		<select name="op" id="">
			<option value="0">Select operator</option>
			<option value="sin">sin()</option>
			<option value="cos">cos()</option>
			<option value="tan">tan()</option>
			 <option value="cot">cot()</option>
			<option value="sec">sec()</option>
			<option value="cosec">cosec()</option> 
		</select>
		<input type="text" placeholder="Enter the angle" name="angle">
		<input type="submit" name="" value="Result">
	</form> -->


	 <?php 
	// if (isset($_POST["angle"])) {
	// 	$angle = $_POST["angle"];
	// 	$op = $_POST["op"];
		
	// 	if ($op == "0") {
	// 		$result2 = "Try again";
	// 	}else{
	// 		$result2 = $op($angle);
	// 	}

	// 	echo $result2."<br>";
	// 	echo $op."(".$angle.")";
	// }


	?>
	
</body>
</html>