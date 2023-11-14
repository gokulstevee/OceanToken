<?php
$filename = "example.txt";
if (file_exists($filename)) {
 $file = fopen($filename, "r");
 if ($file) {
 echo "File Contents:";
 while (($line = fgets($file)) !== false) {
 echo $line;
 }
 fclose($file);
 }
else {
 echo "Unable to open the file for reading.";
 }
}
else {
 echo "The file does not exist.";
}
$file = fopen($filename, "w");
if ($file) {
 $content = "Hello";
 echo "<br>";
 fwrite($file, $content);
 fclose($file);
 echo "File write operation completed.";
}
else {
 echo "Unable to open the file for writing.";
}
?>