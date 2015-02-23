
<?php

session_start();

if (!isset($_SESSION["age"])) {
    header("Location: test_top.php");
    exit;
}

$sorry_message =
        "ちょっとあなたの年齢は対象年齢に含まれていません・・・";
$uranai_message[1] =
        "10代のあなたには、PHPをお守り代わりに勉強するのが良いみたい。";
$uranai_message[2] =
        "20代のあなたには、趣味でPHPを使うと良いみたい。";
$uranai_message[3] =
        "30代のあなたには、ビジネススキルとしてPHPを勉強すると良いみたい。";
$uranai_message[4] =
        "40代のあなたには、PHPは新たなフロンティアとなるでしょう。";

$sedai = floor($_SESSION["age"] / 10);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>テスト</title>
</head>
<body>

<?php
if (isset($uranai_message[$sedai])) {
  print($uranai_message[$sedai]);
} else {
  print($sorry_message);
}

?>
</body>
</html>