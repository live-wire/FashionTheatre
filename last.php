
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
	<div id="register_form" class="solver2">
		<form name="payment_form" action="payment.php" method="post">
			<div id="form1"><div class="type">Bank</div><div class="field"><input type="text" name="uname" size="52px"></div></div>
			<div id="form2"><div class="type">Card number</div><div class="field"><input type="text" name="pwd" size="52px"></div></div>
			<div id="form3"><div class="type">Name on Card</div><div class="field"><input type="text" name="cpwd" size="52px"></div></div>
			<div id="form4"><div class="type">Expiry date</div><div class="field">
			<select name="month">
			<option value="Jan">Jan</option>
			<option value="Feb">Feb</option>
			<option value="Mar">Mar</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="Aug">Aug</option>
			<option value="Sept">Sept</option>
			<option value="Oct">Oct</option>
			<option value="Nov">Nov</option>
			<option value="Dec">Dec</option>
			</select>
			<select name="Year">
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
			</select>
			
			</div></div>
			<div id="form5"><div class="type">Pin</div><div class="field"><input type="password" name="cemail" size="52px"></div></div>
			<div id="form6"><button type="submit" value ="Register">Pay</button>
		</form>
	</div>
	</body>
</html>
