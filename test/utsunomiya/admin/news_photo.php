<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	//ファンクションファイル読み込み
require_once 'parts/function.php';

$id = $_GET['id'];

$result=mysqli_query($sql, "SELECT * From `news` WHERE `id` = '$id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ニュース画像の追加・削除</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/animsition.css"/>
</head>
<body>

<?php include ('php/header.php'); ?> 

<div class="jumbotron">
	<div class="container"><h1>イベントニュース写真追加・削除ページ</h1>
	<p>イベントニュース写真追加・削除ページです。</p>
	<p><a href="news_list.php" class="btn btn-primary btn-lg" role="button">登録中ニュース一覧</a></p>
</div></div>
<div class="container">
  
  <pre class="prettyprint html">ニュース画像の設定</pre>
  <div class="panel panel-default">
  <div class="panel-body">ニュース画像を追加します</div></div>
  

  <div class="text-primary"><span class="news_list_title"><?php echo $newstitle; ?></span>の写真設定です。</div>
  <p class="text-danger">※推奨サイズは横900px 縦600px のJPEG画像となります。</p>
  <div class="news_list_img"><?php
if ($photo1 == $empty) {
	echo '【現在未登録】';
} else {
	echo '<img src="' . $photo1 . '.jpg" alt="photo1" />';
}
?></div>  
  <form action="upload_photo.php" method="post" enctype="multipart/form-data">
  <input class="w_per50" type="file" name="photo1" />
  <input type="hidden" name="id" value="<?php echo $id; ?>" /><br />
  <br />
  <div class="text-danger">※処理に時間がかかる場合があります。ボタンを一度押してしばらくお待ちください。</div>
  <br />
  <input class="btn-info btn-lg" type="submit" value="ニュース画像を登録" />
  </form><p></p>
 <pre class="prettyprint html">ニュース画像を削除します</pre>
  <div class="text-danger">※「ニュース画像を削除」するとデータは復旧できませんのでご注意下さい。</div> 
  
  <a href="news_photo_2.php?id=<?php echo $id; ?>" class="fancybox fancybox.ajax btn-primary btn" >ニュース画像を削除する</a>    
  <br />
 
</div>
  

  


<?php include ('php/footer.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.4" media="screen" />

	<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */
			 $('.fancybox').fancybox();
		
		});
		
	</script>
<script src="js/animsition.min.js"></script>
<?php include ('php/rigft_js.php'); ?>
</body>
</html>
