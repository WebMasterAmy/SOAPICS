<?php require_once('popup-contactform.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Southern Oregon Chapter APICS</title>
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
  <h2>About Us    </h2>
  <h3>Southern Oregon Chapter</h3>
  <p>APICS Southern Oregon Chapter is a not-for-profit volunteer based organization offering results-oriented education and activities to both individuals and the business community. Chartered in the 80's, Southern Oregon Chapter bridges the gap between the Sacramento and Southern Willamette Chapters. Our current professional membership covers from Mt. Shasta,CA to Roseburg, OR.</p>
  <p>Looking for answers to help make you or your business more efficient and productive? Southern Oregon Chapter can help you find what you're looking for - we offer personalized, hands-on answers to your questions. <a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'>Contact us</a> today.</p>
    <h3>Board of Directors</h3>
  <p>Cedric Buckingham,    <span class="italic">President</span></p>
  <p>John Christensen,    <span class="italic">VP of Programs</span></p>
  <p>Russell Cramer,    <span class="italic">VP of Finance</span></p>
  <p>Elizabeth Funk,    <span class="italic">VP of Membership</span></p>
  <p>Lindy Petrie,    <span class="italic">VP of Education</span></p>
  <h3>Our Mission</h3>
  <p>The Southern Oregon Chapter of APICS is dedicated to providing quality education to the business community. We are further committed to expanding involvement of all levels of business people in their professional and individual growth.</p>
  <h3>Chapter Awards</h3>
  <p>We are proud to be the recipients of awards in chapter management excellence.</p>
  <ol>
  	<li>CBAR Bronze 2006-2011</li>
    <li>Silver in 2012</li>
    </ol>
  <p><img src="Images/CBar-Silver.png" width="129" height="129" alt="CBAR Silver Award 2012" /></p>
</div>
  <div id="Join">
    <h3><a href="http://www.apics.org/membership-application">Join Today</a></h3>
    <p> <a href="http://www.apics.org/membership-application">Join APICS</a> today to profit from our vast educational offerings as well as the knowledge and experiences of thousands of other operations management professionals worldwide. </p>
  </div>
  <div id="Events">
    <h3>Upcoming Events</h3>
<!--#include file="EventSideBar.ssi" -->
</div>

<div id="footer">
	<!-- AddThis Button BEGIN -->
		<div id="ShareIcons">
		<p>Share this page on all your social websites.
		<span class='st_facebook'></span>
		<span class='st_blogger'></span>
		<span class='st_linkedin'></span>
		<span class='st_googleplus'></span>
		<span class='st_twitter'></span>
		<span class='st_delicious'></span>
		<span class='st_email'></span>
		<span class='st_sharethis'></span></p>
		</div>
	<!-- AddThis Button END -->
    <div id="FooterText"><p>&copy;2012 Southern Oregon APICS</p></div>
    <div id="CreatedBy">
    <p><a href="http://www.purpledragonwebdevelopment.com">Page created by Purple Dragon Web Development</a></p>
    </div>
    


</div>

</div>
<?php require_once('contactform-code.php'); ?>
</body>
</html>
