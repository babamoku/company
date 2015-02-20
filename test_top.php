<?php
$db = mysqli_connect("localhost","root","","company") or
die(mysqli_connect_error());
mysqli_set_charset($db,"utf8");

   // クエリを送信する
$recordSet = mysqli_query($db,'SELECT * FROM k_company LEFT JOIN k_customer ON k_company.company_id = k_customer.id');
$date = mysqli_fetch_assoc($recordSet);

$sql = mysqli_query($db,'SELECT company_name FROM k_company WHERE company_name LIKE "%g%"');
$date_2 = mysqli_fetch_assoc($sql);

   //表示するデータを作成
     while($table = mysqli_fetch_assoc($recordSet)) {
       $tempHtml .= "<tr>";
       $tempHtml .= "<td>".$table["company_name"]."</td>";
       $tempHtml .= "</tr>\n";
     }

   //結果保持用メモリを開放する
   mysql_free_result($result);

 ?>

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

<form name="form2" action="test.php" method="post">
      <input type="text" name="keyword" size="20">
      <input type="submit" name="search" value="検索">
    </form>

    <?= $msg ?>
    <table width = "300" border = "1">
      <tr><td>会社名</td></tr>
      <?= $tempHtml ?>
    </table>
</body>
</html>