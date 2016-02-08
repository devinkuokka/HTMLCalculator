<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Caluclator</title>
    </head>
    <body>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
			First Number: <input type="text" name="num1"><br>
			<br>
        	<input type="radio" name="sign" value="Add"> +<br>
            <input type="radio" name="sign" value="Subtract"> -<br>
			<input type="radio" name="sign" value="Multiply"> *<br>
            <input type="radio" name="sign" value="Divide"> /<br>
			<br>
			Second Number: <input type="text" name="num2"> <br>
			<br>
        	<input type="submit" value="Calculate"> <br>
			<br>
			<br>
			</form>
			<?php
				if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['sign']) &&
				   is_numeric($_GET['num1']) && is_numeric($_GET['num1'])){
					$num1 = $_GET['num1'];
					$num2 = $_GET['num2'];
					$sign = $_GET['sign'];
					$result  = "";
					if ($sign == "Add") {
						$result = $num1+$num2;
					} else if ($sign == "Subtract") {
						$result = $num1-$num2;
					} else if ($sign == "Multiply") {
						$result = $num1*$num2;
					} else if ($sign == "Divide") {
						if($num2 == 0) {
							echo "Error! Cannot divide by 0";
						} else {
							$result = $num1/$num2;
						}
					}
					echo "Result: ";
				} else {
					$result = "Please enter valid number and operation <br> Fractions are not allowed. Please use decimals.";
				}
				echo $result;
		?>	
    </body>
</html>
