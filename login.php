<?php
require('dbconnect.php');

session_start();

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>顧客管理システム</title>
</head>
<body>
<div id="wrap">
<h1>顧客管理システム</h1>
<h2>ログイン画面</h2>
  <form action="login_in.php" method="post">
    <dl>
      <dt><label for="email">メールアドレス</label></dt>
      <dd><input type="text" name="email" id="email" size="18" maxlength="50"></dd>
      <dt><label for="password">パスワード</label></dt>
      <dd><input type="password" name="password" id="password" size="18" maxlength="16"></dd>
    </dl>
    <input type="submit" value="ログイン">
  </form>
</div>
<!-- #wrapの終了 -->
</body>
</html>
