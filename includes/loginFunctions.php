<?php
//inlcude config file 
 require_once('config.php');
 
 /**
  * login to user admin if username and password are right
  * @param string $username user name
  * @param string $password user password
  *
  * */
 
 function login($username,$password)
 {
    //strip any tags from parameters
    $username=strip_tags(mysql_real_escape_string($username));
    $password=strip_tags(mysql_real_escape_string($password));
    
    //calculated md5 hash for password
    $password=md5($password);
    
    //sql statement to get record with these username and password
    $sql="select * from members where username = '$username' and password ='$password'";
    
    //apply the query on this statement
    $result=mysql_query($sql) or die("query failed ".mysql_error());
    
    if(mysql_num_rows($result)==1)//username and password match
    {
        //set authorized session variable as true
     $_SESSION['authorized']=true;
     //direct user to admin panel page
     header('location:../admin/');
     //exit parse page rest
     exit();   
    }//username and/or password didn't match
    else
    {
        //error message to be displayed 
        $_SESSION['msg']="wrong username or password";
    }
     
 } 
 
 /**
  * check if user is logged in as member or not
  * @return boolean true if logged or false if not
  * */
  
  function isLoggedin()
  {
    //check session variable if it was set 
    if( $_SESSION['authorized']==true)
    {
        return true;//logged in 
    }
    else 
    {
        return false;//not 
    }   
  }
 
 
 /**
  * user log out 
  * */
  function logout()
  {
    //clear authorized session variabel 
    unset($_SESSION['authorized']);
    //redirect to login page
    header('location:../admin/login.php');
  }
  
  /**
   * output any message in messages buffer to the user
   * */
   function printMessages()
   {
    //check if messages buffer contain any values
    if(isset($_SESSION['msg']))
    {
        echo "{$_SESSION['msg']}";
        unset($_SESSION['msg']);
    }
   }
  
?>