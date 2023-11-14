<?php
function add($x,$y)
{
 $sum=$x+$y;
 echo "Sum = $sum <br><br><br>";
}
function sub($x,$y)
{
 $sub=$x-$y;
 echo "Subtraction using Function with return Value <br><br>";
 return $sub;
}
function mul(&$x,$y)
{
 $x=$x*$y;
 echo "Multiplication using Call by reference <br><br>";
}
function div($dividend, $divisor){
 echo "<b>Division using return array function</b> <br><br>";
 $quotient = intdiv($dividend, $divisor);
 $reminder = $dividend % $divisor;
 $array = array($quotient, $reminder);
 return $array;
}
if(isset($_POST['add']))
{
 add($_POST['first'],$_POST['second']);
} 
if(isset($_POST['sub']))
{
 $ans=sub($_POST['first'],$_POST['second']);
 echo "Diff = $ans <br><br><br>";
}
if(isset($_POST['mul']))
{
 $ans = $_POST['first'];
 mul($ans,$_POST['second']);
 echo "Multiplication = $ans <br><br><br>";
}
if(isset($_POST['div']))
{
 list($quotient, $reminder) = div($_POST['first'],$_POST['second']);
 echo "<br> Division: <br>";
 echo "<br> Quotient: " . $quotient;
 echo "<br> Reminder: " . $reminder. "<br><br><br>";
}
?>
<form method="post">
 Enter first number: <input type="number" name="first" required /><br><br>
 Enter second number: <input type="number" name="second" required /><br><br><br>
 <input type="submit" name="add" value="ADDITION"/>
 <input type="submit" name="sub" value="SUBTRACTION"/>
 <input type="submit" name="mul" value="MULTIPLICATION"/>
 <input type="submit" name="div" value="DIVISION"/> 
</form>