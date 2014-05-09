<html>
<head>
<title>Fashion Theatre</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
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
		<img src="mens_banner.jpg"/ width="100%" height="100%">
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
		$department_id=$_GET["did"];
		mysql_connect("localhost","root","");
		mysql_select_db("fashion_theatre");
		$rs=mysql_query("SELECT Product_name,Brand,Price,path,Product_id FROM `products` WHERE Department_id=\"$department_id\"");
		
	?>
	<div id="mens_base">
		<div id="mens_base1" ></div>
		<div id="mens_base2">
			<?php while($row=mysql_fetch_array($rs)){ ?>
			<div id="products">
				
				<div id="pupper"><a href="product.php?id=<?php echo $row["Product_id"];?>"><img src="<?php echo $row["path"];?>" width="100%" height="100%"/></a>
				</div>
				<div id="plower">
					<div id="plowerl"><?php echo "$".$row['Price'];?></div>
					<div id="plowerr"><?php echo $row ['Brand']." ".$row["Product_name"];?></div>
				</div>
				
			</div>
			<?php } mysql_close();?>

		</div>
	</div>
</body>
</html>