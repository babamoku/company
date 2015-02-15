<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>ログアウト</title>
</head>
<body>
<?php
if (isset($_COOKIE["email"])) {
  $errorMessage = "ログアウトしました。";
}
else {
  $errorMessage = "セッションがタイムアウトしました。";
}
$_SESSION = array();
@session_destroy();
?>

<p><?php echo $errorMessage; ?></p>
<p><a href="login.php">ログイン画面に戻る</a></p>
</body>
</html>
