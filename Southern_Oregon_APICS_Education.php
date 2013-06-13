<?php require_once('popup-contactform.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Education Southern Oregon Chapter APICS</title>
<meta name="keywords" content="APICS, Management, Southern Oregon," />
<meta name="description" content="The Southern Oregon Chapter has been active since the 80's and has been dedicating to providing opportunities for Operations Management and Supply Chain professionals for Southern Oregon and Northern California. These opportunities come in the form of networking events, online discussion (via Facebook and Linkedin) and professional classes and certification (CPIM and CSCP). Our focus is to empower motivated professionals to attain the skills to be organizational leaders." />
<meta name="author" content="Amy McCrery of Purple Dragon Web Development" />
<link rel="icon" href="Images/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon"/>
<link href="styles/second.css" rel="stylesheet" type="text/css" />
<link href="styles/popup-contact.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
</head>

<body onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
<div id="wrapper">
<div id="header">
<div id="logo">
  <h1><a href="index.shtml"><img src="Images/logocropped.png" width="134" height="69" alt="APICS Logo" /></a> Southern Oregon Chapter</h1>
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
<h2>Education</h2>
<p>Fulfill your APICS education and training needs through Certification classes, seminars or workshop series, public or in-house venues, part or full day, Saturday or weekday schedules.</p>
<h3>Benefits of an APICS Education:</h3>
<ul>
<li>Knowledge – learn supply chain and operations management concepts, techniques and processes.</li>
<li>Efficiency – apply your learnings to streamline and optimize operations.</li>
<li>Confidence – empower yourself by knowing your contributions are valuable.</li>
<li>Credibility – enhance your standing with peers, colleagues and customers.</li>
<li>Profitability – increase your earning potential and add to your company’s bottom line.</li>
</ul>
<h3>Click below to learn more and for current schedules.</h3>
<ul>
<li>CPIM</li>
<li>CSCP</li>
<li>Lean Enterprise Workshop Series</li>
<li>Global Sourcing Workshop Series</li>
<li>In-house Training</li>
</ul>
<p>Can’t find what you’re looking for? Please <a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'>Contact us</a> and we'll be happy to discuss.</p>  
</div>
<div id="Join">
    <h3><a href="http://www.apics.org/membership-application">Join Today</a></h3>
    <p> <a href="http://www.apics.org/membership-application">Join APICS</a> today to profit from our vast educational offerings as well as the knowledge and experiences of thousands of other operations management professionals worldwide. </p>
  </div>
  <div id="Events">
    <h3>Upcoming Events</h3>
<?php 
// connect to the database
require_once('connect.php'); 
//display events
require_once('EventSideBar.php');
?>
</div>
<?php include('footer.php'); ?>
</div>
<?php require_once('contactform-code.php'); ?>
</body>
</html>
