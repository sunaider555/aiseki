<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';

	$id = $_GET['id'];
	
include('parts/function.php');

$result=mysqli_query($sql, "SELECT * From `news` WHERE `id` = '$id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu.php');
}


?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ニュースを削除</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">


</head>
<body>
<div class="container">

　<div class="text-center">
  <h3>イベントを削除します<br />
  本当に削除しますか？</h3>
 

<form action="news_rewrite2_b.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="operation" value="delete" />
    
    <input class="btn-info btn-lg" type="submit" value="削除する" />
    </form>

</div>

</body>
</html>
