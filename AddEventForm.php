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
<h1>Create Event</h1>
<form action="AddEvent.php?<?php echo SID; ?>" method="post" name="addEvent" id="addEvent">
<p>Title: <input name="title" id="title" type="text"  size="10" maxlength="30" /></p>
<p>Date and time: <input name="date" id="date" type="text"  size="10" maxlength="15" /></p>
<p>Location: <input name="location" id="location" type="text"  size="20" maxlength="60" /></p>
<p>Cost: <span class="small">Format (123.54) no commas</span><input name="cost" id="cost" type="text"  size="10" maxlength="10" /></p>
<p>Description:<br />
<textarea name="description" id="description" rows="3"></textarea></p>
<input name="submit" id="submit" type="submit" value="Create Event" />
</form>

</body>
</html>