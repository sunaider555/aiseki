<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	$id = $_POST['id'];

?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>過去のニュース一覧</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/animsition.css"/>
</head>
<body>

<?php include ('php/header.php'); ?>

<div class="jumbotron">
	<div class="container"><h1>ニュース一覧ページ</h1>
	<p>ニュース一覧ページです。新規ニュース登録は『ニュース登録』ボタンをクリックして下さい。 </p>
	<p><a href="news.php" class="btn btn-primary btn-lg" role="button">ニュース登録</a></p>
</div></div>
<div class="container">
  
 
  <pre class="prettyprint html">過去のニュース一覧を編集</pre>
  
  <?php
  $result=mysqli_query($sql, "SELECT * From `news` WHERE blank='1' AND link='4' ORDER by id DESC");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu.php');

//▽表示内容ここから

echo "<div class=\"news_list_box\">
  <div class=\"news_list_ymd\">\n";
echo $wdate;
echo "</div><div class=\"text-danger\">".$newstitle."</div><div class=\"news_list_img\">\n";

	if($photo1 == $empty){
	echo "";
}else{
	echo "<img src=\"".$photo1.".jpg\" alt=\"".$name."\"/>\n";
}
echo "</div><div class=\"news_list_main\">".$input."
  </div>\n";

echo "<p>
    <a href=\"news_edit.php?id=".$id."\" class=\"btn btn-danger\">記事の編集・削除</a> <a href=\"news_photo.php?id=".$id."\" class=\"btn btn-danger\">画像の編集・削除</a>
    </p>
  
      
  </div>";
}
?>


 
</div>
<?php include ('php/footer.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/animsition.min.js"></script>
<?php include ('php/rigft_js.php'); ?>
</body>
</html>
