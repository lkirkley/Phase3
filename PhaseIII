//Figure 1 Login Screen

<html>
<title>Login</title>
<center>
<font color = "#FFE333">
<br/><br/>
<?php
session_start();
error_reporting(E_ALL); ini_set("display_errors", "1");
$username= $_POST['username'];
$password = $_POST['password'];
$query = "insert into  user values ('$username', '$password')";
$result = mysqli_query($link, $query);
mysqli_select_db($link, ‘Login') or ($link, ‘Register’);
if (!$link) {die('SQL error: ' . mysqli_error($link));}
mysqli_close($link);
print "<html><body><center>";
mysqli_select_db($link, ‘Create') or die ('Could not select database');
?>



//Figure 2 New user information
<?php
$username= $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpass = $_POST['confirmpass'];
$managerpass = $_POST['managerpass'];
$query = "insert into  user values ('$username', '$email', ‘$password’, ‘$confirmpass’, ‘$managerpass’)";
$result = mysqli_query($link, $query);
if (!$result) {die('SQL error: ' . mysqli_error($link));}
mysqli_close($link);
print "<html><body><center>";
?>

//Figure 3 Now Playing

<?php
session_start();

$username= $_POST['username'];
?>
<html>
<head>
<title>Now Playing</title>
</head>
<font color = "FFE333">

mysql_connect($host,$username,$password) or die( "Unable to connect");;
mysql_select_db($database) or die( "Unable to select database");
$sql_query = "Select title FROM Movie";
$result = mysql_query ($sql_query) or die(mysql_error()); 
$num = mysql_numrows($result); 
mysql_close();
