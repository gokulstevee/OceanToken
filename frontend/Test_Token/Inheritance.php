<?php
class Person {
 protected $name;
 protected $age;
 public function __construct($name, $age) {
 $this->name = $name;
 $this->age = $age;
 }
 public function displayInfo() {
 echo "Name: " . $this->name . "<br>";
 echo "Age: " . $this->age . "<br>";
 }
}
class Student extends Person {
 private $studentID;
 public function __construct($name, $age, $studentID) {
 parent::__construct($name, $age);
 $this->studentID = $studentID;
 }
 public function displayStudentInfo() {
 parent::displayInfo();
 echo "Student ID: " . $this->studentID . "<br>";
 }
}
$student1 = new Student("GANESH", 21, "22MCAC11");
$student1->displayStudentInfo();
?>