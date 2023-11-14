<?php
echo "welcome to assosiative arrays in php";
$arr =array('Hello','Welcome','To PHP');
echo "<br>";
echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>";
echo $arr[2];
echo "<br>";
$favCol=array('Ganesh'=>'Red','Haresh'=>'Blue','Rahul'=>'Green');
foreach ($favCol as $key=>$value) {
echo"<br>Favourite color of $key is $value";
}
echo $favCol['Ganesh'];
echo "<br>";
echo $favCol['Haresh'];
echo "<br>";
?>