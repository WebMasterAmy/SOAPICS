<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Member Login</title>
<link href="styles/Login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="LoginForm">
<p>Members of Southern Oregon APICS can log in to the website, if you are a member, contact one of the board members to be added to the site.</p>
<form action="MemberLogin.php" method="post" name="Login">
<input id ="email" name="email" type="text" value="email" size="30" maxlength="30" /><br />
<input id ="password" name="password" type="password" value="password" size="30" maxlength="30" /><br />
<input type="hidden" name="refer" value="<?php echo $_SESSION['refer']; ?>" />
<input id ="submit" name="login" type="submit" value="Log In" />
</form>

</div>
</body>
</html>