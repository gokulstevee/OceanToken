<?php
class StudentLogger {
 // Static property to store student information
 private static $log = [];
 // Static method to log student information
 public static function logStudent($name, $age, $major) {
 // Create a formatted string and add it to the log
 self::$log[] = "Name: $name, Age: $age, Major: $major";
 }
 // Static method to get all logged student information
 public static function getLog() {
 return self::$log;
 }
}
// Log student information using the StudentLogger class
StudentLogger::logStudent("Jeevan", 21, "Computer Science");
StudentLogger::logStudent("Kavin", 22, "Mathematics");
StudentLogger::logStudent("Balaji", 21, "IT");
// Get and display all logged student information
$loggedStudents = StudentLogger::getLog();
foreach ($loggedStudents as $studentInfo) {
 echo $studentInfo . "<br>";
}
?>