<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';

	$n_id = $_GET['n_id'];
	
include('parts/function.php');

$result=mysqli_query($sql, "SELECT * From `news` WHERE `n_id` = '$n_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu6.php');
}
$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `no` = '$news_shop'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
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
  <h3><?php echo $newstitle; ?>のニュースを削除します<br />
  本当に削除しますか？</h3>
 

<form action="news_rewrite2.php?shop_id=<?php echo $shop_id; ?>" method="post">
<input type="hidden" name="n_id" value="<?php echo $n_id; ?>" />
<input type="hidden" name="operation" value="delete" />
    
    <input class="btn-info btn-lg" type="submit" value="削除する" />
    </form>

</div>

</body>
</html>
