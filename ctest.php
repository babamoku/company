<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>test</title>
</head>
<body>

<?php
$db = mysqli_connect("localhost","root","","company") or
die(mysqli_connect_error());
mysqli_set_charset($db,"utf8");

$sql = mysqli_query($db,'SELECT created_at FROM k_company a LEFT JOIN k_matter b ON a.company_name = b.like_name where ');
$time = mysqli_fetch_assoc($sql);


$prefCd = $_POST['cd'];
$prefName = $_POST['name'];
$submit = $_POST['submit'];
?>

    PREF_CD:<?= $prefCd ?><br />
    PREF_NAME:<?= $prefName ?><br />
    submit:<?= $submit ?><br />
</body>
</html>