<?php require_once('../includes/config.php'); require_once('../includes/loginFunctions.php');
if(!isLoggedin())
{
    header('location:./login.php');
    exit();
}
if(isset($_GET['logout']))
{
    logout();
}

if(!isset($_GET['p']))
{
    header('location:./');
    exit();
}
if(isset($_POST['submit']))
{
    $id=mysql_real_escape_string($_POST['pageID']);
    $title=mysql_real_escape_string($_POST['title']);
    $content=mysql_real_escape_string($_POST['content']);
    
    $sql="update pages set pageTitle='$title' , pageCont='$content' where pageID='$id'";
    mysql_query($sql) or die("query failed ".mysql_error());
    header('location:./');
    exit();
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta charset="utf-8"/> 
	<title>Admin Panel</title>
</head>
<link rel="stylesheet" type="text/css" href="../styles/style.css" />
<body>
<div id="wrapper">
<div id="logo"><a href="./"><img src="../images/logo.png" alt=""/></a></div>
<div id="navigation">
<ul class="menu">
<li><a href="../" target="_blank">view webiste</a></li>
<li><a href="./?logout">logout</a></li>
</ul>
</div>

<div id="content">
<?php
    $id=mysql_real_escape_string($_GET['p']);  
    $sql="select * from pages where pageID='$id'";
    $result=mysql_query($sql) or die("query failed ".mysql_error());
    $row=mysql_fetch_object($result);
?>
<form action="" method="post">
<input type="hidden" name="pageID" value="<?php echo "$row->pageID";?>" />
<p><label><strong>Title </strong></label><input type="text" name="title" size="100" value="<?php echo"$row->pageTitle";?>"/></p>
<label><strong>Content</strong></label>
<p><textarea rows="20" cols="100" name="content" ><?php echo "$row->pageCont";?></textarea></p>
<input type="submit" name="submit" value="update" class="button"/> 
</form>
</div>
<div id="footer">Copyrights &copy; 2017 all rights reserved</div>
</div>
</body>
</html>