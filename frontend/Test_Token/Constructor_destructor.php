<!-- Constructor: -->

 <!DOCTYPE html>
 <html>
 <body>
 <?php
 class Dept {
 public $name;
 public $dept;
 function __construct($name, $dept) {
 $this->name = $name;
 $this->dept = $dept;
 }
 function get_name() {
 return $this->name;
 }
 function get_dept() {
 return $this->dept;
 }
}
$class = new Dept("Department", "MCA");
echo $class->get_name();
echo "<br>";
echo $class->get_dept();
?>
</body>
</html>

<!-- Destructor: -->
<!DOCTYPE html>
<html>
<body>
<?php
class Stud {
 var $name;
 var $age;
 function __construct($name, $age) {
 $this->name = $name;
 $this->age = $age;
 }
 function _destruct(){
 echo "Student Name is {$this->name} and age is {$this->age}.";
 }
}
$student = new Stud("Srini", "21");
?>
</body>
</html>