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

$recordSet = mysqli_query($db,'SELECT * FROM k_company LEFT JOIN k_customer ON k_company.company_id = k_customer.id');
$date = mysqli_fetch_assoc($recordSet);
?>
<p><a href="index.php">登録する</a></p>
<p><a href="test.php">テスト</a></p>
<table border="1">
<tr>
<th>ID</th>
<th>顧客会社名</th>
<th>顧客会社住所</th>
<th>ＴＥＬ(請求担当)</th>
<th>Ｍａｉｌ(請求担当)</th>
<th>顧客担当者名</th>
<th>ＴＥＬ(顧客担当)</th>
<th>Ｍａｉｌ(顧客担当)</th>
<th>弊社担当者</th>
<th>特記事項</th>
<th>変更</th>
</tr>
<?php
while($table = mysqli_fetch_assoc($recordSet)){
?>
<tr>
	<td><?php echo $table["id"] ?></td>
	<td><?php echo $table["company_name"] ?></td>
	<td><?php echo $table["company_add"] ?></td>
	<td><?php echo $table["company_tel"] ?></td>
	<td><?php echo $table["company_mail"] ?></td>
	<td><?php echo $table["name"] ?></td>
	<td><?php echo $table["tel"] ?></td>
	<td><?php echo $table["mail"] ?></td>
	<td><?php echo $table["user_name"] ?></td>
	<td><?php echo $table["special_text"] ?></td>
<td><?php echo "<a href=\"index_2.php?id=" . $table["id"] . "\">変更</a>"; ?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>