<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>検索</title>
<script type="text/javascript">
function setFormInput(val){
　　if(!window.opener || window.opener.closed){
　　　　window.close();
　　} else{
　　　　window.opener.document.getElementById('title02').innerHTML = val;
　　　　window.opener.document.form01.word_2.value = val;
　　　　window.close();
　　}
}
</script>
</head>
<body>
<?php
$db = mysqli_connect("localhost","root","","company") or
die(mysqli_connect_error());
mysqli_set_charset($db,"utf8");

$recordSet = mysqli_query($db,'SELECT * FROM k_matter');
$date = mysqli_fetch_assoc($recordSet);

$sql = mysqli_query($db,'SELECT respone_name FROM k_matter WHERE respone_name LIKE "%g%"');
$date_2 = mysqli_fetch_assoc($sql);
?>

<h1>検索</h1>
<input type="text" name="kensaku" id="kensaku">
<input type="button" value="検索">
<table border="1">
  <tr>
  <th>対応者名</th>
</tr>
<?php
while($table = mysqli_fetch_assoc($recordSet)){
?>
<tr>
<td>
<a href="javascript:setFormInput('<?php echo $table["respone_name"]; ?>');"><?php echo $table["respone_name"]; ?></a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
