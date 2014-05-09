
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
	<div id="faltu">My Items</div>
	<?php
		$pid=$_GET["pid"];
		$qty=$_POST["Quantity"];
		if($_SESSION["login"]=="NO")
		{
			header("Location:login.php");
		}
		else
		{
		mysql_connect("localhost","root","");
		mysql_select_db("fashion_theatre");
		$rs=mysql_query("select * from products where Product_id=\"$pid\"");
		$row=mysql_fetch_array($rs);
		$tp=$row["Price"]*$qty;
		mysql_query("insert into cart_items values('','$pid','$qty','$tp','".$_SESSION["order"]."')");
		
		$rs=mysql_query("select * from cart_items where Order_id='".$_SESSION["order"]."'");
		while($row2=mysql_fetch_array($rs)){
		$product=$row2["Product_id"];
		$qty=$row2["Quantity"];
		$rc=mysql_query("select * from products where Product_id=\"$product\"");
		$row=mysql_fetch_array($rc);
		$tp=$row["Price"]*$qty;
	?>
	<div id="bag">
	<div id="bag1"><div id="bag1u">Brand</div><div id="bag1l"><?php echo $row["Brand"];?></div></div>
	<div id="bag1"><div id="bag1u">Name</div><div id="bag1l"><?php echo $row["Product_name"];?></div></div>
	<div id="bag1"><div id="bag1u">Quantity</div><div id="bag1l"><?php echo $qty;?></div></div>
	<div id="bag1"><div id="bag1u">Sub Total</div><div id="bag1l"><?php echo "$".$tp;?></div></div>
	<div id="bag1"><div id="bag1u">Image</div><div id="bag1l"><img src="<?php echo $row["path"];?>" width="100%" height="100%"></div></div>
	</div>
	<?php } ?>
	<?php mysql_close();}?>
	<div id="final"><form method="post" action="last.php"><input type="submit" id="add" class="button" value ="Place Order"></form></div>
	</body>
</html>
