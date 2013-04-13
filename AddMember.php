<?php
session_start();
// change echo command to $Body
$Body = "";
//connect to database
require_once('connect.php');
// validate email address
$err = 0;
$email = "";
if (empty($_POST['email'])) {
	++$err;
	$Body .= "<p>You need to enter an e-mail address.</p>\n";
}
else {
	$email = stripslashes($_POST['email']);
	if (preg_match("/^[\w-]+(\.[\w-]+)*@" .
               "[\w-]+(\.[\w-]+)*(\.[a-zA-Z]{2,})$/i",
               $email) == 0) {
		++$err;
		$Body .= "<p>You need to enter a valid " . "e-mail address.</p>\n";
		$email = "";
	}
}
//check for password
	if(empty($_POST['password'])){
		++$err;
		$Body .= "<p>You need to enter a password.</p>\n";
		$pass = "";
	}else{
		$pass = stripslashes($_POST['password']);
	}
	if(empty($_POST['password2'])){
		++$err;
		$Body .= "<p>You need to confirm your password.</p>\n";
		$pass2 = "";
	}else{
		$pass2 = stripslashes($_POST['password2']);
	}
	if((!(empty($pass)))&&(!(empty($pass2)))){
		//check password length (need at least 6 characters)
		if(strlen($pass) < 6){
			++$err;
			$Body .= "<p>The password is too short.</p>\n";
			$pass = "";
			$pass2 = "";
		}
		//check to see if password1 and password 2 are the same
		if($pass <> $pass2){
			++$err;
			$Body .= "<p>The passwords do not match</p>\n";
			$pass = "";
			$pass2 = "";
		}
	}
//verify email address is not already in the members table
$TableName = "members";
if ($err == 0) {
	$SQLstring = ("SELECT * FROM " . $TableName . " where email='" . $email . "'");
	$QueryResult = @mysql_query($SQLstring, $dbCon);
	if ($QueryResult !== FALSE) {
		$Row = mysql_fetch_row($QueryResult);
		if ($Row[0]>0) {
			$Body .= "<p>The email address entered (" . htmlentities($email) . ") is already registered.</p>\n";
			++$err;
		}
	}
}
if ($err > 0) {
	$Body .= "<p>Please use your browser's BACK button to return" . " to the form and fix the erros indicated.</p>\n";
}
// Add new user
if ($err == 0) {
	$first = stripslashes($_POST['first']);
	$last = stripslashes($_POST['last']);
	$status = stripslashes($_POST['status']);
	$SQLstring = "INSERT INTO $TableName " . " (first, last, email, password_md5, status) " . " VALUES( '$first', '$last', '$email', " . " '" . md5($pass) . "', '$status')";
	$QueryResult = @mysql_query($SQLstring, $dbCon);
	if ($QueryResult == FALSE) {
		$Body .= "<p>Unable to add member " . " information. Error code " . mysql_errno($dbCon) . ": " . mysql_error($dbCon) . "</p>\n";
		++$err;
	}
	else {
          $_SESSION['memberID'] = mysql_insert_id($dbCon);
     }
	mysql_close($dbCon);
}
if ($err == 0) {
     $MemberName = $first . " " . $last;
     $Body .= "<p>Thank you, $MemberName. ";
     $Body .= "Your new Member ID is <strong>" .
          $_SESSION['memberID'] . "</strong>.</p>\n";
}


//if ($errors == 0) {
     //$Body .= "<p><a href='AvailableOpportunities.php?" .
       //        SID . "'>View Available Opportunities</a></p>\n";
//}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Member</title>
</head>
<body>
<?php 
echo $Body;
?>
</body>
</html>