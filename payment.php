
<html>
	<head>
	<title>Fashion Theatre</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
	<?php 	
			session_start();
			if($_SESSION["login"]=="YES")
				{
				$status="Logout";
				$link="logout_handler.php";
				}
			else 
				{
				$status="Login"; 
				$link="login.php";
				}
			
	?>
	<div id="header">
		<div id="header_logo">
		<a href="home.php" title="Home"><img src="logo.png"/ width="100%" height="100%"></a>
		</div>
		<div id="header_slogan" align="center" valign="center">
		<img src="main_banner2.png"/ width="100%" height="100%">
		</div>
		<div id="header_links">
			<div id="upper">
				<div id="login"><a href="<?php echo $link; ?>" title="Login your account"><?php echo $status;?></a></div>
				<div id="register"><a href="register.php" title="New Customer">Register</a></div>
			</div>
			<div id="lower">
				
			</div>
		</div>
	</div>
	<div id="menu">
		<div id="mens" align="center"><a href="mens.php" >Men</a></div>
		<div id="womens" align="center"><a href="womens.php">Women</a></div>
	</div>
	<div id="test">
	<?php
	if(empty($_POST["uname"])||empty($_POST["pwd"])||empty($_POST["cpwd"])||empty($_POST["month"])||empty($_POST["Year"])||empty($_POST["cemail"]))
		{echo "Any fiels cannot be left blank.";
		header("Location:last.php");}
	else if(strlen($_POST["pwd"])!=16)
		{echo "Invalid card number";
		header("Location:last.php");}
	else if(strlen($_POST["cemail"])!=4||(!strval(intval($_POST["cemail"]))==strval($_POST["cemail"])))
		{echo "Invalid Pin number";
		header("Location:last.php");}
	else echo"Thank you for shopping with us.";
	mysql_connect("localhost","root","");
	mysql_select_db("fashion_theatre");
	mysql_query("delete from orders where User_name='".$_SESSION["user"]."'");
	mysql_close();
	?>
	</div>
	</body>
</html>
