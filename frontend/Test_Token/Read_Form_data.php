<!-- Index.php -->
<?php
session_start();
IF(isset($_POST['submit']))
{
 $_SESSION['name']=$_POST['name'];
 $_SESSION['rno']=$_POST['rno'];
 $_SESSION['class']=$_POST['class'];
 $_SESSION['email']=$_POST['email'];
 header('Location:view.php');
}
?>
<HTML>
<form action="" method="POST">
 <center>
 <h2>Student Details</h2>
 <label>Name:</label>
 <input type="text" id="name" name="name"><br><br>
 <label >Roll NO:</label>
 <input type="text" id="rno" name="rno"><br><br>
 <label >Class:</label>
 <input type="radio" id="class" name="class" value="MCA">MCA
 <input type="radio" id="class" name="class" value="MSC">MSC
 <input type="radio" id="class" name="class" value="MA">MA<br><br>
 <label>Email:</label> 
14
 <input type="email" id="email" name="email" ><br><br>
 <input type="submit" id="submit" name="submit" value="Submit">
 </center>
</form>

<!-- View.php -->

<?php
session_start();
echo"Name:".$_SESSION['name'];
echo "<br>";
echo"Roll No:".$_SESSION['rno'];
echo "<br>";
echo"Class:".$_SESSION['class'];
echo "<br>";
echo"Email:".$_SESSION['email'];
echo "<br>";
?>