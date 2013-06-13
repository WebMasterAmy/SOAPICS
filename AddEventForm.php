<?php
     session_start();
     $_SESSION = array();
     session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/addmemberform.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script src="JS/jquery-ui-timepicker-addon.js"></script>
<!--Date and Time Picker script -->
	<script>
		$(function() {
			$( "#date" ).datetimepicker();
			$("#time").timepicker();
		});
	</script>
<title>Event Form</title>
</head>

<body>
<div id="Event">
	<h1>Create an Event</h1>
	<form action="AddEvent.php?<?php echo SID; ?>" method="post" name="addEvent" id="addEvent">
	<p>Title: <input name="title" id="title" type="text"  size="10" maxlength="30" /></p>
	<p>Date and time: <input name="date" id="date" type="text"  size="10" maxlength="15" /></p>
	<p>Location: <input name="location" id="location" type="text"  size="20" maxlength="60" /></p>
	<p>Cost:</p>
    <p>Member: <span class="small">Format (123.54) no commas</span><input name="MemberCost" id="MemberCost" type="text"  size="10" maxlength="10" /></p>
    <p>Non Member: <span class="small">Format (123.54) no commas</span><input name="NonMemberCost" id="NonMemberCost" type="text"  size="10" maxlength="10" /></p>
    <p>Student: <span class="small">Format (123.54) no commas</span><input name="StudentCost" id="StudentCost" type="text"  size="10" maxlength="10" /></p>
    <p>Number of spots: <input name="Venue" id="Venue" type="text"  size="10" maxlength="10" /></p>
	<p>Description:<br />
	<textarea name="description" id="description" rows="3"></textarea></p>
	<input name="submit" id="submit" type="submit" value="Create Event" />
	</form>
</div>

<div id="Member">
	<h1>Add a member</h1>
	<form action="AddMember.php?<?php echo SID; ?>" method="post" name="addMember" id="addMember">
	<p>First Name:<input name="first" id="first" type="text"  size="10" maxlength="15" /></p>
	<p>Last Name:<input name="last" id="last" type="text"  size="10" maxlength="15" /></p>
	<p>Email:<input name="email" id="email"type="text"  size="20" maxlength="40" /></p>
	<p>Member Staus:<select name="status" id="status">
  		<option value="boardMember">Board Member</option>
  		<option value="member">Member</option>
  		<option value="guest">Guest</option>
		</select></p>
	<p>Choose a Password:<input name="password" id="password" type="text"  size="10" maxlength="40" /></p>
	<p>Confirm the password:<input name="password2" id="password2" type="text"  size="10" maxlength="40" /></p>
	<input name="submit" id="submit" type="submit" value="Add Member" />
	</form>
	<p>Adding a member will add the information to the database for the website which will grant the ability to log into the website for purposes such as creating events, it does not create an APICS membership</p>
</div>
</body>
</html>