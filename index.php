<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md. Habibullah</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="add">
        <form method="GET">
            <input required type="text" name="num1" placeholder="Number 01">
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
</body>

</html>