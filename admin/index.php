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
<body>
<div id="wrapper">
<div id="logo"><a href="./"><img src="../images/logo.png" alt=""/></a></div>
<div id="navigation">
<ul class="menu">
<li><a href="../" >view webiste</a></li>
<li><a href="./logout.php">logout</a></li>
</ul>
</div>

<div id="content">
<table>
<caption>website pages</caption>
<tr><th>Title</th> <th>actions</th></tr>
<?php
$sql="select * from pages order by pageID";
$result=mysql_query($sql) or die("query failed ".mysql_error());
while($row=mysql_fetch_object($result))
{
    echo "<tr><td>$row->pageTitle</td>";
    if($row->isRoot==0)
    {
        echo'<td> <a href="editpage.php?p='.$row->pageID.'">edit</a></td>';
    }
    else
    {
      echo'<td> <a href="editpage.php?p='.$row->pageID.'">edit</a></td>';  
    }
    
}
 ?>
</table>
</div>
<div id="footer">Copyrights &copy; 2017 all rights reserved</div>
</div>
</body>
</html>