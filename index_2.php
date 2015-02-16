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

<script>
//IDからテーブルを取得
var table = document.getElementById("table_id");
/**
 * 行追加
 */
function insertRow(id) {
    // テーブル取得
    var table = document.getElementById(id);
    // 行を行末に追加
    var row = table.insertRow(-1);
    // セルの挿入
    var cell1 = row.insertCell(-1);
    var cell2 = row.insertCell(-1);
    var cell3 = row.insertCell(-1);
    // ボタン用 HTML
    var button = '<input type="button" value="行削除" onclick="deleteRow(this)" />';

    // 行数取得
    var row_len = table.rows.length;

    // セルの内容入力
    cell1.innerHTML = button;
    cell2.innerHTML = row_len + "-" + 1;
    cell3.innerHTML = row_len + "-" + 2;
}
/**
 * 行削除
 */
function deleteRow(obj) {
    // 削除ボタンを押下された行を取得
    tr = obj.parentNode.parentNode;
    // trのインデックスを取得して行を削除する
    tr.parentNode.deleteRow(tr.sectionRowIndex);
}

/**
 * 列追加
 */
function insertColumn(id) {
    // テーブル取得
    var table = document.getElementById(id);
    // 行数取得
    var rows = table.rows.length;

    // 各行末尾にセルを追加
    for ( var i = 0; i < rows; i++) {
        var cell = table.rows[i].insertCell(-1);
        var cols = table.rows[i].cells.length;
        if (cols > 10) {
            continue;
        }
        cell.innerHTML = (i + 1) + '-' + (cols - 1);
    }
}
/**
 * 列削除
 */
function deleteColumn(id) {
    // テーブル取得
    var table = document.getElementById(id);
    // 行数取得
    var rows = table.rows.length;

    // 各行末のセルを削除
    for ( var i = 0; i < rows; i++) {
        var cols = table.rows[i].cells.length;
        if (cols < 2) {
            continue;
        }
        table.rows[i].deleteCell(-1);
    }
}

</script>


<form action="" method="post">
<table border="1" height="600" id="sa,ple1_table">
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
  <td colspan="2"><label for="special_text">特記事項</label><br /><textarea name="special_text" cols="25" rows="" ></textarea>
  <br />
  <input type="submit" value="登録"></td>
</tr>


</table>
</form>

</body>
</html>






















