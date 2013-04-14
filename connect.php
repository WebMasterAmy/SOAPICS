<?php 
//define error variable
$err = 0;
//connect to database
if ($err == 0) {
	$dbCon = @mysql_connect("localhost", "amymccre_GB", "tantrix");
	if ($dbCon === FALSE) {
		//display connecting errors
		echo "<p>Unable to connect to the database server. " . "Error code " . mysql_errno() . ": " . mysql_error() . "</p>\n";
		++$err;
	}
	else {
		//select database
		$DB = "amymccre_SOAPICS";
		$result = @mysql_select_db($DB, $dbCon);
		//display connect erors
		if ($result === FALSE) {
			echo "<p>Unable to select the database. " . "Error code " . mysql_errno($dbCon) . ": " . mysql_error($dbCon) . "</p>\n";
			++$err;
		}
		// only needed for testing 
		//else {
			//show succcess if connected.
			//echo "<p>Successfully connected to database " . $DB ."</p>\n";
		//}
	}
}
?>