<?php
$db = mysqli_connect("localhost","root","","company") or
die(mysqli_connect_error());
mysqli_set_charset($db,"utf8");

$sql = mysqli_query($db,'select created_at from k_matter where created_at');
$time = mysqli_fetch_assoc($sql);

$sql = mysqli_query($db,'select company_name from k_company where company_name');
$name = mysqli_fetch_assoc($sql);


foreach($time as $key =>$value){
	echo $value ;
}



$py = filter_input(INPUT_GET, 'y');
$pm = filter_input(INPUT_GET, 'm');

try {
     $dt      = new DateTime("$py-$pm-1 00:00:00");
     $dt_prev = clone $dt;
     $dt_next = clone $dt;
     $dt_prev->sub(new DateInterval('P1M'));
     $dt_next->add(new DateInterval('P1M'));
 } catch (Exception $e) {
     $dt      = new DateTime('first day of this month 00:00:00');
     $dt_prev = clone $dt;
     $dt_next = clone $dt;
     $dt_prev->sub(new DateInterval('P1M'));
     $dt_next->add(new DateInterval('P1M'));
 }

 $py      = $dt->format('Y');
 $pm      = $dt->format('n');
 $current = $dt->format('Y年n月');
 $prev    = $dt_prev->format('?\y=Y&\a\mp;\m=n');
 $next    = $dt_next->format('?\y=Y&\a\mp;\m=n');


 $max    = (int)$dt->format('t');
 $before = (int)$dt->format('w');
 $after  = (7 - ($before + $max) % 7) % 7;
 $today  = (int)date_create()->format('d');


$hl = !$dt->diff(new DateTime('first day of this month 00:00:00'))->days;


 $rows = array_chunk(array_merge(
     $before ? array_fill(0, $before, '') : array(),
     range(1, $max),
     $after ? array_fill(0, $after, '') : array()
 ), 7);

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
<a href="top.php">トップ</a>
<form action="" method="post" name="form01">

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
      <table border="1">
        <tr>
          <th colspan="2"><a href="<?=$prev?>">前月</a></th>
          <th colspan="3"><?=$current?></th>
          <th colspan="2"><a href="<?=$next?>">翌月</a></th>
        </tr>
        <tr>
          <th class="sun">日</th>
          <th>月</th>
          <th>火</th>
          <th>水</th>
          <th>木</th>
          <th>金</th>
          <th class="sat">土</th>
        </tr>
<?php foreach ($rows as $row): ?>
        <tr>
<?php foreach ($row as $cell): ?>
<?php if ($hl && $cell === $today): ?>
          <td class="today"><?=$cell?></td>
<?php else: ?>
          <td><?=$cell?><br />



          </td>
<?php endif; ?>
<?php endforeach; ?>
        </tr>
<?php endforeach; ?>
      </table>


</form>
</body>
</html>