<?php
//Uploaded to PurpleDragon
     session_start();
     $_SESSION = array();
     session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add A Member</title>
<link href="styles/addmemberform.css" rel="stylesheet" type="text/css" />
</head>

<body>
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
<p>Adding a member will add the information to the database for the website which will grant the ability to log into the website for purposes such as creating events, it does not create an APICS membership<p>
</body>
</html>