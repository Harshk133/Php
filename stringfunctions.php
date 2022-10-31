<?php
// String Functions in PHP.
$name = "Harsh is a good boy";
echo $name;
echo "<br>";

echo "The Lenght of myString is " . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "good");
echo "<br>";
echo str_replace("Harsh", "Kale", $name);
echo str_repeat($name, 2);
echo "<br>";
echo "<pre>";
echo rtrim("    This is my Work!      ");
echo "<br>";
echo ltrim("    This is my Work!      ");
echo "</pre>";

?>