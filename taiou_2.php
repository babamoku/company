<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>会社情報登録</title>
<script type="text/javascript">


function disp(url){

	window.open(url, "window_name", "width=350,height=250,scrollbars=yes");

}
</script>

</head>
<body>


<?php
$db = mysqli_connect("localhost","root","","company") or
die(mysqli_connect_error());
mysqli_set_charset($db,"utf8");

if(!isset($_GET["id"])){
	exit;
}else{
	$c_id = $_GET["id"];
}

$ab = mysqli_query($db,"SELECT * FROM k_matter where k_matter.matter_id = $c_id");
$row = mysqli_fetch_assoc($ab);

?>

<a href="top.php">トップ</a>
<form action="taiou_2_cofirm.php" method="post">
<table border="1" height="600">
<tr>
  <td width="70" height="70">ロゴ</td>
  <th>日付<input type="text" name="created_at" id="created_at" size="15" maxlength="30" value="<?php echo date('Y/m/d'); ?>"></th>
  <th>記入者：</th>
  <th></th>
</tr>
<tr>
<th></th>
 <td><label for="like_name">顧客会社名</label><br /><input type="text" name="like_name" id="like_name" value="<?php echo $row["like_name"]; ?>" size="15" maxlength="50"><a href="sub.php" target="window_name" onClick="disp('sub.php')"><input type="button" value="検索"></a></td>
 <td>客種<br /><input type="text" name="kyaku" id="kyaku" size="10" maxlength="20"></td>
  <td>要求フラグ<br />
<select name="c_flag" >
<option value=""></option>
<option value="0">案件</option>
<option value="1">人材</option>
<option value="2">両方</option>
</select></td>
</tr>

<tr>
  <th></th>
  <td>対応内容<br /><input type="text" name="content_text" id="content_text" value="<?php echo $row["content_text"]; ?>" size="30" maxlength="100"></td>
  <td>対応者<br /><input type="text" name="respone_name" id="respone_name" value="<?php echo $row["respone_name"]; ?>" size="30" maxlength="100"></td>
  <td></td>
  </tr>

<tr>
  <th></th>
  <td><label for="matter_add">住所</label><br /><input type="text" name="matter_add" id="matter_add" value="<?php echo $row["matter_add"]; ?>" size="30" maxlength="15"></td>
  <td></td>
  <td></td>
  </tr>

<tr>
  <td width="70" height="70">顧客</td>
  <td><label for="matter_tel">TEL</label><br /><input type="text" name="matter_tel" id="matter_tel" value="<?php echo $row["matter_tel"]; ?>" size="15" maxlength="15">
  <br />
  <label for="matter_mail">Mail</label><br /><input type="text" name="matter_mail" id="matter_mail" value="<?php echo $row["matter_mail"]; ?>" size="15" maxlength="30"></td>
<td></td>
<td></td>
  </tr>

<tr>
  <td width="70" height="70">要求</td>
  <td><label for="name">顧客担当者名</label><br /><input type="text" name="name" id="name" value="<?php echo $row["name"]; ?>" size="30" maxlength="50"></td>
<td></td>
<td></td>
  </tr>

<tr>
<th></th>
  <td><label for="tel">顧客担当者TEL</label><br /><input type="text" name="tel" id="tel" value="<?php echo $row["tel"]; ?>" size="15" maxlength="15"></td>
  <td><label for="mail">顧客担当者Mail</label><br /><input type="text" name="mail" id="mail" value="<?php echo $row["mail"]; ?>" size="15" maxlength="30"></td>
  <td></td>
  </tr>

<tr>
  <th></th>
  <td><label for="sp_text">特記事項</label><br /><textarea name="sp_text" cols="25" rows="" ><?php echo $row["sp_text"]; ?></textarea>
  <br />
  <input type="submit" value="変更">
  <input type="hidden" name="h_id" value="<?php echo $c_id; ?>">
  </td>
  <td></td>
  <td></td>
</tr>
</table>
</form>
</body>
</html>