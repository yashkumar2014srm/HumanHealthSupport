<html>
<head>
<title>Registration</title>
<body>
<?php 
extract($_POST);
$conn=new mysqli('localhost','root','','hhsdb');

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
} 

$query="insert into register values('$name','$dob','$number','$emailid','$uname','$psw','$image')";

echo "Connected successfully";
header("location:hhp.html");
$conn->query($query);

?>