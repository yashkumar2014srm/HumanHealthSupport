<?php
session_start();
extract($_POST);
$conn=new mysqli('localhost','root','','hhsdb');

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}


$sql="select username,dob from register where username='$search'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo implode(" ",$row);

?>