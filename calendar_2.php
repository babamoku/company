<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>会社情報登録</title>
<?php
$db = mysqli_connect("localhost","root","","company") or
die(mysqli_connect_error());
mysqli_set_charset($db,"utf8");


?>



</head>
<body>
<a href="top.php">トップ</a>
<form action="calendar_cofirm_2.php" method="post" name="form01">

<p><input type="submit" value="新規対応登録"></p>

<p>顧客会社検索
<input type="hidden" name="title01" id="title01">
<input type="text" name="word" id="word" value="" readonly="readonly">
<input type="button" value="検索" onClick="window.open('sub2.php','sub','width=640,height=480');return false;">
</p>

<p>対応者検索
<input type="hidden" name="title02" id="title02">
<input type="text" name="word_2" id="word_2" value="" readonly="readonly">
<input type="button" value="検索" onClick="window.open('sub3.php','sub','width=640,height=480');return false;">
</p>

<p><?php echo date("Y年 m月 d日"); ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">週</a>/<a href="#">月</a></p>

</form>
<?php
if (isset($_POST["y"])) {
    $y = intval($_POST["y"]);
    $m = intval($_POST["m"]);
} else {
    $ym_now = date("Ym");
    $y = substr($ym_now, 0, 4);
    $m = substr($ym_now, 4, 2);
}

echo "<form method='POST' action=''>";

echo "<select name='y'>";
for ($i = $y - 2; $i <= $y + 2; $i++) {
    echo "<option";
    if ($i == $y) {
        echo " selected ";
    }
    echo ">$i</option>";
}
echo "</select>年";

echo "<select name='m'>";
for ($i = 3; $i <= 12; $i++) {
    echo "<option";
    if ($i == $m) {
        echo " selected ";
    }
    echo ">$i</option>";
}
echo "</select>月";
echo "<input type='submit' value='表示' name='sub1'>";
echo "</form>";
?>
<table border="1">
<tr>
<th>日</th>
<th>月</th>
<th>火</th>
<th>水</th>
<th>木</th>
<th>金</th>
<th>土</th>
</tr>
<tr>
<?php
$wd1 = date("w", mktime(0, 0, 0, $m, 1, $y));
for ($i = 1; $i <= $wd1; $i++) {
    echo "<td>　</td>";
}

$d = 1;
while (checkdate($m, $d, $y)) {
    $link = "schedule.php?ymd=%04d%02d%02d";
    echo "<td><a href=\"" . sprintf($link, $y, $m, $d) . "\">{$d}</a></td>";

    if (date("w", mktime(0, 0, 0, $m, $d, $y)) == 6) {
        echo "</tr>";

        if (checkdate($m, $d + 1, $y)) {
            echo "<tr>";
        }
    }
    $d++;
}

$wdx = date("w", mktime(0, 0, 0, $m + 1, 0, $y));
for ($i = 1; $i < 7 - $wdx; $i++) {
    echo "<td>　</td>";
}
?>
</tr>
</table>
</form>
</body>
</html>