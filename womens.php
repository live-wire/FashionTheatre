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
		<img src="banner1.jpg"/ width="100%" height="100%">
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
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("fashion_theatre");
		$rs=mysql_query("select Department_name,Department_id from Department where Category_id=\"women\" order by Department_name");
	?>
	<div id="base">
		<div id="base1"><font align="center">Shop by Department</font>
		<ul>
		<?php while($row=mysql_fetch_array($rs)){?>
			<li><a href="men_departments.php?did=<?php echo $row['Department_id'];?>"><?php echo $row['Department_name'];?></a></li><br><?php }; ?>
		</ul>
		<?php mysql_close();?>
		</div>
		<div id="base2"><img src="banner5.jpg" width="100%" height="100%"></div>
	</div>
	
	</body>
</html>