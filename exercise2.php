<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	$q1 = $_POST["q1"];
    	$q2 = $_POST["q2"];
    	$q3 = $_POST["q3"];
    	$q4 = $_POST["q4"];
    	$q5 = $_POST["q5"];
    
    	echo "Question 1: Which state has the southern most point of the US?";
	echo "<br>";
    	echo "      You answered: $q1";
	echo "<br>";
    	echo "      Correct answer: Florida";
	echo "<br>";
	echo "<br>";

    	echo "Question 2:Which country does not have border with North Korea?";
	echo "<br>";
    	echo "      You answered: $q2";
	echo "<br>";
    	echo "      Correct answer: Vietnam";
	echo "<br>";
	echo "<br>";

    	echo "Question 3: Which county is in Scotland?";
	echo "<br>";
    	echo "      You answered: $q3";
	echo "<br>";
    	echo "      Correct answer: Aberdeenshire";
	echo "<br>";
	echo "<br>";

    	echo "Question 4: Which State is known for origin of lobsters?";
	echo "<br>";
    	echo "      You answered: $q4";
	echo "<br>";
    	echo "      Correct answer: Maine";
	echo "<br>";
	echo "<br>";

    	echo "Question 5: Which Canadian Province is not the first to join the Union?";
	echo "<br>";
    	echo "      You answered: $q5";
	echo "<br>";
    	echo "      Correct answer: Manitoba";
	echo "<br>";
	echo "<br>";

	$num = 0;
	if ($q1 == "Florida")
	{
		$num++;		
	}
	if ($q2 == "Vietnam")
	{
		$num++;		
	}
	if ($q3 == "Aberdeenshire")
	{
		$num++;		
	}
	if ($q4 == "Maine")
	{
		$num++;		
	}
	if ($q5 == "Manitoba")
	{
		$num++;		
	}

	$percent = ($num/5)*100;

	echo "You got $num correct!";
	echo "<br>";
	echo "Which is a $percent%!"; 
?>