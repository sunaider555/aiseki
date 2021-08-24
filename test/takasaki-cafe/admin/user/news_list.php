<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
	
	$shop_id = $_GET['shop_id'];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `shop_id` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>過去のホットニュース一覧</title>

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/style2.css">
<link rel="stylesheet" href="../css/animsition.css"/>
</head>
<body>

<?php include ('header.php'); ?>

<div class="jumbotron">
	<div class="container"><h1>ようこそ<?php echo $name; ?>様</h1>
	<p>ホットニュース一覧ページです。新規ニュース登録は『ホットニュース登録』ボタンをクリックして下さい。 </p>
	<p><a href="news.php?shop_id=<?php echo $shop_id; ?>" class="btn btn-primary btn-lg" role="button">ホットニュース登録</a></p>
</div></div>
<div class="container">
  
 
  <pre class="prettyprint html">過去のホットニュース一覧</pre>
  
  <?php
  $result=mysqli_query($sql, "SELECT * From `news` WHERE `news_shop` = '$no' ORDER by n_id DESC");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu6.php');

//▽表示内容ここから

echo "<div class=\"news_list_box\">
  <div class=\"news_list_ymd\">\n";
echo $wdate;
echo "</div><div class=\"text-danger\">".$newstitle."</div><div class=\"news_list_img\">\n";

	if($photo1n == $empty){
	echo "";
}else{
	echo "<img src=\"../".$photo1n.".jpg\" alt=\"".$name."\"/>\n";
}
echo "</div>\n";

echo "<p>
    <a href=\"news_edit.php?n_id=".$n_id."\" class=\"btn btn-danger\">記事の編集・削除</a>　<a href=\"news_photo.php?n_id=".$n_id."\" class=\"btn btn-danger\">写真の編集・削除</a>
    </p>
  
  
      
  </div>";
}
?>


 
</div>
<?php include ('../php/footer.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/animsition.min.js"></script>
<?php include ('php/rigft_js.php'); ?>
</body>
</html>
