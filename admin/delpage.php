<?php require_once('../includes/config.php'); require_once('../includes/loginFunctions.php');
if(isset($_GET['p']))
{
    $id=$_GET['p'];
    $sql="delete from pages where pageID=$id";
    $ret=mysql_query($sql)or die("query failed ".mysql_error());
    header('location:./');
    exit();
    
}

?>
