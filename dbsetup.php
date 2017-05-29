<?php
require_once('includes/config.php');

//create pages table
$sql="CREATE TABLE IF NOT EXISTS pages(
    pageID int(11) NOT NULL AUTO_INCREMENT ,
    pageTitle varchar(255) DEFAULT NULL,
    isRoot int(11) NOT NULL DEFAULT '1',
    pageCont text,
    PRIMARY KEY (pageID)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";
    
    mysql_query($sql) or die("query failed ".mysql_error());
    
    //insert home page 
    $sql="INSERT INTO pages (pageID,pageTitle,isRoot,pageCont) VALUES
        (1,'HOME',0,'<p>this is home page</p>')";
     mysql_query($sql) or die("query failed ".mysql_error());
     
     //create members table
     
$sql="CREATE TABLE IF NOT EXISTS members (
    memberID int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL DEFAULT '',
    password varchar(32) NOT NULL DEFAULT '',
    PRIMARY KEY (memberID)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";
    
    mysql_query($sql) or die("query failed ".mysql_error());
    
    $username="admin";
    $password="admin";
    
    $password=md5($password);
    
    //insert basic user 
    $sql="INSERT INTO members (memberID,username,password) VALUES
        (1,'$username','$password')";
     mysql_query($sql) or die("query failed ".mysql_error());
     
     echo"database setup done";
       
?>