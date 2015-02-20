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

if (isset($_GET["ymd"])) {
	$ymd = basename($_GET["ymd"]);
	$y = intval(substr($ymd, 0, 4));
	$m = intval(substr($ymd, 4, 2));
	$d = intval(substr($ymd, 6, 2));
	$disp_ymd = "{$y}年{$m}月{$d}日のスケジュール";

	$file_name = "data/{$ymd}.txt";
	if (file_exists($file_name)) {
		$schedule = file_get_contents($file_name);
	} else {
		$schedule = "";
	}
} else {
	header("Location: calendar.php");
}
if (isset($_POST["action"]) and $_POST["action"] == "更新する") {
	$schedule = htmlspecialchars($_POST["schedule"], ENT_QUOTES, "UTF-8");

	if (!empty($schedule)) {
		file_put_contents($file_name, $schedule);
	} else {
		if (file_exists($file_name)) {
			unlink($file_name);
		}
	}
	header("Location: calendar.php");
}
?>

</head>
<body>
<form method="POST" action="">
  <table>
    <tr>
      <td><?php echo $disp_ymd; ?></td>
    </tr>
    <tr>
      <td>
      <textarea rows="10" cols="50" name="schedule"><?php echo $schedule; ?></textarea>
      </td>
    </tr>
    <tr>
      <td>
      <input type="submit" name="action" value="更新する">
      <input type="button" name="back" onClick="history.back()" value="戻る">
      </td>
    </tr>
  </table>
  </form>
</body>
</html>