<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>会社情報登録</title>
</head>
<body>

<?php
require('dbconnect.php');
session_start();

$_SESSION["company_name"] = $_POST["company_name"];
$_SESSION["company_add"] = $_POST["company_add"];
$_SESSION["company_tel"] = $_POST["company_tel"];
$_SESSION["company_mail"] = $_POST["company_mail"];
$_SESSION["name"] = $_POST["name"];
$_SESSION["tel"] = $_POST["tel"];
$_SESSION["mail"] = $_POST["mail"];
$_SESSION["user_name"] = $_POST["user_name"];
$_SESSION["special_text"] = $_POST["special_text"];

if(!isset($_SESSION))


?>



</body>
</html>