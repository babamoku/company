<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>検索</title>
</head>
<body>
<?php
$db = mysqli_connect("localhost","root","","company") or
die(mysqli_connect_error());
mysqli_set_charset($db,"utf8");



?>

<h1>検索</h1>

<form action="taiou.php" method="post">
<input type="text" name="company_name" id="company_name" size="20" maxlength="50">
<input type="submit" value="検索">
<input type="hidden" name="kensaku" value="kensaku">
<table border="1">
  <tr>
  <th>会社名</th>
</tr>
<tr>
<td></td>
</tr>
</table>
</form>

<p><a href="#" onClick="window.close(); return false;">サブウィンドウを閉じる</a></p>
</body>
</html>
