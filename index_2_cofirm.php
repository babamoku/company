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
require('dbconnect.php');

 


$conn = new PDO($db);

mysqli_query($db, 'UPDATE k_company SET
			company_name = :company_name,company_add = :company_add,
			company_tel = :company_tel, company_mail = :company_mail,
			user_name = :user_name, special_text = :special_text,
		WHERE company_id = :company_id');
mysqli_query($db,'UPDATE k_customer SET
			name = :name, tel = :tel, mail = :mail,
		WHERE id= :id');



?>
</body>
</html>