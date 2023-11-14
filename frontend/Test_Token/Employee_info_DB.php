<?php
$servername="localhost";
$username="root";
$db="mca";
$link=mysqli_connect($servername,$username,"",$db);
$conn=mysqli_select_db($link,$db);
?>
<html>
<head> <title>Database Program</title></head>
<body>
<form name="form1" action="" method="post">
<center>
<h1> Employee Details </h1>
<table>
<tr>
<td> Name</td> <td> <input type="text" name="Name"></td>
</tr>
<tr>
<td> Emp_Id</td> <td> <input type="text" name="Emp_Id"></td>
</tr>
<tr>
<td> salary</td> <td> <input type="text" name="Salary"></td>
</tr>
<tr>
<td> Address</td> <td> <input type="text" name="Address"></td>
</tr>
<tr>
<td> Phone</td> <td> <input type="text" name="Phone"></td></tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit1" value="INSERT">
<input type="submit" value="Update" name="submit4">
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
mysqli_query($link,"insert into vivek
values('$_POST[Name]','$_POST[Emp_Id]','$_POST[Salary]','$_POST[Address]','$_POST[Phone]')");
//echo" Record inserted successfully";
}
if(isset($_POST["submit2"]))
{
    mysqli_query($link,"delete from vivek where Emp_Id='$_POST[Emp_Id]'");
//echo" Record Deleted successfully";
}
if (isset($_POST["submit4"])) {
$Name = $_POST["Name"];
$Salary = $_POST["Salary"];
$Address = $_POST["Address"];
$Phone = $_POST["Phone"];
$Emp_Id = $_POST["Emp_Id"];
// Construct the SQL UPDATE query
$query = "UPDATE vivek SET Name='$Name', Salary='$Salary', Address='$Address',
Phone='$Phone' WHERE Emp_Id='$Emp_Id'";
// Execute the SQL query
if (mysqli_query($link, $query)) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . mysqli_error($link);
}
}
if(isset($_POST["submit3"]))
{
$res=mysqli_query($link,"select * from vivek");
echo" <table border=1>";
echo"<tr>";
echo"<th>";echo"Name"; echo"</th>";
echo"<th>";echo"Emp_Id"; echo"</th>";
echo"<th>";echo"Salary"; echo"</th>";
echo"<th>";echo"Address"; echo"</th>";
echo"<th>";echo"Phone"; echo"</th>";
echo"</tr>";
while($row=mysqli_fetch_array($res))
{
echo"<center>";
echo"<tr>";
echo"<td>";echo$row["Name"]; echo"</td>";
echo"<td>";echo$row["Emp_Id"]; echo"</td>";
echo"<td>";echo$row["Salary"]; echo"</td>";
echo"<td>";echo$row["Address"]; echo"</td>";
echo"<td>";echo$row["Phone"]; echo"</td>";
echo"</tr>";
echo"</center>";}
echo"</table>";
}
?>