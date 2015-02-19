<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>会社情報登録</title>

<script>
function disp(url){

	window.open(url, "window_name", "width=400,height=400,scrollbars=yes");

}

</script>
</head>
<body>
<p><a href="top.php">トップ</a></p>
<form action="" method="post">

<a href="taiou.php"><input type="button" name="taiou" id="taiou" value="新規対応登録"></a>
<p>顧客会社検索<input type="text" name="kensaku" id="kensaku"><a href="sub_2.php" target="window_name" onClick="disp('sub_2.php')"><input type="button" value="検索"></a></p>
<p>対応者検索<input type="text" name="kensaku_2" id="kensaku_2"><a href="sub_3.php" target="window_name" onClick="disp('sub_3.php')"><input type="button" value="検索"></a></p>


</form>
</body>
</html>