<?php
//設定ファイル読み込み
require_once 'admin/conf.php';
//ファンクションファイル読み込み
require_once 'admin/parts/function.php';

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>婚活応援酒場「相席酒場 高崎連雀町店」</title>
<meta name="description" content="婚活応援酒場「相席酒場 高崎連雀町店」の店舗情報ページです。婚活応援酒場「相席酒場 高崎連雀町店」が登場。相席で新しい出会いを見つけよう。女性の方は飲み放題が無料で、更に嬉しい特典も！">
<meta name="keywords" content="高崎,群馬,相席,居酒屋,飲み放題,相席酒場">

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

<!--マップ　api-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_5woXG29BdXtd_8DDnowpdrFnoV6BLLk"></script>

<!--Instagram-->
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/instafeed.min.js"></script>
<!--Instagram-->

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

<!-- CSSの読み込み -->
<link rel="stylesheet" href="../photoswaipe/dist/photoswipe.css"/>
<link rel="stylesheet" href="../photoswaipe/default-skin/default-skin.css"/>

<!-- JavaScriptの読み込み -->
<script src="../photoswaipe/dist/photoswipe.min.js"></script>
<script src="../photoswaipe/dist/photoswipe-ui-default.min.js"></script>
<script>
var initPhotoSwipeFromDOM = function(gallerySelector) {

	// parse slide data (url, title, size ...) from DOM elements 
	// (children of gallerySelector)
	var parseThumbnailElements = function(el) {
		var thumbElements = el.childNodes,
			numNodes = thumbElements.length,
			items = [],
			figureEl,
			linkEl,
			size,
			item;

		for(var i = 0; i < numNodes; i++) {

			figureEl = thumbElements[i]; // <figure> element

			// include only element nodes 
			if(figureEl.nodeType !== 1) {
				continue;
			}

			linkEl = figureEl.children[0]; // <a> element

			size = linkEl.getAttribute('data-size').split('x');

			// create slide object
			item = {
				src: linkEl.getAttribute('href'),
				w: parseInt(size[0], 10),
				h: parseInt(size[1], 10)
			};



			if(figureEl.children.length > 1) {
				// <figcaption> content
				item.title = figureEl.children[1].innerHTML; 
			}

			if(linkEl.children.length > 0) {
				// <img> thumbnail element, retrieving thumbnail url
				item.msrc = linkEl.children[0].getAttribute('src');
			} 

			item.el = figureEl; // save link to element for getThumbBoundsFn
			items.push(item);
		}

		return items;
	};

	// find nearest parent element
	var closest = function closest(el, fn) {
		return el && ( fn(el) ? el : closest(el.parentNode, fn) );
	};

	// triggers when user clicks on thumbnail
	var onThumbnailsClick = function(e) {
		e = e || window.event;
		e.preventDefault ? e.preventDefault() : e.returnValue = false;

		var eTarget = e.target || e.srcElement;

		// find root element of slide
		var clickedListItem = closest(eTarget, function(el) {
			return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
		});

		if(!clickedListItem) {
			return;
		}

		// find index of clicked item by looping through all child nodes
		// alternatively, you may define index via data- attribute
		var clickedGallery = clickedListItem.parentNode,
			childNodes = clickedListItem.parentNode.childNodes,
			numChildNodes = childNodes.length,
			nodeIndex = 0,
			index;

		for (var i = 0; i < numChildNodes; i++) {
			if(childNodes[i].nodeType !== 1) { 
				continue; 
			}

			if(childNodes[i] === clickedListItem) {
				index = nodeIndex;
				break;
			}
			nodeIndex++;
		}



		if(index >= 0) {
			// open PhotoSwipe if valid index found
			openPhotoSwipe( index, clickedGallery );
		}
		return false;
	};

	// parse picture index and gallery index from URL (#&pid=1&gid=2)
	var photoswipeParseHash = function() {
		var hash = window.location.hash.substring(1),
		params = {};

		if(hash.length < 5) {
			return params;
		}

		var vars = hash.split('&');
		for (var i = 0; i < vars.length; i++) {
			if(!vars[i]) {
				continue;
			}
			var pair = vars[i].split('=');  
			if(pair.length < 2) {
				continue;
			}		   
			params[pair[0]] = pair[1];
		}

		if(params.gid) {
			params.gid = parseInt(params.gid, 10);
		}

		if(!params.hasOwnProperty('pid')) {
			return params;
		}
		params.pid = parseInt(params.pid, 10);
		return params;
	};

	var openPhotoSwipe = function(index, galleryElement, disableAnimation) {
		var pswpElement = document.querySelectorAll('.pswp')[0],
			gallery,
			options,
			items;

		items = parseThumbnailElements(galleryElement);

		// define options (if needed)
		options = {
			index: index,

			// define gallery index (for URL)
			galleryUID: galleryElement.getAttribute('data-pswp-uid'),

			getThumbBoundsFn: function(index) {
				// See Options -> getThumbBoundsFn section of documentation for more info
				var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
					pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
					rect = thumbnail.getBoundingClientRect(); 

				return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
			}

		};

		if(disableAnimation) {
			options.showAnimationDuration = 0;
		}

		// Pass data to PhotoSwipe and initialize it
		gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
		gallery.init();
	};

	// loop through all gallery elements and bind events
	var galleryElements = document.querySelectorAll( gallerySelector );

	for(var i = 0, l = galleryElements.length; i < l; i++) {
		galleryElements[i].setAttribute('data-pswp-uid', i+1);
		galleryElements[i].onclick = onThumbnailsClick;
	}

	// Parse URL and open gallery if it contains #&pid=3&gid=1
	var hashData = photoswipeParseHash();
	if(hashData.pid > 0 && hashData.gid > 0) {
		openPhotoSwipe( hashData.pid - 1 ,  galleryElements[ hashData.gid - 1 ], true );
	}
};
</script>

<script>
window.onload = function(){
	initPhotoSwipeFromDOM(".my-gallery");
}
</script>

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

<!--マップ-->
<script>
var myLatlng = new google.maps.LatLng(36.324232, 139.007526);

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
    url : '../img/icon.svg',
    scaledSize : new google.maps.Size(80, 80)
    // ↑ここで画像のサイズを指定
  }

  var marker = new google.maps.Marker({
    position : myLatlng,
    map : map,
    icon : image,
	title: '相席酒場',/*タイトル*/
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

<!--Instagram-->
<script src="js/instafeed.min.js"></script>
<script>
var userFeed = new Instafeed({
  get: 'user', //ユーザー名から取得します
  userId: 3859437133, //ユーザーIDを指定
  accessToken: '3859437133.db19382.0211608c0f12423ea9c77d91bdd61d07', //アクセストークンを指定
  limit: 6, //取得投稿の上限を設定
  sortBy: "none", //ランダムで並び替え
  resolution: 'low_resolution', //thumbnail - 150x150 ,low_resolution - 306x306 ,standard_resolution - 612x612
  template: '<li><a href="{{link}}" target="_blank"><img src="{{image}}" alt="{{caption}}"></a></li>',

});
userFeed.run();
</script>

</head>

<body class="drawer drawer--right">

  <?php include ('../php/header_2.php'); ?>


<div class="page_slideshow_bg">
  <img src="../img/logo_2.svg" alt="<?php echo $seo; ?>">
  <div class="page_slideshow_bg_shop">高崎連雀町店</div>
  <div class="page_slideshow_bg_button"><a href="https://contact.app-me.jp/download/137" class="btn_3">アプリ</a></div>
</div>


<div class="page_main">
  <div class="page_base">
    <h2>現在の混雑状況</h2>    
    <div class="page_people_box">
      <div class="wrapper_2">
        <div class="element_top_people">
          <div class="page_people_box_men">男性</div>
          <div class="page_people_box_number"><?php 
	$result=mysqli_query($sql, "SELECT * From `data` WHERE `name2` = 'takasaki'");
	
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
	?><span class="page_people_box_number-2">%</span></div>
        </div>
        <div class="element_top_people">
          <div class="page_people_box_woman">女性</div>
          <div class="page_people_box_number"><?php 
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
	?><span class="page_people_box_number-2">%</span></div>
        </div>
      </div><!--wrapper_2-->
    </div><!--page_people_box-->
    
    <div class="page_people_comment">混雑状況は30分ごとに更新!!</div>
 
  </div><!--page_base-->

  <div class="page_title">NEWS</div>
  <div class="page_base">
    <div class="page_news_area">
      <div class="wrapper">
		  <?php
$result=mysqli_query($sql, "SELECT * From `news` WHERE blank = '1' AND link = '2' ORDER by id desc LIMIT 4");
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
      <div class="page_base_buttonarea"><a href="news.php" class="btn_3">MORE</a></div>
    
    </div><!--page_news_area-->

  </div><!--page_base-->

  <div class="page_title">INSTAGRAM</div>
  <div class="page_base">
  <ul id="instafeed"></ul>
  <div id="clear"></div>
  <div class="page_base_buttonarea"><a href="" class="btn_3">Instagram</a></div>
  </div><!--page_base-->

  <div class="page_title">FLOOR</div>
  <div class="page_base">

    <div class="wrapper my-gallery">
      <figure class="element_floor">
        <a href="../img/takasaki-floor-1.jpg" data-size="900x600" title="">
        <img src="../img/takasaki-floor-1.jpg">
        </a>
      </figure>
      <figure class="element_floor">
        <a href="../img/takasaki-floor-2.jpg" data-size="900x600" title="">
        <img src="../img/takasaki-floor-2.jpg">
        </a>
      </figure>
      <figure class="element_floor">
        <a href="../img/takasaki-floor-3.jpg" data-size="900x600" title="">
        <img src="../img/takasaki-floor-3.jpg">
        </a>
      </figure>
      <figure class="element_floor">
        <a href="../img/takasaki-floor-4.jpg" data-size="900x600" title="">
        <img src="../img/takasaki-floor-4.jpg">
        </a>
      </figure>                             
    </div>
    <div class="clear"></div>

  </div><!--page_base-->  

  <div class="page_title">SHOP DATA</div>
  <div class="page_base">
    <div class="page_shopdata_area">
      <span class="page_shopdata_area_1">Address</span><br />
      群馬県高崎市連雀町4 居酒屋一粋様 2階<br />
      <br />
      <span class="page_shopdata_area_1">Tel</span><br />
      <a href="tel:0273249299" class="tel">027-324-9299</a><br />
      <br />
      <span class="page_shopdata_area_1">Open</span><br />
      平日. 19:00～翌3:00<br />
      週末・祭日前夜. 19:00～翌5:00<br /> 
      <br />
      <span class="page_shopdata_area_1">Closed</span><br />
      カレンダーをご参照下さい<br />         
    </div>
  
  
    <div id="map1_top"></div>
    
    <ul class="page_shopdata_inline-block">
      <li><a href="https://www.facebook.com/aiseki.takasaki/" title=""><img src="../img/facebook.svg" alt="" /></a></li>
      <li><a href="https://www.instagram.com/" title=""><img src="../img/instagram.svg" alt="" /></a></li>
      <li><a href="https://twitter.com/aiseki_ta" title=""><img src="../img/twitter.svg" alt="" /></a></li>
      <li><a href="http://ameblo.jp/" title=""><img src="../img/blog.svg" alt="" /></a></li>
    </ul>
    </div>
    
  </div><!--page_base-->

  <div class="page_base">
    <div class="page_bannerarea">
      <div class="wrapper_2">
        <div class="element_page_banner"><a href="menu.php" class="btn_4">メニュー</a></div>
        <div class="element_page_banner"><a href="calendar.php" class="btn_4">カレンダー</a></div>
        <div class="element_page_banner"><a href="../enjoy.php" class="btn_4">楽しみ方</a></div>
      </div>
    </div> 
  </div><!--top_base-->
    
</div><!--page_main-->


<?php include ('../php/footer.php'); ?>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	<!-- Background of PhotoSwipe. 
		 It's a separate element as animating opacity is faster than rgba(). -->
	<div class="pswp__bg"></div>

	<!-- Slides wrapper with overflow:hidden. -->
	<div class="pswp__scroll-wrap">

		<!-- Container that holds slides. 
			PhotoSwipe keeps only 3 of them in the DOM to save memory.
			Don't modify these 3 pswp__item elements, data is added later on. -->
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>

		<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		<div class="pswp__ui pswp__ui--hidden">

			<div class="pswp__top-bar">

				<!--  Controls are self-explanatory. Order can be changed. -->

				<div class="pswp__counter"></div>

				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

				<button class="pswp__button pswp__button--share" title="Share"></button>

				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

				<!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
				<!-- element will get class pswp__preloader--active when preloader is running -->
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
					  <div class="pswp__preloader__cut">
						<div class="pswp__preloader__donut"></div>
					  </div>
					</div>
				</div>
			</div>

			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div> 
			</div>

			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
			</button>

			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
			</button>

			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>

		</div>

	</div>

</div>

</main>

</body>

</html>