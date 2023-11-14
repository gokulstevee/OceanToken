<?php
class shape {
 function __call($name_of_function, $arguments) {
 if($name_of_function == 'area') {
 switch (count($arguments)) {
 case 1:
echo "AREA OF SHAPES : <br />";
echo "<br>";
echo "AREA OF CIRCLE <br />";
 return 3.14 * $arguments[0];
 case 2:
echo "<br />AREA OF RECTANGLE <br />";
 return $arguments[0]*$arguments[1];
//area is triangle;
case 3:
echo "<br />AREA OF TRIANGLE <br />";
 return $arguments[0]*$arguments[1]*$arguments[2];
 }
 }
 }
}
$s = new Shape;
echo($s->area(2));
echo "<br>";
echo ($s->area(4, 2));
echo "<br>";
echo ($s->area(4, 4, 1));
echo "<br>";
echo "<br>";
?>

<?php
class Car {
public $name;
public $color;
public function _construct($name,$color)
{
$this->name=$name;
$this->color=$color;
}
public function intro()
{
echo"The car is {$this->name} and the color is {$this->color}.";
}
}
class Volkswagan extends Car
{
public $weight;
public function __construct($name,$color,$weight)
{
$this->name=$name;
$this->color=$color;
$this->weight=$weight;
}
public function intro()
{
echo"The car is {$this->name},the color is {$this->color},and the weight is {$this->weight} gram.";
}
}
$volkswagan=new Volkswagan("Volkswagan","red",200);
$volkswagan->intro();
?>