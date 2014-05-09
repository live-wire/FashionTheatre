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
$uname_chk=$_POST["uname"];
$pwd_chk=$_POST["pwd"];
if(empty($uname_chk)||empty($pwd_chk))
echo "Any Field cannot be left balnk.";
else
{
mysql_connect("localhost","root","");
mysql_select_db("fashion_theatre");
$rs=mysql_query("select count(User_name) from customer");
$row=mysql_fetch_array($rs);
$number=$row[0];
$rs=mysql_query("select User_name, Password from customer");
for($i=1;$i<=$number;$i++)
{
	$row=mysql_fetch_array($rs);
	if(strcmp($uname_chk,$row['User_name'])==0)
	{
		if(strcmp($pwd_chk,$row['Password'])==0)
		{
			echo "Login Successful</br></br>You Can Now Place Orders";
			
			$_SESSION["user"]=$uname_chk;
			$_SESSION["login"]="YES";
			mysql_query("insert into orders values ('','".$_SESSION["user"]."')");
			$rs=mysql_query("select Order_id from orders where User_name=\"$uname_chk\"");
			$row=mysql_fetch_array($rs);
			$_SESSION["order"]=$row["Order_id"];
		}
		else
			echo "Incorrect Password</br></br>Please Try Agian";
		break;
	}
}
if($i==($number+1))
	echo "Sorry You Have Not Yet Registered";
mysql_close();
}
?>
</div>
</body>
</html>