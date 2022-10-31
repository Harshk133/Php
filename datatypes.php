<?php
$name = "harsh";
$income = 1000;

// Php Datatypes
// 1. String
// 2. Integer
// 3. Float
// 4. Boolean
// 5. Object 
// 6. Array 
// 7. Null 

// String
$name = "harsh";
$friend = "prathmesh";
echo "$name and $friend are both friends!";
echo '<br>';

// Integer
$income = 455;
$debts = -78;
echo $income;
echo '<br>';
echo $debts;
echo '<br>';

// Float
$income = 344.5;
$debts = 23.34;
echo $income;
echo '<br>';
echo $debts;
echo '<br>';

// boolean
$x = false;
$isFriend = true;
echo var_dump($x);
echo '<br>';
echo var_dump($isFriend);
echo '<br>';

// Objects - Instances of a classes!

// Array - Used to store multiple values in single variables.
$friends = array("Omanand", "Prathmesh", "Akshay", "Amay", "Kunal");
echo var_dump($friends);
echo $friends[0];
echo '<br>';
echo $friends[1];
echo '<br>';
echo $friends[2];
echo '<br>';
echo $friends[3];
echo '<br>';
echo $friends[4];
echo '<br>';
// echo $friends[4];
// echo '<br>'; Will Throw an error when there is end of array size.

// Null 
$name = null;
echo $name;
echo var_dump($name);
?>