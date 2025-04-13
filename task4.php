<?php
echo "Number Functions<br>";
echo "<br>";
//initializing a number and performing ceiling function
$num1=443.3432;
echo "ceiling value of ".$num1."is =".ceil($num1)."<br>";
//initializing a number and performing floor function
$num2=7543.829;
echo "floor value of ".$num2."is =".floor($num2)."<br>";
//generating random number between 500to 5000 using rand function
$num3=rand(500,5000);
echo "Random number between 500 to 5000 is =".$num3;
?>
