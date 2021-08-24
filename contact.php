<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ご応募・お問合せ｜婚活応援酒場「相席酒場」</title>
<meta name="description" content="婚活応援酒場「相席酒場」のご応募・お問合せページです。婚活応援酒場「相席酒場」が登場。相席で新しい出会いを見つけよう。女性の方は飲み放題が無料で、更に嬉しい特典も！">
<meta name="keywords" content="居酒屋,相席酒場,飲み放題,無料,婚活応援酒場,ご応募・お問合せ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/vegas.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="format-detection" content="telephone=no">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--マップ　api-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_5woXG29BdXtd_8DDnowpdrFnoV6BLLk"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdn.rawgit.com/ungki/bootstrap.dropdown/3.3.5/dropdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--ヘッダー-->

<!--トップスライダー-->
<script src="js/jquery.bxslider.min.js"></script>
<!--カルーセル-->

<script src="js/vegas.min.js"></script>


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
     { src: 'img/top1.jpg' }, //スライドする画像を配列で設定
     { src: 'img/top2.jpg' },
     { src: 'img/top3.jpg' } 	 	 	 	 
    ],
     delay: 5000, //スライドまでの時間ををミリ秒単位で設定
     timer: false, //タイマーバーの表示/非表示を切り替え
     overlay: 'img/overlays/04.png', //オーバーレイする画像の設定
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

<!--マップ-->
<script>
var myLatlng = new google.maps.LatLng(36.653045, 138.190450);

function initialize() {
  var mapOptions = {
    zoom : 16,
    center : myLatlng,
	mapTypeControl: false,
	styles: [{
		stylers: [
		{
			hue: '#000000' // 色相
		}, {
			saturation: -100 // 彩度
		}, {
			lightness: 0 // 明度
		}, {
			gamma: 0.0 // ガンマ
		}
	  ]
	}]	
  };
  var map = new google.maps.Map(document.getElementById('map1_top'), mapOptions);

  var image = {
    url : 'img/icon.svg',
    scaledSize : new google.maps.Size(80, 80)
    // ↑ここで画像のサイズを指定
  }

  var marker = new google.maps.Marker({
    position : myLatlng,
    map : map,
    icon : image,
	title: '151-A',/*タイトル*/
	animation: google.maps.Animation.DROP/*アニメーション*/ 
  });
 
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>
<!--マップ--> 

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

  <?php include ('php/header.php'); ?>


<div class="page_slideshow_bg">
  <img src="img/logo_2.svg" alt="<?php echo $seo; ?>">
</div>


<div class="page_main">
  <div class="page_base">
    <h2>ご応募・お問合せ</h2> 
    <div class="contact_page_box">
      <div class="wrapper_2">
        <div class="element_contact">
          <div class="contact_page_1 contact_pc"><img src="img/tel.svg"><span style="vertical-align:middle;">0276-46-6000</span></div>
          <div class="contactpage_button"><a href="tel:0276466000" class="btn_contact_tel">Tel</a></div>
        </div>        
        <div class="element_contact">
          <div class="contact_page_1 contact_pc"><img src="img/mail.svg"><a href="mailto:kyujin@aiseki-sakaba.com"><span style="vertical-align:middle;">kyujin@aiseki-sakaba.com</span></a></div>
          <div class="contactpage_button"><a href="mailto:kyujin@aiseki-sakaba.com" class="btn_contact_tel">E-Mail</a></div>
        </div>
        <!--div class="element_contact">
          <div class="contact_page_1 contact_pc"><img src="img/line.svg"><a href="http://line.me/ti/p/17MNsHX88v"><span style="vertical-align:middle;">09072501210</span></a></div>        
          <div class="contactpage_button"><a href="" class="btn_contact_tel">LINE</a></div>
        </div-->                
      </div>
    </div>    
          
  </div><!--page_base-->    
    
</div><!--page_main-->


  







<?php include ('php/footer.php'); ?>

</main>

</body>

</html>