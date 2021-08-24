<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>お店の楽しみ方｜婚活応援酒場「相席酒場」</title>
<meta name="description" content="婚活応援酒場「相席酒場」のお店の楽しみ方ページです。婚活応援酒場「相席酒場」が登場。相席で新しい出会いを見つけよう。女性の方は飲み放題が無料で、更に嬉しい特典も！">
<meta name="keywords" content="居酒屋,相席酒場,飲み放題,無料,婚活応援酒場,お店の楽しみ方">

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
    <h2>お店の楽しみ方</h2>      
  </div><!--page_base-->
  
  <div class="page_title">SYSTEM</div>  
  <div class="page_base">
    <div class="enjoy_page_box">
      <div class="wrapper">
        <div class="element_enjoy">
          <div class="enjoy_page_system_box">
            <div class="enjoy_page_mens">
            MENS
            </div>
            <div class="enjoy_page_system_box_1">相席時</div>
            <div class="enjoy_page_system_box_2">食べ・飲み放題30分</div>
            <div class="enjoy_page_system_box_3"><span class="enjoy_page_system_box_3-2">平日</span> 1500<span class="enjoy_page_system_box_3-2">円（税別）</span></div>
            <div class="enjoy_page_system_box_3"><span class="enjoy_page_system_box_3-2">週末</span> 1800<span class="enjoy_page_system_box_3-2">円（税別）</span></div>
            <div class="enjoy_page_system_box_4">
            相席時は自動的に飲み放題プランとなります。<br />
            相席時の食べ・飲み放題は自動延長となります。
            </div>
            <div class="enjoy_page_system_box_1">基本</div>
            <div class="enjoy_page_system_box_2">単品1杯</div>
            <div class="enjoy_page_system_box_3">500<span class="enjoy_page_system_box_3-2">円（税別）</span></div>
            <div class="enjoy_page_system_box_5">
            相席でない場合は各種単品でご注文となります。<br />
            ※それぞれの店舗や時期によりシステムが異なりますので必ず入店時にご確認下さい。</div>
          </div><!--enjoy_page_system_box-->
        </div><!--element_enjoy-->
        <div class="element_enjoy">
          <div class="enjoy_page_system_box">
            <div class="enjoy_page_ladies">
            LADIES
            </div>
            <div class="enjoy_page_system_box_2">飲み放題 / 時間無制限</div>
            <div class="enjoy_page_system_box_3-3">0<span class="enjoy_page_system_box_3-2">円</span></div>
            <div class="enjoy_page_system_box_4">
            その他チャージ料金、深夜料金が御座いませんのでご安心してご利用下さい。
            </div>
            <div class="enjoy_page_system_box_6">
            <span class="enjoy_page_system_box_6-3">女性で良かった!!</span><br />
            <br />
            女性専用の食べ放題メニューが用意してあります。<br />
            <br />
            <span class="enjoy_page_system_box_6-2">もちろん無料!! 0円です!!</span><br />
            <br />
            タイムサービスでスイーツもありますよ。<br />
            </div>
          </div><!--enjoy_page_system_box-->
        </div><!--element_enjoy-->
      </div><!--wrapper-->
      
      <div class="enjoy_page_system_area"><div class="enjoy_page_system_mens">男性のお客様</div></div>
      <div class="enjoy_page_system_1">
      60分のご滞在でお料理のご注文が無かった場合は、お会計3,000円（税別）のみとなります。
      </div>
      <div class="enjoy_page_system_area_2"><div class="enjoy_page_system_ladies">女性のお客様</div></div>
      <div class="enjoy_page_system_1">
      ご滞在時間に関わらずお料理のご注文が無かった場合は、0円でのお会計となります。
      </div>
      <div class="enjoy_page_system_2">
      ※各種ドリンクはセルフサービスになります。<br />
      ※レジ会計（番号カードをお持ち下さい）<br />
      ※男性の方からのご注文の場合は男性の方へ、女性の方からのご注文は女性の方へのご注文として承ります。<br />
      </div>
      <div class="enjoy_page_system_3">
      男性の伝票・女性の伝票は別々になっております。<br />
      </div>
      <div class="enjoy_page_system_4">
      ― ご注意 ―<br />
      当店の雰囲気に合わないと判断した場合、入店をお断り又は退場をお願いする場合があります。何卒、ご了承下さい。<br />
      </div>
    
    </div>
  </div><!--page_base-->

  <div class="page_title">ENJOY</div>  
  <div class="page_base">
    <div class="enjoy_page_box">
    <div class="enjoy_page_en_1">相席酒場を楽しむ為の</div>
    <div class="enjoy_page_en_2">相席酒場十ヶ条</div>
    <div class="enjoy_page_en_1">初めての方と相席になって頂きます。</div>
    
    <div class="enjoy_page_en_box">
    <div class="enjoy_page_en_3"><span class="enjoy_page_en_3-2">1. </span>HELLO!まずは楽しく皆で乾杯!!</div>
    <div class="enjoy_page_en_3"><span class="enjoy_page_en_3-2">2. </span>I am..... 自己紹介!簡潔に面白く!!</div>
    <div class="enjoy_page_en_3"><span class="enjoy_page_en_3-2">3. </span>お酒の強要はダメ!</div>
    <div class="enjoy_page_en_3"><span class="enjoy_page_en_3-2">4. </span>煙草はマナーを守ってね!</div>
    <div class="enjoy_page_en_3"><span class="enjoy_page_en_3-2">5. </span>下ネタ注意!空気を読んでね(^^)</div>
    <div class="enjoy_page_en_3"><span class="enjoy_page_en_3-2">6. </span>失礼なことは言わない!聞かない!!</div>
    <div class="enjoy_page_en_3"><span class="enjoy_page_en_3-2">7. </span>ショットやゲームで盛り上がろう!!</div>
    <div class="enjoy_page_en_3"><span class="enjoy_page_en_3-2">8. </span>連絡先交換は仲良くなってからね!</div>
    <div class="enjoy_page_en_3"><span class="enjoy_page_en_3-2">9. </span>二次会の段取りはスマートに!</div>
    <div class="enjoy_page_en_3"><span class="enjoy_page_en_3-2">10. </span>とにかく笑顔で楽しもう!</div>                    
    </div>
    
    </div>
  </div><!--page_base-->  
    
</div><!--page_main-->


  







<?php include ('php/footer.php'); ?>

</main>

</body>

</html>