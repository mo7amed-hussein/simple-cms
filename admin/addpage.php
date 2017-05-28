<?php require_once('../includes/config.php'); require_once('../includes/loginFunctions.php');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta charset="utf-8"/> 
	<title>Admin Panel</title>
</head>
<link rel="stylesheet" type="text/css" href="../styles/style.css" />
<script lang="javascript" type="text/javascript">
function delPage(id,title)
{
    if(confirm("are you sure you want to delete '"+title+"'"))
    {
        window.location.href='./delpage.php? p='+id;
    }
}
</script>
<body>
<div id="wrapper">
<div id="logo"><a href="./"><img src="../images/logo.png" alt=""/></a></div>
<div id="navigation">
<ul class="menu">
<li><a href="../" >view webiste</a></li>
<li><a href="./?logout">logout</a></li>
</ul>
</div>

<div id="content">
<form action="" method="post">
<p><label><strong>Title </strong></label><input type="text" name="title" size="100"/></p>
<label><strong>Content</strong></label>
<p><textarea rows="20" cols="100" name="content"></textarea></p>
<input type="submit" name="submit" value="add page" class="button"/> 
</form>
</div>
<div id="footer">Copyrights &copy; 2017 all rights reserved</div>
</div>
</body>
</html>