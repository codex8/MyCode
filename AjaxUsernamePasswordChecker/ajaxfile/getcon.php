<?php
session_start();
error_reporting(0);
require_once('../dbconnection.php');
$get=$_REQUEST['get'];
$div=$_REQUEST['div'];


		  
		
  
    $query=mysql_query("select id from users where username='$get' AND password='$div' ")or die(mysql_error());
    if (mysql_num_rows($query)>0) {
      echo "<p style='color:green'>VALID USER</p>";
    }else{
      echo "<p style='color:red'>INVALID USER</p>";
    }
    





mysql_close();
?>
