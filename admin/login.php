<?php require_once('../includes/config.php'); require_once('../includes/loginFunctions.php');
if(isset($_POST['submit']))
{
    $username=mysql_real_escape_string($_POST['username']);
    $password=mysql_real_escape_string($_POST['password']);
    
    login($username,$password);
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta charset="utf-8"/> 
	<title>login</title>
</head>
<link rel="stylesheet" type="text/css" href="../styles/style.css" />
<body>
<div id="wrapper">
<div id="logo"><a href="./"><img src="../images/logo.png" alt=""/></a></div>
<div id="content">
<p> <?php echo printMessages();?></p>
<form action="" method="post">
<p><label><strong>UserName: </strong></label> <input type="text" name="username"  size="50"/></p>
<p><label><strong>Password: </strong></label> <input type="password" name="password"  size="50"/></p>
<input type="submit" name="submit" value="login" />
</form>
</div>
<div id="footer">Copyrights &copy; 2017 all rights reserved</div>
</div>
</body>
</html>