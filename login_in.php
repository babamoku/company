<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>ログイン</title>
</head>
<body>
<?php
$db = mysqli_connect("localhost","root","","company") or
die(mysqli_connect_error());
mysqli_set_charset($db,"utf8");
session_start();

if(isset($_SESSION["email"])){
	header("Location: logout.php");
	exit();
}else{
	echo "ログインしました。";
}
?>
<p><a href="index.php">トップページへ</a></p>
<p><a href="logout.php">ログアウト</a></p>
</body>
</html>
