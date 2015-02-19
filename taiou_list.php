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
$db = mysqli_connect("localhost","root","","company") or
die(mysqli_connect_error());
mysqli_set_charset($db,"utf8");

$recordSet = mysqli_query($db,'SELECT * FROM k_matter WHERE matter_id');
$date = mysqli_fetch_assoc($recordSet);
?>
<p><a href="index.php">登録する</a></p>
<p><a href="test.php">テスト</a></p>
<p><a href="top.php">トップ</a></p>
<table border="1">
<tr>
<th>ID</th>
<th>顧客会社名</th>
<th>対応内容</th>
<th>対応者</th>
<th>住所</th>
<th>ＴＥＬ</th>
<th>Ｍａｉｌ</th>
<th>顧客担当者名</th>
<th>顧客担当者(Ｍａｉｌ)</th>
<th>顧客担当者(ＴＥＬ)</th>
<th>特記事項</th>
<th>変更</th>
</tr>
<?php
while($table = mysqli_fetch_assoc($recordSet)){
?>
<tr>
	<td><?php echo $table["matter_id"] ?></td>
	<td><?php echo $table["like_name"] ?></td>
	<td><?php echo $table["content_text"] ?></td>
	<td><?php echo $table["respone_name"] ?></td>
	<td><?php echo $table["matter_add"] ?></td>
	<td><?php echo $table["matter_tel"] ?></td>
	<td><?php echo $table["matter_mail"] ?></td>
	<td><?php echo $table["name"] ?></td>
	<td><?php echo $table["tel"] ?></td>
	<td><?php echo $table["mail"] ?></td>
	<td><?php echo $table["sp_text"] ?></td>
<td><?php echo "<a href=\"taiou_2.php?id=" . $table["matter_id"] . "\">変更</a>"; ?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>