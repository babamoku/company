<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>会社情報変更</title>
</head>
<body>
<?php
$db = mysqli_connect("localhost","root","","company") or
die(mysqli_connect_error());
mysqli_set_charset($db,"utf8");


mysqli_query($db , 'UPDATE k_matter SET
		like_name="' . $_POST["like_name"] . '" ,matter_add="' . $_POST["matter_add"] . '" , respone_name="' . $_POST["respone_name"] . '" ,
		content_text="' . $_POST["content_text"] . '", matter_tel="' . $_POST["matter_tel"] . '",
		matter_mail="' . $_POST["matter_mail"] . '" , name="' . $_POST["name"] . '",
		tel="' . $_POST["tel"] . '", mail="' . $_POST["mail"] . '",
		sp_text="' . $_POST["sp_text"] . '" WHERE k_matter.matter_id ="' . $_POST["h_id"] . '"') or
		die(mysqli_error($db));

?>
<p>登録情報を変更しました。</p>
<p><a href="taiou_list.php">一覧に戻る</a></p>


</body>
</html>