<?php
	//reports errors
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	//css styling for the php code
	echo "<style>";
	echo "#welcome{text-align: center; font-size: 16pt; font: Georgia;}";
	echo "table{padding-top: 30px; margin-left: auto; margin-right: auto; text-align: center; font-size: 16pt;}";
	echo "th{background-color: lightgreen; text-align: center}";
	echo "td{background-color: lightblue;}";
	echo "</style>";

	//form variables
	$username = $_POST["username"];
    	$password = $_POST["password"];
  	$chicken = $_POST["chicken"];
  	$duck = $_POST["duck"];
 	$goose = $_POST["goose"];
	$shipping = $_POST["shipping"];

	//all the php code
	echo "<div id='welcome'>";
		echo "<h2><b>Welcome $username!</b></h2>";
		echo "Your password is: $password";
	echo "</div>";

	echo "<div>";
		echo "<table>";
			echo "<tr>";
				echo "<th></th>";
				echo "<th>Quantity</th>";
				echo "<th>Cost Per Item</th>";
				echo "<th>Sub Total</th>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Fried chicken</th>";
				echo "<td>$chicken</td>";
				echo "<td>$5</td>";
				$value1 = 5*$chicken;
				echo "<td>$$value1</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Duck Confit</th>";
				echo "<td>$duck</td>";
				echo "<td>$8</td>";
				$value2 = 8*$duck;
				echo "<td>$$value2</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>BBQ Goose</th>";
				echo "<td>$goose</td>";
				echo "<td>$7</td>";
				$value3 = 7*$goose;
				echo "<td>$$value3</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Shipping</th>";
				echo "<td colspan='2'>$shipping</td>";
				if ($shipping == "Free 7 Day")
				{
					$value4 = 0;
				}
				else if ($shipping == "$50 Over Night")
				{
					$value4 = 50;
				}
				else if ($shipping == "$5 Three Day")
				{
					$value4 = 5;
				}
				echo "<td>$$value4</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th colspan='3'>Total Cost</th>";
				$total = $value1 + $value2 + $value3 + $value4;
				echo "<th>$$total</th>";
			echo "</tr>";
		echo "</table>";
	echo "</div>";
?>