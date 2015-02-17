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
<form action="index_2_cofirm.php" method="post">
<table border="1" height="600">
<tr>
  <td width="70" height="70">ロゴ</td>
  <td width="500" colspan="3" rowspan=""><label for="company_name">顧客会社名</label><br /><input type="text" name="company_name" id="company_name" size="30" maxlength="50"></td>
</tr>

<tr>
  <td width="70" height="70">トップ</td>
  <td colspan="3"><label for="company_add">顧客会社住所</label><br /><input type="text" name="company_add" id="company_add" size="30" maxlength="50"></td>
</tr>

<tr>
  <td width="70" height="70">顧客</td>
  <td colspan="5"><label for="company_tel">TEL(請求担当)</label><br /><input type="text" name="company_tel" id="company_tel" size="15" maxlength="15">
   <br />
  <label for="company_mail">Mail(請求担当)</label><br /><input type="text" name="company_mail" id="company_mail" size="15" maxlength="30"></td>
</tr>

<tr>
  <td width="70" height="70">要求</td>
  <td colspan="3"><label for="name">顧客担当者名</label><br /><input type="text" name="name" id="name" size="30" maxlength="50"></td>
</tr>

<tr>
  <td width="70" height="70">対応</td>
  <td colspan="3"><label for="tel">TEL(顧客担当者)</label><br /><input type="text" name="tel" id="tel" size="15" maxlength="15">
  <br />
  <label for="mail">Mail(顧客担当者)</label><br /><input type="text" name="mail" id="mail" size="15" maxlength="30"></td>
</tr>

<tr>
  <td rowspan="4"></td>
  <td colspan="3"><input type="button" value="追加" onclick="insertRow('sample1_table')" /></td>
</tr>

<tr>
  <td colspan="3"><label for="user_name">弊社担当者</label><br /><input type="text" name="user_name" id="user_name" size="30" maxlength="50"></td>
</tr>

<tr>

</tr>
<tr>
  <td colspan="2"><label for="special_text">特記事項</label><br /><textarea name="special_text" cols="25" rows="" ></textarea>
  <br />
  <input type="submit" value="変更"><input type="submit" value="削除"></td>
</tr>
</table>
</form>
</body>
</html>