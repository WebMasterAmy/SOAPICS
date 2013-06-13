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
$memcost = "";
$nonmemcost = "";
$stucost = "";
$venue = "";
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
		//for testing the time
		if($date = strtotime($date)){	// successfully converted to timestamp
			$Body .= "<p>The unix timestamp for the event is: " . $date . ".</p>\n";
		}else{
			$Body .= "<p>There was a problem encoding the Date Time of your event. Please make sure you use the DateTime picker.</p>\n";
			++$err;
		}
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
//validate cost is numeric and a currency pattern
if(empty($_POST['MemberCost'])){
		++$err;
		$Body .= "<p>You need to enter a cost for the event, if there is no cost, enter 0.</p>\n";
		$memcost = "";
	}else{
		$data = stripslashes($_POST['MemberCost']);
		$pattern = "/^[0-9]+(?:\.[0-9]{0,2})?$/"; //does not allow commas
		if (!preg_match($pattern, $data)) {
			$Body .="<p>You need to enter a numeric value for the cost</p>\n";
			++$err;
			$memcost = "";
		}
		else {
			$memcost = $data;
		}
	}
	if(empty($_POST['NonMemberCost'])){
		++$err;
		$Body .= "<p>You need to enter a cost for the event, if there is no cost, enter 0.</p>\n";
		$nonmemcost = "";
	}else{
		$data = stripslashes($_POST['NonMemberCost']);
		$pattern = "/^[0-9]+(?:\.[0-9]{0,2})?$/"; //does not allow commas
		if (!preg_match($pattern, $data)) {
			$Body .="<p>You need to enter a numeric value for the cost</p>\n";
			++$err;
			$nonmemcost = "";
		}
		else {
			$nonmemcost = $data;
		}
	}
	if(empty($_POST['StudentCost'])){
		++$err;
		$Body .= "<p>You need to enter a cost for the event, if there is no cost, enter 0.</p>\n";
		$stucost = "";
	}else{
		$data = stripslashes($_POST['StudentCost']);
		$pattern = "/^[0-9]+(?:\.[0-9]{0,2})?$/"; //does not allow commas
		if (!preg_match($pattern, $data)) {
			$Body .="<p>You need to enter a numeric value for the student cost</p>\n";
			++$err;
			$stucost = "";
		}
		else {
			$stucost = $data;
		}
	}
if(empty($_POST['Venue'])){
		++$err;
		$Body .= "<p>You need to add a max number of spots for the event.</p>\n";
		$venue = "";
	}else{
		$venue = stripslashes($_POST['Venue']);
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
	$SQLstring = "INSERT INTO $TableName " . " (title, date, location, membercost, nonmembercost, studentcost, venue, description) " . " VALUES( '$title', '$date', '$loc', '$memcost', '$nonmemcost','$stucost', '$venue', '$desc')";
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