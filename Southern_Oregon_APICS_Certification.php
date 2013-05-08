<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Certification Southern Oregon Chapter APICS</title>
<meta name="keywords" content="APICS, Management, Southern Oregon, Certification" />
<meta name="description" content="The Southern Oregon Chapter has been active since the 80's and has been dedicating to providing opportunities for Operations Management and Supply Chain professionals for Southern Oregon and Northern California. These opportunities come in the form of networking events, online discussion (via Facebook and Linkedin) and professional classes and certification (CPIM and CSCP). Our focus is to empower motivated professionals to attain the skills to be organizational leaders." />
<meta name="author" content="Amy McCrery of Purple Dragon Web Development" />
<link rel="icon" href="Images/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon"/>
<link href="styles/second.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
</head>

<body>
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
<div id="menuTop">
<div class="menu"><a href="index.php" target="self" class="first">Home</a></div>
<div class="menu"><a href="Southern_Oregon_APICS_About.php" target="self">About Us</a></div>
<div class="menu"><a href="Southern_Oregon_APICS_Events.php" target="self">Events</a></div>
<div class="menu"><a href="Southern_Oregon_APICS_Membership.php" target="self">Membership</a></div>
<div class="menu"><a href="Southern_Oregon_APICS_Education.php" target="self">Education</a></div>
<div class="menu"><a href="Southern_Oregon_APICS_Certification.php" target="self">Certification</a></div>
<div class="menu"><a href="Southern_Oregon_APICS_Maintenance.php" target="self" class="last">Maintenance</a></div>
</div>
<div id="MainContent">
<h2>Certification</h2>
<p><img src="Images/certified.jpg" width="300" height="300" alt="Certification Image" class="cert"/></p>
<p>Learn more about the process: <strong>Get Certified</strong></p>
<p>Learn more about <a href="Southern_Oregon_APICS_Maintenance.php">Certification Maintenance</a></p>
<p>APICS Certifications have been recognized worldwide as standards of professional excellence and quality within the manufacturing and service industries for over 35 years. The CPIM and CSCP designations signify a mastery of the concepts and functional knowledge and show that an individual has proudly earned the right to use the initials behind their name.</p>
<p> </p>
<h3>Certified in Production and Inventory Management</h3>
<p>An APICS CPIM shows commitment to the profession, leads to a sense of achievement, demonstrates value to your employer, enhances your earning potential, and provides a path to your career advancement.</p>
<p> </p>
<h3>Certified Fellow in Production and Inventory Management</h3>
<p>Take the next step up from your CPIM and join an elite group of professionals, share your knowledge with others, contribute to the Body of Knowledge and expand understanding of best practices, strategies and concepts.</p>
<p> </p>
<h3>Certified Supply Chain Professional</h3>
<p>Maintain your competitive edge with an APICS CSCP. As the increasingly important role of effective supply chain management affects all organizations, the CSCP makes you the expert with a truly end-to-end view of the entire supply chain.</p> 
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
</body>
</html>

