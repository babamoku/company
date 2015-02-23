<?php
if(isset($_POST["uranai"])){
	$age = mb_convert_kana($_POST["age"], "a");
	$error_message = array();
if(is_numeric($age) == false){
	$error_message[] = "年齢を数字で入力してください";
  }elseif ($age < 1 || $age > 120){
	$error_message[] = "年齢は１歳から１２０歳の範囲で入力してください";
	}

if(!count($error_message)){
	session_start();
	$_SESSION["age"] = $age;
header("Location: test.php");
exit();
}
}else{
	$age = 25;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" type="text/css" href="index.css">
<title>test2</title>
</head>
<body>

<form action="test_top.php" method="post">
年齢を教えてください：
<input type="text" name="age" value="<?php echo $age; ?>">
<input type="submit" name="uranai" value="占う">
</form>
</body>
</html>