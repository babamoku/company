 <?php
  //ファイルを読み込み
$db = mysqli_connect("localhost","root","","company") or
die(mysqli_connect_error());
mysqli_set_charset($db,"utf8");

  //データを取得する
  $keyword = $_POST['keyword'];

  //抽出条件を組み立てる
  if(!empty($keyword)){
    $where = "WHERE ";
    $where.= "company_name LIKE '%".$keyword."%'";
  }else{
    print "<html>";
    print "<head><title>未入力</title></head>";
    print "<body>";
    print "検索キーワードが入力されていません。";
    print "<p><a href=\"test_top.php\" target=\"_self\">全件表示へ</a><p>";
    print "</body>";
    print "</html>";
    exit;
  }

  // クエリを送信する
  $sql = "SELECT company_name FROM k_company ".$where;
  $sql .= " ORDER BY company_name";
  $result = executeQuery($sql);

  //結果セットの行数を取得する
  $rows = mysql_num_rows($result);

  //表示するデータを作成
  if($rows){
    while($row = mysql_fetch_array($result)) {
      $tempHtml .= "<tr>";
      $tempHtml .= "<td>".$row["company_name"]."</td>";

      $tempHtml .= "</tr>\n";
    }
    $msg = $rows."件のデータがあります。";
  }else{
    $msg = "データがありません。";
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
      <tr bgcolor="##ccffcc"><td>PREF_CD</td><td>PREF_NAME</td><td colspan="2">EDIT</td></tr>
      <?= $tempHtml ?>
      <form name="form1" action="insert.php" method="post">
        <tr>
          <td><input type="text" name="cd" id="cd"></td>
          <td><input type="text" name="name"></td>
          <td colspan="2">
            <input type="submit" name="insert" value="追加"><input type="reset" value="リセット">
          </td>
        </tr>
      </form>
    </table>
    <p><a href="test_top.php" target="_self">全件表示へ</a><p>
</body>
</html>