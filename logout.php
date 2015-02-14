<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>練習問題8の解答例の動作確認 A</title>
</head>
<body bgcolor="#FFFFFF">
<?php
session_start();
  $_SESSION["name"] = 
  isset($_SESSION["name"]) ? $_SESSION["name"] : "--";
  $_SESSION["syusei"] = 
  isset($_SESSION["syusei"]) ? $_SESSION["syusei"] : "--";
  $_SESSION["age"] = 
  isset($_SESSION["age"]) ? $_SESSION["age"] : "--";
?>

彼女の名前は、<?php $_SESSION['name']; ?>です。<br />
出身は、<?php $_SESSION['syusei']; ?>で、年齢は、<?php $_SESSION['age']; ?>歳です。<br />
<br />
<br />
<a href="test.php">test.php</a><br />
<a href="test2.php">test2.php</a><br />
<a href="test3.php">test3.php</a>

</body>
</html>
