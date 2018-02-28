<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="hhsdb"; // Database name
$tbl_name="register"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
//require('dbconnect.php');

// Define $myusername and $mypassword 
$myusername=$_POST['username'];
$mypassword=$_POST['password'];


$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	$row=mysql_fetch_row($result);
 	$sname=$row[0];
//	print("<h1>Welcome, $sname!<br></h1>");
//	echo "<h2>Login Success!!!</h2>";
	session_start();
	$_SESSION['SName']=$sname;
	$_SESSION['Status']="Session Status: Login Success!!!";
	
	if (isset($_POST['remuser'])){
		setcookie("username",$myusername,time()+60*60*24);
		setcookie("password",$mypassword,time()+60*60*24);
	}
	else
	{
		setcookie("username","",time()-5);
		setcookie("password","",time()-5);
	}
	header("location:SC_login_success.php");
}
else {
	unset($_SESSION['SName']);
	unset($_SESSION['Status']);
	echo "<h2>Login Failed!!!</h2>";
	header("location:SC_login.php");
}

?>