<html>

<body>

<center>
<font size=5>
<form  method="POST" action="signin.php">

<B><p style="color:white"><p class=bottom><marquee>We are always there for you...!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCalm mind brings inner strength and self-confidence, so that's very important for good health..-Dalai Lama</marquee></p>
<b><p style="color:white"> Username:
<input type="text" name="username" class=rad placeholder="Enter Username" value=<?php  echo Cookie_val(1); ?>></p>
<b><p style="color:white">  Password:
<input type="password" name="password" class=rad placeholder="Enter Password" value=<?php echo Cookie_val(2); ?>></p>
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





</body>
</html>