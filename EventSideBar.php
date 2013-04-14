<?php 
// for page side bar, only shows event title and date/time.
//retrieve events
$TableName = "events";
$Events = array();
$SQLstring = "SELECT title, date, " . " location, cost, description " . " FROM $TableName ORDER BY date";
$QueryResult = @mysql_query($SQLstring, $dbCon);
if (mysql_num_rows($QueryResult) > 0) {
	while (($Row = mysql_fetch_assoc($QueryResult)) !== FALSE)
		$Events[] = $Row;
		mysql_free_result($QueryResult);
}

// List the events
$dateFormat = 'D, M jS, Y'; // gives->Mon, Jan 1st, 2013
$timeFormat = 'g:i a'; // gives->1:23 am // 12hr no leading 0's
$NOW = time(); // current timestamp
foreach ($Events as $event) { if($event['date'] >= ($NOW - (60*60*12))) // started less than 12 hrs ago or in the future  
	if (!in_array($event['eventID'])) {
		echo "<h3>" . "<a href='Southern_Oregon_APICS_Events.php'>" . htmlentities($event['title']) . "</a>" . "</h3>\n"; //event title links to event page
		echo "<p>" . 'Date: ' . htmlentities(date($dateFormat, $event['date'])) . "</p>\n";
		echo "<hr />\n";
	}
}
//close the database
mysql_close($dbCon);
?>