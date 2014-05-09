<html>
<head>
<title>Fashion Theatre</title>
</head>
<body>
<?php
session_start();
$_SESSION["login"]="NO";
$_SESSION["user"]="initial";
$_SESSION["order"]=0;
header('Location:home.php');
?>

</body>
</html>