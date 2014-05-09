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
	<?php
		$product_id=$_GET["id"];
		mysql_connect("localhost","root","");
		mysql_select_db("fashion_theatre");
		$rs=mysql_query("select * from products where Product_id=\"$product_id\"");
		$row=mysql_fetch_array($rs);
	?>
	<div id="showcase">
		<div id="view"><img src="<?php echo $row["path"];?>"/ width="100%" height="100%"></div>
		<div id="details">
			<div id="details1"><?php echo $row["Brand"]." ".$row["Product_name"];?></div>
			<div id="details2"><?php echo "$".$row["Price"];?></div>
			<div id="details2"><?php echo "Size ".$row["Size"];?></div>
			<div id="shopping"><form method="post" action="my_bag.php?pid=<?php echo $row['Product_id'];?>">Qty</br><select name="Quantity"><option value="1">1</option><option value="2">2</option>
			<option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option>
			<option value="8">8</option><option value="9">9</option><option value="10">10</option></select><input type="submit" id="add" class="button" value ="Add to Bag" ></form></div>
		</div>
	</div>
	<?php mysql_close();?>
</html>
