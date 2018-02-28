<html>
<head>
    <title>User Login</title>
</head>
<body>
<form method="post" action="e2.php">
	<H1>User Login</h1>
	User Name:<input type="text" name="uname" value=<?php echo Cookie_val(1) ?> ><br>
	Password:<input type="password" name="pwd" value=<?php echo Cookie_val(2) ?> ><br>
	<input type="checkbox" name="remuser">Remember Password<br>
	<input type="submit" value="Login">
</form>
</body>
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
		}
		}
	?>
</html>
