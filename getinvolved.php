
<html>
<head>
<title>getinvolved</title>
</head>
<body>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color:#111;
	
}


.active {
    background-color: #4CAF50;
	
}
</style>


<nav>
<ul>
  
  <li style="float:right"><a href="https://www.google.co.in/">Search</a></li>
  <li style="float:right"><a class="active"href="file_upload.html">Guest Login</a></li>
</ul>
</nav>


<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration:none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:15px;
}
.rad{
border-radius:15px;
}
.bottom
{
margin-bottom:7cm;

}
</style>

<style>
	html{
		overflow-x:hidden;
		overflow-y:scroll;
		}
		</style>
<style>
body {
    background: url(t1.png) right bottom no-repeat;
	background-size:100%;
    
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<center>
<font size=5>
<form  method="POST" action="signin.php">

<B><p style="color:white"><p class=bottom><marquee>We are always there for you...!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCalm mind brings inner strength and self-confidence, so that's very important for good health..-Dalai Lama</marquee></p>
<b><p style="color:white">Username:
<input type="text" name="username" class=rad placeholder="Enter Username" value=<?php echo Cookie_val(1); ?><br>
<p style="color:white">Password:
<input type="password" name="password" class=rad placeholder="Enter Password" value=<?php echo Cookie_val(2); ?></p>
<p style="font-size:12px">
<!--<input type="submit"  class="button" value=SignIn></p>-->
<input type="checkbox" name="remuser">Remember Password<br>
<input type="submit" class="button" value=SignIn>
</form>
<form method="POST" action="reg.html">
<input type="submit" class="button" value=SignUp>
</form>
</center>
</font>
</body>
</html>
<?php
		function Cookie_val($ch){
		if ($ch==1)
		{	
			if (isset($_COOKIE['username']))//&&isset($_COOKIE['Pwd'])){
			{
				return $_COOKIE['username'];
			}
			else 
				return;
		}
		else
		{
			if (isset($_COOKIE['password']))//&&isset($_COOKIE['Pwd'])){
			{
				return $_COOKIE['password'];
			}
			else 
				return;
		}}
	
?>	