<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
	
	//ファンクションファイル読み込み
require_once '../parts/function.php';


$n_id = $_GET['n_id'];

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

<title>ホットニュース編集・削除</title>


<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/style2.css"> 	
    <link rel="stylesheet" href="../css/animsition.css"/>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>

</head>
<body>

<?php include ('header.php'); ?> 

<div class="jumbotron">
	<div class="container"><h1><?php echo $name; ?>様ホットニュース編集ページ</h1>
	<p>ホットニュース編集ページです。</p>
	<p><a href="news_list.php?shop_id=<?php echo $shop_id; ?>" class="btn btn-primary btn-lg" role="button">登録中ホットニュース一覧</a></p>
</div></div>
<div class="container">
  
  <pre class="prettyprint html">ホットニュース編集・削除</pre>
  <form action="news_rewrite.php?shop_id=<?php echo $shop_id; ?>" method="post">
     
    <h3 id="usage2" class="page-header">登録日</h3>
    
    <input type="hidden" name="n_id" value="<?php echo $n_id; ?>" />
<input type="hidden" name="photo1n" value="<?php echo $photo1n; ?>" />
<input name="wdate" type="text" class="form-control" value="<?php echo $wdate; ?>">
	   <h3 id="usage2" class="page-header">店舗名</h3>

    <?php echo $name; ?>  
    <h3 id="usage2" class="page-header">タイトル</h3>
    <input name="newstitle" type="text" class="form-control" value="<?php echo $newstitle; ?>" />
    
    <h3 id="usage2" class="page-header">内容
      <?php $input = str_replace("<br />" , "\r\n" , $input); ?><textarea name="input" cols="" rows="6" class="form-control" id="input"><?php echo $input; ?></textarea>
    </h3>
    <input type="hidden" name="operation" value="edit" />
	  <input name="news_shop" type="hidden" value="<?php echo $news_shop; ?>" />
    <input name="jpeg" type="hidden" value="<?php echo $jpeg; ?>" />
<br />
    <br />
    <div class="text-danger">※ニュースの編集後は必ず「ホットニュースを送信」ボタンを押してください。</div>
    <br />
    <input name="submit" type="submit" class="btn-info btn-lg" value="ホットニュースを送信" />
    
  </form>
<p></p>
 
<pre class="prettyprint html">ホットニュースを削除します</pre>
    <div class="text-danger">※「ホットニュースを削除」するとデータは復旧できませんのでご注意下さい。</div> 
    <a href="news_edit_2.php?n_id=<?php echo $n_id; ?>" class="fancybox fancybox.ajax btn-primary btn" >ホットニュースを削除する</a> 
 <p></p>
</div></div>
  

  

<?php include ('../php/footer.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.inview.js"></script>
<script type="text/javascript">
//フェードイン
$(function() {
	$('.ef-fade01').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
	console.log(isInView);
	if(isInView){
		$(this).stop().addClass('fade01');
	}
	else{
		$(this).stop().removeClass('fade01');
	}
});

//フェードイン＋上移動
	$('.ef-fade02').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('fade02');
		}
		else{
			$(this).stop().removeClass('fade02');
		}
	});
	
//ズームイン
$('.ef-zoom').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
	console.log(isInView);
	if(isInView){
		$(this).stop().addClass('zoom');
	}
	else{
		$(this).stop().removeClass('zoom');
	}
});
//３Ｄ回転
$('.ef-rotation').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('rotation');
		}
		else{
			$(this).stop().removeClass('rotation');
		}
	});

});
</script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="../lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="../source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.4" media="screen" />

	<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="../source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */
			 $('.fancybox').fancybox();
		
		});
		
	</script> 
<!-- ▼jQuery-UI -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <!-- ▼jQuery-UI-datepicker -->
    <script src="../js/jquery.ui.datepicker-ja.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" >
 <script>
      $(function() {
        $("#datepicker").datepicker();
      });
      $(function() {
        $("#datepicker_1").datepicker();
        $("#datepicker_1").datepicker("option", "showOn", 'button');
      });
      $(function() {
        $("#datepicker_2").datepicker();
        $("#datepicker_2").datepicker("option", "showOn", 'both');
      });
      $(function() {
        $("#datepicker_3").datepicker();
        $("#datepicker_3").datepicker("option", "showOn", 'both');
        $("#datepicker_3").datepicker("option", "buttonImageOnly", true);
        $("#datepicker_3").datepicker("option", "buttonImage", 'img/ico_calendar.png');
      });
    </script>
    <script src="../js/animsition.min.js"></script>
<?php include ('../php/rigft_js.php'); ?>
</body>
</html>
