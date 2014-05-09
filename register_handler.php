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
	<div id="test">
<?php
if(empty($_POST["uname"])||empty($_POST["pwd"])||empty($_POST["cpwd"])||empty($_POST["email"])||empty($_POST["cemail"]))
echo "Any fiels cannot be left blank.";
else
{
mysql_connect("localhost","root","");
mysql_select_db("fashion_theatre");
$rs=mysql_query("select count(User_name) from customer");
$row=mysql_fetch_array($rs);
$number=$row[0];
$rs=mysql_query("select User_name from customer");
for($i=1;$i<=$number;$i++)
{
	$row=mysql_fetch_array($rs);
	if(strcmp($_POST["uname"],$row['User_name'])==0)
	break;
}
if($i!=($number+1))
	{echo "Username already already exists</br></br>Please Try Another One";
	header("Location:register.php");}
else if(strcmp($_POST["pwd"],$_POST["cpwd"])!=0)
	{echo "Password does not match</br></br>Please Try Again";
	header("Location:register.php");}
else if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
{
		echo "Invalid email";
		header("Location:register.php");}

else if(strcmp($_POST["email"],$_POST["cemail"])!=0)
{	echo "Email does not match</br></br>Please Try Again";
	header("Location:register.php");
}
else 
{
	mysql_query("insert into customer values('".$_POST["uname"]."','".$_POST["pwd"]."','".$_POST["email"]."')");
	mysql_close();
	echo"Registration Successful</br></br>Thank You";
}}
?>
</div>
</body>
</html>