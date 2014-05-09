<html>
<head>
<title>Fashion Theatre</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php session_start();?>
<div id="header">
		<div id="header_logo">
		<a href="home.php" title="Home"><img src="logo.png"/ width="100%" height="100%"></a>
		</div>
		<div id="header_slogan" align="center" valign="center">
		<img src="main_banner2.png"/ width="100%" height="100%">
		</div>
		<div id="header_links">
			<div id="upper">
				<div id="login"><a href="login.php" title="Login your account">Login</a></div>
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
			session_start();
			$_SESSION["login"]="NO";
			$_SESSION["user"]="initial";
			header("Location:home.php?'.SID.'");
		
?>
</div>
</body>
</html>