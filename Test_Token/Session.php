<?php
session_start();
$_SESSION['username'] = 'Students';
echo "Welcome, " . $_SESSION['username'] . "!";
if(isset($_POST['logout'])) {
 session_destroy();
 header('Location: index.php');
 exit;
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Session Program</title>
</head>
<body>
 <form method="post">
 <input type="submit" name="logout" value="Logout">
 </form>
</body>
</html>