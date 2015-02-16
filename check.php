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
$c_name = $_POST["company_name"];
$c_add = $_POST["company_add"];
$c_tel = $_POST["company_tel"];
$c_mail = $_POST["company_mail"];
$name = $_POST["name"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];
$user = $_POST["user_name"];
$text = $_POST["special_text"];

if($c_name == ''){
	echo '※顧客会社名が未入力です。<br />';
}else{
	echo '顧客会社名：'. $c_name . '<br /><br />';
}
if($c_add == ''){
	echo '※顧客会社住所が未入力です。<br />';
}else{
	echo '顧客会社住所：'. $c_add . '<br /><br />';
}
if($c_tel == ''){
	echo '※TEL(請求担当)が未入力です。<br />';
}else{
	echo 'TEL(請求担当)：'. $c_tel . '<br /><br />';
}
if($c_mail == ''){
	echo '※Mail(請求担当)が未入力です。<br />';
}else{
	echo 'Mail(請求担当)：'. $c_mail . '<br /><br />';
}
if($name == ''){
 	echo '※顧客担当者名が未入力です。<br />';
}else{
	echo '顧客担当者名：'. $name . '<br /><br />';
}
if($tel == ''){
	echo '※TEL(顧客担当)が未入力です。<br />';
}else{
	echo 'TEL(顧客担当)：'. $tel . '<br /><br />';
}
if($mail == ''){
	echo '※Mail(顧客担当)が未入力です。<br />';
}else{
	echo 'Mail顧客担当)：'. $mail . '<br /><br />';
}
if($user == ''){
	echo '※弊社担当者が未入力です。<br />';
}else{
	echo '弊社担当者：'. $user . '<br /><br />';
}
if($text == ''){
	echo '※特記事項が未入力です。<br />';
}else{
	echo '特記事項：'. $text . '<br /><br />';
}

if($c_name == '' || $c_add == '' || $c_tel == '' || $c_mail == '' ||$name == '' || $tel == '' || $mail == '' || $user == '' || $test == '' ){
	echo '<form>' . "\n";
	echo '<input type="button" onclick="history.back()" value="戻る"> ';
	echo '</form>';
}else{
	echo '<form action="cofirm.php method="POST">';
echo "<input type='hidden' name='company_name' value='" . $c_name . "'>";
echo "<input type='hidden' name='company_add' value='" . $c_add . "'>";
echo "<input type='hidden' name='company_tel' value='" . $c_tel . "'>";
echo "<input type='hidden' name='company_mail' value='" . $c_mail . "'>";
echo "<input type='hidden' name='name' value='" . $name . "'>";
echo "<input type='hidden' name='tel' value='" . $tel . "'>";
echo "<input type='hidden' name='mail' value='" . $mail . "'>";
echo "<input type='hidden' name='user_name' value='" . $user . "'>";
echo "<input type='hidden' name='special_text' value='" . $text . "'>";

echo "<input type='button' onClick='history.back()' value='戻る'>";
echo "<input type='submit' value='登録'>";
echo "</form>";
}

?>

</body>
</html>