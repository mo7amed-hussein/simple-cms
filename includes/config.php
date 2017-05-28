<?php

/**
 * @author mohamed hussein
 * @copyright 2017
 */


ob_start();

//start session 
session_start();

//database credentials

define("DBHOST","localhost:3306");
define("DBUSER","root");
define("DBPASSWORD","");
define("DBNAME","mydb");

//connect to mysql
$con =mysql_connect(DBHOST,DBUSER,DBPASSWORD);
//select database to work on 
$con=mysql_select_db(DBNAME,$con) or die("connection to database failed ".Mysql_error());




 
?>