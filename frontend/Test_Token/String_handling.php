<?php
$name="Ganesh is Naughty Boy!";
echo $name;
echo "<br>";
echo "The length of"." my string is ".strlen($name);
echo"<br>";
echo str_word_count($name);
echo"<br>";
echo strrev($name);
echo"<br>";
echo strpos($name,"Ganesh");
echo"<br>";
echo str_replace("Ganesh","Kumar",$name);
echo"<br>";
echo str_repeat($name,1);
echo"<br>";
echo rtrim("<pre> This is PHP Program ");
echo "</pre>";
?>