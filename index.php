<?php require_once('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta charset="utf-8"/> 
	<title>home</title>
</head>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<body>
<div id="wrapper">
<div id="logo"><a href="./"><img src="images/logo.png" alt=""/></a></div>
<div id="navigation">
<ul class="menu">
<li><a href="./">Home</a></li>
<?php
//sql statement to get all other pages 
$sql="select * from pages where isRoot ='1' order by pageID";

$result=mysql_query($sql) or die("query failed ".mysql_error()); 

while($row=mysql_fetch_object($result))
{
    echo '<li><a href="./? p='.$row->pageID.'">'.$row->pageTitle.'</a></li>';
}
?>
</ul>
</div>

<div id="content">
<?php
if(isset($_GET['p']))
{
    $id=$_GET['p'];
    
    $id=mysql_real_escape_string($id);
    
   $sql="select *from pages where pageID='$id'"; 
} 
else
{
    $sql="select *from pages where pageID='1'"; 
}
$result=mysql_query($sql)or die("query failed ".mysql_error()); 
$row=mysql_fetch_object($result);
echo"$row->pageCont";
?>
</div>
<div id="footer">Copyrights &copy; 2017 all rights reserved</div>
</div>
</body>
</html>