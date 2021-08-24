<?php
//設定ファイル読み込み
require_once 'admin/conf.php';
?>
<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>婚活応援酒場「相席酒場」</title>
<meta name="description" content="婚活応援酒場「相席酒場」の公式ホームページです。婚活応援酒場「相席酒場」が登場。相席で新しい出会いを見つけよう。女性の方は飲み放題が無料で、更に嬉しい特典も！">
<meta name="keywords" content="居酒屋,相席酒場,飲み放題,無料,婚活応援酒場">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/jquery.bxslider.css" />
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/vegas.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

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
<script src="js/jquery.bxslider.min.js"></script>
<!--カルーセル-->

<script src="js/vegas.min.js"></script>

<script src="js/jquery.cookie.js"></script>

<!--フェード　プラグイン-->
<script>
$(function() {
	var h = $(window).height(); //ブラウザウィンドウの高さを取得
	$('#main-contents').css('display','none'); //初期状態ではメインコンテンツを非表示
	$('#topfade-bg ,#topfade').height(h).css('display','block'); //ウィンドウの高さに合わせでローディング画面を表示
	});
	$(window).load(function () {
		$('#topfade-bg').delay(1000).fadeOut(500); //$('#loader-bg').fadeOut(800);でも可
		$('#topfade').delay(800).fadeOut(300); //$('#loader').fadeOut(300);でも可
		$('#main-contents').css('display', 'block'); // ページ読み込みが終わったらメインコンテンツを表示する
		});
		$(function(){
			setTimeout('stopload()',4000);　//いつまでもローディング状態にならないように3秒で強制表示させる
			});
			function stopload(){ //強制表示の関数
			$('#main-contents').css('display','block');
			$('#topfade-bg').delay(1000).fadeOut(500);
			$('#topfade').delay(800).fadeOut(300);
}
</script>

<script>
$(function(){
    if($.cookie("access")){
        $('#topfade-bg').css({display:'none'});
    }
    $(window).load(function(){
        $.cookie("access",$('body').addClass('access'));
    })
});
</script>

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
  $('.top_slideshow_bg').vegas({ //背景画像でスライドショーしたい場所の設定
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

<div id="topfade-bg"> 
<div id="topfade">
<div id="" class="top-animation animated flipOutY"><img src="img/logo.svg" alt=""></div>
</div>
</div>

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <!--li class="drawer-dropdown_top"><a class="drawer-brand drawer-brand_shop" href="ota/" title="相席酒場 太田店">太田店</a></li-->
        <!--li><a class="drawer-brand drawer-brand_shop" href="takasaki/" title="相席酒場 高崎連雀町店">高崎連雀町店</a></li-->
        <li><a class="drawer-brand drawer-brand_shop" href="takasaki-cafe/" title="相席カフェ 高崎駅西口店">高崎駅西口店</a></li>             
        <li><a class="drawer-brand" href="/" title="<?php echo $seo; ?>">ホーム</a></li>
        <li><a class="drawer-brand" href="about.php" title="<?php echo $seo; ?>相席酒場とは">相席酒場とは？</a></li>
        <li><a class="drawer-brand" href="enjoy.php" title="<?php echo $seo; ?>お店の楽しみ方">お店の楽しみ方</a></li>                                        
        <!--li class="drawer-dropdown"><a class="drawer-menu-item" href="#" data-toggle="dropdown" title="">店舗一覧 <span class="drawer-caret"></span></a>
          <ul class="drawer-dropdown-menu">
            <li><a class="drawer-dropdown-menu-item" href="ota/" title="相席酒場 太田店">太田店</a></li>
            <li><a class="drawer-dropdown-menu-item" href="takasaki/" title="相席酒場 高崎連雀町店">高崎連雀町店</a></li>           
            <li><a class="drawer-dropdown-menu-item" href="takasaki-cafe/" title="相席カフェ 高崎駅西口店">高崎駅西口店</a></li> 
            <li><a class="drawer-dropdown-menu-item" href="utsunomiya/" title="相席酒場 宇都宮店">宇都宮店</a></li>
          </ul>
        </li-->                     
        <li><a class="drawer-brand" href="recruit.php" title="<?php echo $seo; ?>求人情報">求人情報</a></li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="/" title=""><img src="img/logo.svg" alt=""></a></h1>
    <li class="menu__single">
      <a href="/" title="<?php echo $seo; ?>">ホーム</a>
    </li>
    <li class="menu__single">
      <a href="about.php" title="<?php echo $seo; ?>相席酒場とは？">相席酒場とは？</a>
    </li>
    <li class="menu__single">
      <a href="enjoy.php" title="<?php echo $seo; ?>お店の楽しみ方">お店の楽しみ方</a>
    </li>        
    <li class="menu__single">
        <a href="#" class="init-bottom" title="">店舗一覧</a>
        <ul class="menu__second-level">                    
            <li><a href="takasaki-cafe/" title="相席カフェ 高崎駅西口店">高崎駅西口店</a></li>   
        </ul>
    </li>
    <li class="menu__single">
      <a href="recruit.php" title="<?php echo $seo; ?>求人情報">求人情報</a>
    </li>                       
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="/" title="<?php echo $seo; ?>"><img src="img/logo.svg" alt="<?php echo $seo; ?>"></a></h1></div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>


<div class="top_slideshow_bg">
  <img src="img/logo_2.svg" alt="<?php echo $seo; ?>">
</div>


<div id="main-contents">
  <div class="top_base">
    <h2>店舗情報</h2>
    <div class="wrapper_2">
      <div class="element_top">
        <a href="takasaki-cafe/">
          <div class="top_shoplist_takasaki-cafe">
          <img src="img/logo_cafe.svg" alt=""><br />
          高崎駅西口店
          </div>
        </a>
        <div class="top_shoplist_people_box">
          <div class="wrapper_2">
            <div class="element_top_people">
              <div class="top_shoplist_people_box_men">男性</div>
              <div class="top_shoplist_people_box_number"><?php 
	$result=mysqli_query($sql, "SELECT * From `data` WHERE `name2` = 'takasakicafe'");
	
while($row=mysqli_fetch_assoc($result)){
include('admin/parts/basic_hensu3.php');
		}
if($link1 == '1'){
	$man='0';
	}elseif($link1 == '2'){
	$man='10';
	}elseif($link1 == '3'){
	$man='20';
	}elseif($link1 == '4'){
	$man='30';
	}elseif($link1 == '5'){
	$man='40';
	}elseif($link1 == '6'){
	$man='50';
	}elseif($link1 == '7'){
	$man='60';
	}elseif($link1 == '8'){
	$man='70';
	}elseif($link1 == '9'){
	$man='80';
	}elseif($link1 == '10'){
	$man='90';
	}elseif($link1 == '11'){
	$man='100';
	}
			  echo $man;
	?><span class="top_shoplist_people_box_number-2">%</span></div>
            </div>
            <div class="element_top_people">
              <div class="top_shoplist_people_box_woman">女性</div>
              <div class="top_shoplist_people_box_number"><?php 
	$result=mysqli_query($sql, "SELECT * From `data` WHERE `name2` = 'takasakicafe'");
	
while($row=mysqli_fetch_assoc($result)){
include('admin/parts/basic_hensu3.php');
		}
if($link2 == '1'){
	$woman='0';
	}elseif($link2 == '2'){
	$woman='10';
	}elseif($link2 == '3'){
	$woman='20';
	}elseif($link2 == '4'){
	$woman='30';
	}elseif($link2 == '5'){
	$woman='40';
	}elseif($link2 == '6'){
	$woman='50';
	}elseif($link2 == '7'){
	$woman='60';
	}elseif($link2 == '8'){
	$woman='70';
	}elseif($link2 == '9'){
	$woman='80';
	}elseif($link2 == '10'){
	$woman='90';
	}elseif($link2 == '11'){
	$woman='100';
	}
			  echo $woman;
	?><span class="top_shoplist_people_box_number-2">%</span></div>
            </div>            
          </div><!--wrapper_2-->
        </div><!--top_shoplist_people_box-->
        <a href="https://contact.app-me.jp/download/136" class="btn_1">アプリ DL</a>
      
      </div><!--element_top--> 
                       
    </div><!--wrapper_2-->
    
  </div><!--top_base-->
  
  <div class="top_shoplist_about_bg">
    <div class="top_base">
      <h2>相席酒場とは？</h2>
      
      <div class="top_shoplist_about_1">他のお客様と相席になる居酒屋です。</div>
      
      <div class="top_shoplist_about_2">
      相席酒場は初めて会う他のお客様と相席になり、一緒にお酒を楽しむ洋風居酒屋です。<br />
      知らない人と相席になることで新しい出会いや発見・楽しみが見つかるはず。<br />
      <br />
      <span class="top_shoplist_about_3">友達作りや恋人作り、婚活等たくさんの人との出会いの幅を広げます。<br />
      女子会の2次会等にもお気軽にご利用下さい。</span><br />
      <br />
      飲んで・食べてワイワイ気軽に出会いを楽しんで下さい。
      </div>
    
    </div><!--top_base-->

  </div><!--top_shoplist_about_bg-->

  <div class="top_base">
    <div class="top_bannerarea">
      <div class="wrapper_2">
        <div class="element_top_banner"><a href="enjoy.php" class="btn_2">楽しみ方</a></div>
        <div class="element_top_banner"><a href="recruit.php" class="btn_2">求人情報</a></div>
      </div>

      <div class="ikinari_banner">
		  <a href="https://public-bar-stella.com/" target="_blank"><img src="img/stella.jpg"></a>
      </div>
    </div> 
  </div><!--top_base-->







<div id="footer">
  <div class="page-side">
    <p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
  </div>

  <div class="footer_in">
    <!--div class="footer_title">OFFICIAL LINK</div>
    <ul class="inline-block">
      <li><a href="" title=""><img src="img/footer_logo_ryukyu.svg" alt="" /></a></li>
    </ul-->
    
    <p>© 2018 aisekisakaba.</p> 
      
  </div>  
</div>

</div>

</main>

</body>

</html>