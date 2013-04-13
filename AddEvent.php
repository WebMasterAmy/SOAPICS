<?php
// change echo command to $Body
$Body = "";
//connect to database
require_once('connect.php');
// add variables for all form fields and set error count to 0
$err = 0;
$title = "";
$date = "";
$time = "";
$loc = "";
$cost = "";
$desc = "";

//validate no empty fields
if(empty($_POST['title'])){
		++$err;
		$Body .= "<p>You need to enter a title for the event.</p>\n";
		$title = "";
	}else{
		$title = stripslashes($_POST['title']);
	}
if(empty($_POST['date'])){
		++$err;
		$Body .= "<p>You need to enter a date for the event.</p>\n";
		$date = "";
	}else{
		$date = stripslashes($_POST['date']);
	}
// time slot not used with date/time picker
//	if(empty($_POST['time'])){
//		++$err;
//		$Body .= "<p>You need to enter a time for the event</p>\n";
//		$time = "";
//	}else{
//		$time = stripslashes($_POST['time']);
//}
if(empty($_POST['location'])){
		++$err;
		$Body .= "<p>You need to enter a location for the event</p>\n";
		$loc = "";
	}else{
		$loc = stripslashes($_POST['location']);
	}
if(empty($_POST['cost'])){
		++$err;
		$Body .= "<p>You need to enter a cost for the event, if there is no cost, enter 0.</p>\n";
		$cost = "";
	}else{
		$cost = stripslashes($_POST['cost']);
	}
if(empty($_POST['description'])){
		++$err;
		$Body .= "<p>You need to add a description for the event.</p>\n";
		$desc = "";
	}else{
		$desc = stripslashes($_POST['description']);
	}
// Save to database
if ($err == 0) {
	$TableName = "events";
	$SQLstring = "INSERT INTO $TableName " . " (title, date, location, cost, description) " . " VALUES( '$title', '$date', '$loc', '$cost', '$desc')";
	$QueryResult = @mysql_query($SQLstring, $dbCon);
	if ($QueryResult == FALSE) {
		$Body .= "<p>Unable to create event. Error code " . mysql_errno($dbCon) . ": " . mysql_error($dbCon) . "</p>\n";
		++$err;
	}
	else {
		$Body .= "<p>Event created.</p>\n";
	}
	//close the Database connection
	mysql_close($dbCon);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Event</title>
</head>
<body>
<?php 
echo $Body;
?>
</body>
</html>