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
				<div><a href="my_bag.php">My  Shopping  Bag</a></div>
			</div>
		</div>
	</div>
	<div id="menu">
		<div id="mens" align="center"><a href="mens.php" >Men</a></div>
		<div id="womens" align="center"><a href="womens.php">Women</a></div>
	</div>
	<div id="register_form" class="solver2">
		<form name="form_register" action="register_handler.php" method="post">
			<div id="form1"><div class="type">Username</div><div class="field"><input type="text" name="uname" size="52px"></div></div>
			<div id="form2"><div class="type">Password</div><div class="field"><input type="password" name="pwd" size="52px"></div></div>
			<div id="form3"><div class="type">Confirm Password</div><div class="field"><input type="password" name="cpwd" size="52px"></div></div>
			<div id="form4"><div class="type">Email</div><div class="field"><input type="text" name="email" size="52px"></div></div>
			<div id="form5"><div class="type">Confirm Email</div><div class="field"><input type="text" name="cemail" size="52px"></div></div>
			<div id="form6"><button type="submit" value ="Register">Register</button>
		</form>
	</div>
	</body>
</html>