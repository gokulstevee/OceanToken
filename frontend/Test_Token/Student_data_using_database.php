<?php
$servername="localhost";
$username="root";
$db="student";
$link=mysqli_connect($servername,$username,"",$db);
$conn=mysqli_select_db($link,$db);
?>
<html>
<head> <title>Database Program</title></head>
<body>
<form name="form1" action="" method="post">
<center>
<h1>STUDENTS DETAILS</h1>
<table>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td> StudentName</td> <td> <input type="text" name="StudentName"></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td> StudentId</td> <td> <input type="text" name="StudentId"></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td> Department</td> <td> <input type="text" name="Department"></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td> Year</td> <td> <input type="text" name="Year"></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit1" value="INSERT">
<input type="submit" name="submit3" value="DISPLAY">
<input type="submit" name="submit2" value="DELETE">
</td>
</tr>
</table>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST["submit1"]))
{
mysqli_query($link,"insert into studentdetails
values('$_POST[StudentName]','$_POST[StudentId]','$_POST[Department]','$_POS
T[Year]')");
//echo" Record inserted successfully";

}
if(isset($_POST["submit2"]))
{
mysqli_query($link,"delete from studentdetails where
StudentId='$_POST[StudentId]'");
//echo" Record Deleted successfully";
}
if(isset($_POST["submit3"]))
{
$res=mysqli_query($link,"select * from studentdetails");
echo" <table border=1>";
echo"<tr>";
echo"<th>";echo"StudentName"; echo"</th>";
echo"<th>";echo"StudentId"; echo"</th>";
echo"<th>";echo"Department"; echo"</th>";
echo"<th>";echo"Year"; echo"</th>";
echo"</tr>";
while($row=mysqli_fetch_array($res))
{
echo"<center>";
echo"<tr>";
echo"<td>";echo$row["StudentName"]; echo"</td>";
echo"<td>";echo$row["StudentId"]; echo"</td>";
echo"<td>";echo$row["Department"]; echo"</td>";
echo"<td>";echo$row["Year"]; echo"</td>";
echo"</tr>";
echo"</center>";}
echo"</table>";
}
?>