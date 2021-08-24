<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	$id = $_POST['id'];
	$name2 = $_POST['name2'];
	include('parts/function.php');

$name2 = $tenmei;

$result=mysqli_query($sql, "SELECT * From `data` WHERE `name2` = '$name2'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu3.php');

}

?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>管理画面トップ</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/animsition.css"/>
</head>

<body>
<div class="animsition">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- navbar-inverse で黒系ナビゲーションの指定をしています。-->
<!-- navbar-fixed-top でヘッダー固定の指定をしています。-->
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<!--button~はウインドウのサイズが780px以下になった時に表示されます。-->
<a class="navbar-brand" href="ok_login.php">SHOP EDIT TOOL</a>
<!--こちらにサイト名を入れます。-->
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="news.php">ニュース設定</a></li>
	<li><a href="news_list.php">ニュース一覧</a></li>
	<li><a href="news2.php">イベント設定</a></li>
	<li><a href="news_list2.php">イベント一覧</a></li>
	<li><a href="menu.php?name2=<?php echo $tenmei; ?>">メニュー登録</a></li>
	<li><a href="konzatsu.php?name2=<?php echo $tenmei; ?>">現在の混雑状況</a></li>
</ul>
</div>
<!--/.nav-collapse -->
</div>
</div> 
<div class="jumbotron">
	<div class="container"><h1>管理画面トップページ</h1>
	<p>ニュース登録は下記のボタンより登録画面へお進みください。</p>
	<p><a href="news.php" class="btn btn-primary btn-lg" role="button">NEWSを登録する</a></p>
</div></div>
<div class="container">
 
  <aside>
  <form action="write.php" method="post"><input type="hidden" name="id" value="<?php echo $id; ?>" />
  <pre class="prettyprint html">現在の混雑状況登録</pre>
  <aside>
    <h3 id="usage2" class="page-header">
      男性</h3>
      <p>
      <?php 
if($link1 == '1'){
	$man0='selected="selected"';
	}elseif($link1 == '2'){
	$man10='selected="selected"';
	}elseif($link1 == '3'){
	$man20='selected="selected"';
	}elseif($link1 == '4'){
	$man30='selected="selected"';
	}elseif($link1 == '5'){
	$man40='selected="selected"';
	}elseif($link1 == '6'){
	$man50='selected="selected"';
	}elseif($link1 == '7'){
	$man60='selected="selected"';
	}elseif($link1 == '8'){
	$man70='selected="selected"';
	}elseif($link1 == '9'){
	$man80='selected="selected"';
	}elseif($link1 == '10'){
	$man90='selected="selected"';
	}elseif($link1 == '11'){
	$man100='selected="selected"';
	}
	?>
    <select name="link1" class="form-control">
    <option value="1" <?php echo $man0; ?>>0%</option>
    <option value="2" <?php echo $man10; ?>>10%</option>
    <option value="3" <?php echo $man20; ?>>20%</option>
		<option value="4" <?php echo $man30; ?>>30%</option>
		<option value="5" <?php echo $man40; ?>>40%</option>
		<option value="6" <?php echo $man50; ?>>50%</option>
		<option value="7" <?php echo $man60; ?>>60%</option>
		<option value="8" <?php echo $man70; ?>>70%</option>
		<option value="9" <?php echo $man80; ?>>80%</option>
		<option value="10" <?php echo $man90; ?>>90%</option>
		<option value="11" <?php echo $man100; ?>>100%</option>
    </select>
      </p>  
	  <h3 id="usage2" class="page-header">
      女性</h3>
      <p>
      <?php 
if($link2 == '1'){
	$woman0='selected="selected"';
	}elseif($link2 == '2'){
	$woman10='selected="selected"';
	}elseif($link2 == '3'){
	$woman20='selected="selected"';
	}elseif($link2 == '4'){
	$woman30='selected="selected"';
	}elseif($link2 == '5'){
	$woman40='selected="selected"';
	}elseif($link2 == '6'){
	$woman50='selected="selected"';
	}elseif($link2 == '7'){
	$woman60='selected="selected"';
	}elseif($link2 == '8'){
	$woman70='selected="selected"';
	}elseif($link2 == '9'){
	$woman80='selected="selected"';
	}elseif($link2 == '10'){
	$woman90='selected="selected"';
	}elseif($link2 == '11'){
	$woman100='selected="selected"';
	}
	?>
    <select name="link2" class="form-control">
    <option value="1" <?php echo $woman0; ?>>0%</option>
    <option value="2" <?php echo $woman10; ?>>10%</option>
    <option value="3" <?php echo $woman20; ?>>20%</option>
		<option value="4" <?php echo $woman30; ?>>30%</option>
		<option value="5" <?php echo $woman40; ?>>40%</option>
		<option value="6" <?php echo $woman50; ?>>50%</option>
		<option value="7" <?php echo $woman60; ?>>60%</option>
		<option value="8" <?php echo $woman70; ?>>70%</option>
		<option value="9" <?php echo $woman80; ?>>80%</option>
		<option value="10" <?php echo $woman90; ?>>90%</option>
		<option value="10" <?php echo $woman100; ?>>100%</option>
    </select>
      </p>  
    <div class="text-danger">
    ※最後に必ず「登録」ボタンを押して下さい。
    「登録」ボタンを押さないと反映されません。
    </div>
    <hr><input type="hidden" name="name" value="<?php echo $name; ?>" /><input type="hidden" name="name2" value="<?php echo $name2; ?>" /><input type="hidden" name="operation" value="edit" />
  <br>
  <input name="submit" type="submit" class="btn-info btn-lg" value="登録" />
</aside>



 </form>
</aside>

    
</div>
  

  

<div class="container-fluid">
<footer class="popover-title" id="footer">
copyright©2018 Monochrome Design Studio.
</footer></div></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.inview.js"></script>
<script src="js/animsition.min.js"></script>

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
<script>
$(document).ready(function() {
$(".animsition").animsition({
    inClass               :   'fade-in-right', // ロード時のエフェクト
    outClass              :   'fade-out-right', //離脱時のエフェクト
/* 全アニメーションの名前
*  Fade: fade-in fade-out fade-in-up fade-out-up fade-in-down fade-out-down fade-in-left fade-out-left fade-in-right fade-out-right
*  Rotate: rotate-in rotate-out
*  Flip: flip-in-x flip-out-x flip-in-y flip-out-y
*  Zoom: zoom-in zoom-out
*/
inDuration            :    600, //ロード時の演出時間
outDuration           :    500, //離脱時の演出時間
linkElement           :   '.animsition-link', //アニメーションを行う要素
// e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
loading               :    true, //ローディングの有効/無効
loadingParentElement  :   'body', //ローディング要素のラッパー
loadingClass          :   'animsition-loading', //ローディングのクラス
unSupportCss          : [ 'animation-duration',
'-webkit-animation-duration',
'-o-animation-duration'
],
overlay               :   false, //オーバーレイの有効/無効
overlayClass          :   'animsition-overlay-slide', //オーバーレイのクラス
overlayParentElement  :   'body' //オーバーレイ要素のラッパー
});
});
</script>
</body>
</html>
