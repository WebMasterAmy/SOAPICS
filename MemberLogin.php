<?php
session_start();
// change echo command to $Body
$Body = "";
//connect to database
require_once('connect.php');
 
$TableName = "members";
if ($err == 0) {
		$pass = $_POST['password'];
		$pass = stripslashes($pass);
		$pass = md5($pass);
		$email = $_POST['email'];
		$email = stripslashes($email);
		$SQLstring = ("SELECT * FROM " . $TableName . " where email='" . $email . "'" . " and password_md5='" . $pass . "'");
		$QueryResult = @mysql_query($SQLstring, $dbCon);
	if (mysql_num_rows($QueryResult)==0) {
		$Body .="<p>The password for this user is incorrect.</p>\n";
		++$err;
	}
	else {
		$Row = mysql_fetch_assoc($QueryResult);
		$Username = $Row['first'] . " " . $Row['last'];
		$Body .="<p>Welcome back, $Username!</p>\n";
	}
}
if($err == 0){
	$go_to_address="http://purpledragonwebdevelopment.com/TestingPlace/APICS/AddEventForm.php";
	header('Location:'.$go_to_address);
		

	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Member Login</title>
</head>
<body>
<?php 
echo $Body;
?>
</body>
</html>