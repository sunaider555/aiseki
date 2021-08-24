<?php
//設定ファイル読み込み
require_once 'admin/conf.php';
//ファンクションファイル読み込み
require_once 'admin/parts/function.php';

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ニュース一覧｜婚活応援酒場「相席カフェ 高崎駅西口店」</title>
<meta name="description" content="婚活応援酒場「相席カフェ 高崎駅西口店」のニュース一覧ページです。婚活応援酒場「相席カフェ 高崎駅西口店」が登場。相席で新しい出会いを見つけよう。女性の方は飲み放題が無料で、更に嬉しい特典も！">
<meta name="keywords" content="高崎,群馬,相席,居酒屋,飲み放題,相席カフェ,ニュース一覧">

<link rel="shortcut icon" href="../img/favicon.ico">
<link rel="apple-touch-icon" href="../img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/drawer.min.css">
<link rel="stylesheet" href="../css/vegas.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

<link rel="canonical" href="">

<meta name="format-detection" content="telephone=no">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdn.rawgit.com/ungki/bootstrap.dropdown/3.3.5/dropdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--ヘッダー-->

<!--トップスライダー-->
<script src="../js/jquery.bxslider.min.js"></script>
<!--カルーセル-->

<script src="../js/vegas.min.js"></script>


<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('#global'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.drawer-hamburger'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.header_space'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>
<!--ヘッダー　プラグイン-->

<!--スライドショー　プラグイン-->
<script>
$(function(){
  $('.page_slideshow_bg').vegas({ //背景画像でスライドショーしたい場所の設定
    slides: [
     { src: '../img/top1.jpg' }, //スライドする画像を配列で設定
     { src: '../img/top2.jpg' },
     { src: '../img/top3.jpg' } 	 	 	 	 
    ],
     delay: 5000, //スライドまでの時間ををミリ秒単位で設定
     timer: false, //タイマーバーの表示/非表示を切り替え
     overlay: '../img/overlays/04.png', //オーバーレイする画像の設定
     animation: 'random', //スライドのアニメーションを設定
     transition: 'flash', //スライド間のエフェクトを設定
	 shuffle: true, //シャッフル
     transitionDuration: 2000 //エフェクト時間をミリ秒単位で設定
  });
});
</script>

<!--アニメーション　プラグイン-->
<script>
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 50){
                $(this).addClass('scrollin');
            }
        });
    });
});
</script>
<!--アニメーション　プラグイン-->

<!--サイド　プラグイン-->
<script>
$(function() {
var topBtn = $('#page-top');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
//スクロールしてトップ
    topBtn.click(function () {
	$('body,html').animate({
	scrollTop: 0}, 500);
		return false;
    });
});
</script>
<!--サイド　プラグイン-->

</head>

<body class="drawer drawer--right">

  <?php include ('../php/header_2.php'); ?>


<div class="page_slideshow_bg">
  <img src="../img/logo_cafe_2.svg" alt="<?php echo $seo; ?>">
  <div class="page_slideshow_bg_shop">高崎駅西口店</div>
  <div class="page_slideshow_bg_button"><a href="https://contact.app-me.jp/download/136" class="btn_3">アプリ</a></div>
</div>


<div class="page_main">
  <h2>ニュース一覧</h2>
    
  <div class="page_base">
    <div class="page_news_area">
      <div class="wrapper">
       <?php
$result=mysqli_query($sql, "SELECT * From `news` WHERE blank = '1' AND link = '3' ORDER by id desc");
$cnt=mysqli_num_rows($result);

//while(list($key,$line)=each($datacsv)){
while($row=mysqli_fetch_assoc($result)){
include('admin/parts/basic_hensu.php');


	
	
	echo "<div class=\"element_news\">\n";
	if($blank == '1'){
	echo "<a href=\"news2.php?id=".$id."\"><div class=\"page_news_box\"><div class=\"trimming\">";
}else{
	echo "<a href=\"calendar2.php?id=".$id."\"><div class=\"page_news_box\"><div class=\"trimming\">\n";
}
	if($photo1 == $empty){
	echo "<img src=\"admin/photo/no_photo.jpg\" alt=\"".$name."\"/>";
}else{
	echo "<img src=\"admin/".$photo1.".jpg\" alt=\"".$name."\"/>\n";
}
	echo "</div><div class=\"page_news_ymd\">".$start."</div><div class=\"page_news_title\">";
	
	echo "".$newstitle."</div></div>";
		echo "</a></div>";
		  	
}

?>                                                                     
      </div><!--wrapper-->
    
    </div><!--page_news_area-->

  </div><!--page_base-->
    
</div><!--page_main-->


  







<?php include ('../php/footer.php'); ?>

</main>

</body>

</html>