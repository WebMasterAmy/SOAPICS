<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Southern Oregon Chapter APICS Events</title>
<meta name="keywords" content="APICS, Management, Southern Oregon," />
<meta name="description" content="The Southern Oregon Chapter has been active since the 80's and has been dedicating to providing opportunities for Operations Management and Supply Chain professionals for Southern Oregon and Northern California. These opportunities come in the form of networking events, online discussion (via Facebook and Linkedin) and professional classes and certification (CPIM and CSCP). Our focus is to empower motivated professionals to attain the skills to be organizational leaders." />
<meta name="author" content="Amy McCrery of Purple Dragon Web Development" />
<link rel="icon" href="Images/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon"/>
<link href="styles/second.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>
</head>

<body>
<div id="wrapper">
<div id="header">
<div id="logo">
  <h1><a href="index.php"><img src="Images/logocropped.png" width="134" height="69" alt="APICS Logo" /></a> Southern Oregon Chapter</h1>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="LinkedIn">Find us on <a href="http://www.linkedin.com/groups?home=&amp;gid=2316552&amp;trk=anet_ug_hm" target="new"><img src="Images/linkedin.png" width="28" height="28" alt="LinkedIn Icon" /></a></div>
<div class="fb-like" data-href="http://www.soapics.org" data-send="false" data-layout="button_count" data-width="300" data-show-faces="false" data-font="lucida grande"></div>
</div>
<?php 
//Import navigation links
require_once('nav.php'); ?>
<div id="MainContent">
<div id="Event">
<?php 
// connect to the database
require_once('connect.php'); 

//retrieve events
$TableName = "events";
$Events = array();
$SQLstring = "SELECT title, date, " . " location, membercost, nonmembercost, studentcost, venue, description " . " FROM $TableName ORDER BY date";
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
		echo "<h3>" . htmlentities($event['title']) . "</h3>\n";
?>
<div id="SignUpBtn" onclick="MM_showHideLayers('SignUpForm','','show')">Sign Up</div><br />
<?php
		echo "<p>" . 'Date: ' . htmlentities(date($dateFormat, $event['date'])) . "</p>\n";
		echo "<p>" . 'Time: ' . htmlentities(date($timeFormat, $event['date'])) . "</p>\n";
		echo "<p>" . 'Location: ' . htmlentities($event['location']) . "</p>\n";
		echo "<p>" . 'Member Cost: ' . '$' . htmlentities($event['membercost']) . "</p>\n";
		echo "<p>" . 'Non Member Cost: ' . '$' . htmlentities($event['nonmembercost']) . "</p>\n";
		echo "<p>" . 'Student Cost: ' . '$' . htmlentities($event['studentcost']) . "</p>\n";
		echo "<p>" . 'Maximum Spots Available: ' . htmlentities($event['venue']) . "</p>\n";
		echo "<p>" . 'Details: ' . htmlentities($event['description']) . "</p>\n";
	}
}
?>
</div>

<div id="SignUpForm">

//close the database
mysql_close($dbCon);
?>
</div>



</div>
  <div id="Join">
    <h3><a href="http://www.apics.org/membership-application">Join Today</a></h3>
    <p> <a href="http://www.apics.org/membership-application">Join APICS</a> today to profit from our vast educational offerings as well as the knowledge and experiences of thousands of other operations management professionals worldwide. </p>
  </div>

<?php include('footer.php'); ?>
</div>
</body>
</html>

