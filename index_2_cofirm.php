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


mysqli_query($db , 'UPDATE k_company SET
		company_name="' . $_POST["company_name"] . '" , company_add="' . $_POST["company_add"] . '" ,
		company_tel="' . $_POST["company_tel"] . '", company_mail="' . $_POST["company_mail"] . '",
		user_name="' . $_POST["user_name"] . '" , special_text="' . $_POST["special_text"] . '" WHERE k_company.company_id ="' . $_POST["h_id"] . '"') or
		die(mysqli_error($db));
mysqli_query($db, 'UPDATE k_customer SET
		name="' . $_POST["name"] . '", tel="' . $_POST["tel"] . '",
		 mail="' . $_POST["mail"] . '" WHERE k_customer.id = "' . $_POST["h_id"] . '"') or
		die(mysqli_error($db));




?>
<p>登録情報を変更しました。</p>
<p><a href="list.php">一覧に戻る</a></p>


</body>
</html>