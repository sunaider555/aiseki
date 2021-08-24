<?php

	
	//設定ファイル読み込み
	require_once 'admin/conf.php';
//============初期設定============
$last_year = 2037;
$wday_color = "cmt2"; //平日の文字色は黒
$sat_color = "event sat"; //土曜日の文字色は青
$sun_color = "event sun"; //日曜日の文字色は赤
$reg_color = "#cccccc"; //今日の日付の背景色は淡いピンク
//================================

//スーパーグローバル変数対策
if(!isset($PHP_SELF)){ $PHP_SELF = $_SERVER["PHP_SELF"]; }
if(!isset($action)){
	if($_GET['action']){
		$action = $_GET['action'];
	}else{
		$action = $_POST['action'];
	}
}
if(!isset($code)){
	if($_GET['code']){
		$code = $_GET['code'];
	}else{
		$code = $_POST['code'];
	}
}
if(!isset($year)){
	if($_GET['year']){
		$year = $_GET['year'];
	}else{
		$year = $_POST['year'];
	}
}
if(!isset($month)){
	if($_GET['month']){
		$month = $_GET['month'];
	}else{
		$month = $_POST['month'];
	}
}
if(!isset($day)){ $day = $_GET['day']; }
if(!isset($ayear)){ $ayear = $_POST['ayear']; }
if(!isset($amonth)){ $amonth = $_POST['amonth']; }
if(!isset($aday)){ $aday = $_POST['aday']; }
if(!isset($date)){ $date = $_POST['date']; }
if(!isset($comment)){ $comment = $_POST['comment']; }
if(!isset($c_color)){ $c_color = $_POST['c_color']; }
//エスケープ記号対策
$comment = stripslashes($comment);

//変数$yearがセットされていなければ当年
$year = (!isset($year)) ? date("Y") : $year;
//変数$monthがセットされていなければ当月
$month = (!isset($month)) ? date("n") : $month;
//移動用の年月を取得
if($month == 1){
	$pre_month = 12;
	$pre_year = $year - 1;
	$next_month = $month + 1;
	$next_year = $year;
}elseif($month == 12){
	$pre_month = $month - 1;
	$pre_year = $year;
	$next_month = 1;
	$next_year = $year + 1;
}else{
	$pre_month = $month - 1;
	$pre_year = $year;
	$next_month = $month + 1;
	$next_year = $year;
}
//変数$dayがセットされていなければ当日
$day = (!isset($day)) ? date("j") : $day;
$today = date("Ymd"); //今日の日付データ
$data_max = 100; //データ最大記録数
$data_file = '../log.csv';
$horiday_file = '../horiday.dat'; //休日用ファイル
$passwd = '777'; //管理者用パスワード
//書き込み処理
if($action == 'regist'){
	if($comment){
		//ここから書き込みデータの調整
		$date = $ayear . "/" . $amonth . "/" . $aday;
		$code = time(); //現在の秒数をゲット
		$comment = htmlspecialchars($comment);
		$comment = nl2br($comment);
		$comment = str_replace("\r", "", $comment);
		$comment = str_replace("\n", "", $comment);
		//ログファイルの区切文字(",")と区別するために文字コード(&#44)に書き換える。 
		$comment = str_replace(",", "&#44;",$comment);
		//日付の重複をチェック
		$message = file($data_file);
		$chk_flag = 0;
		for($i = 0; $i <= count($message); $i++){
			list($id,$code,$date,$c_color,$comment,$comment2,$photo1,$blank) = split( ",", $message[$i]);
			if($date == $cdate){
				$chk_flag++;
				break;
			}
		}
		unset($message);
		if($chk_flag < 1){
			$message = file($data_file);
			//配列要素を文字列により連結
			$input_msg = implode(",", array($id,$code,$date,$c_color,$comment,$comment2,$photo1,$blank));
			$fp = fopen($data_file, "w");
			rewind($fp);
			fputs($fp, "$input_msg\n");
			//最大記録数の調整
			if($data_max <= count($message)){
				$msg_num = $data_max - 1;
			}else{
				$msg_num = count($message);
			}
			for($i = 0; $i < $msg_num; $i++){
				fputs($fp, $message[$i]);
			}
			fclose($fp);
			unset($message);
		}
	}
//アップデート処理
}elseif($action == 'update'){
	$comment = str_replace(" ", "", $comment);
	$comment = str_replace("　", "", $comment);
	if($comment){
		$repdata = file($data_file);
		$fp = fopen($data_file, "w");
		for($i=0; $i<count($repdata); $i++){
			list($rid,$rcode,$rdate,$rc_color,$rcomment,$rcomment2,$rphoto1,$rblank) = split( ",", $repdata[$i]);
			if ($date == $rdate) {
				$comment = htmlspecialchars($comment);
				$comment = nl2br($comment);
				$comment = str_replace("\r", "", $comment);
				$comment = str_replace("\n", "", $comment);
				$repdata[$i] = "$code,$date,$c_color,$comment\n";
				fputs($fp, $repdata[$i]);
			} else {
				fputs($fp, $repdata[$i]);
			}
		}
		fclose($fp);
	}
//記事削除処理
}elseif($action == 'delete'){
	$deldata = file($data_file);
	$fp = fopen($data_file, "w");
	for($i=0; $i<count($deldata); $i++){
		list($did,$dcode,$ddate,$dc_color,$dcomment,$dcomment2,$dphoto1,$dblank) = split(",", $deldata[$i]);
		if ($code != $dcode) {
			fputs($fp, $deldata[$i]);
		}
	}
	fclose($fp);
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>カレンダー｜婚活応援酒場「相席酒場 高崎連雀町店」</title>
<meta name="description" content="婚活応援酒場「相席酒場 高崎連雀町店」のカレンダーページです。婚活応援酒場「相席酒場 高崎連雀町店」が登場。相席で新しい出会いを見つけよう。女性の方は飲み放題が無料で、更に嬉しい特典も！">
<meta name="keywords" content="高崎,群馬,相席,居酒屋,飲み放題,相席酒場,カレンダー">

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

<!--マップ-->
<script>
var myLatlng = new google.maps.LatLng(36.290399, 139.380014);

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

  <?php include ('../php/header_2.php'); ?>


<div class="page_slideshow_bg">
  <img src="../img/logo_2.svg" alt="<?php echo $seo; ?>">
  <div class="page_slideshow_bg_shop">高崎連雀町店</div>
  <div class="page_slideshow_bg_button"><a href="https://contact.app-me.jp/download/137" class="btn_3">アプリ</a></div>
</div>


<div class="page_main">
  <h2>カレンダー</h2>
    
  <div class="page_base">
    
    <div class="calendar_page_base">  
      <div class="calendar_title"><?php 
	     if($month == '1'){
		echo "January"; 
		}elseif($month == '2'){
		echo "February"; 
		}elseif($month == '3'){
		echo "March"; 
		}elseif($month == '4'){
		echo "April"; 
		}elseif($month == '5'){
		echo "May"; 
		}elseif($month == '6'){
		echo "June"; 
		}elseif($month == '7'){
		echo "July"; 
		}elseif($month == '8'){
		echo "August"; 
		}elseif($month == '9'){
		echo "September"; 
		}elseif($month == '10'){
		echo "October"; 
		}elseif($month == '11'){
		echo "November"; 
		}elseif($month == '12'){
		echo "December"; 
		}
?></div>
        <div id="shop_event">
		  <table class="event_t">
    <?php
//その月の初日のタイムスタンプを取得
$time = mktime(0, 0, 0, $month, 1, $year);
//その月の初日の曜日を取得
$day_of_first = date("w", $time);
//その月の日数を取得
$date_of_month = date("t", $time);
//その月の週数を取得
$week_of_month = ceil($date_of_month / 7);
if(($date_of_month % 7 > 7 - $day_of_first) || ($date_of_month % 7 == 0 && $day_of_first != 0)){
	$week_of_month++;
}
//カレンダーを出力
for($i = 1; $i <= $week_of_month * 7; $i++){
	if($i % 7 == 1){
		echo "";
	}
	if(($i - 1 < $day_of_first) || ($i > $date_of_month + $day_of_first)){
		echo "";
	}else{
		if($i % 7 == 1){
			$color = $sun_color;
		}elseif($i % 7 == 0){
			$color = $sat_color;
		}else{
			$color = $wday_color;
		}
		//日付を整形
		$day_num = $i - $day_of_first;
		$date_str = $year . "" . $month . "" . $day_num;
		$date_str2 = $month . "/" . $day_num;
		
		if($h_flag){ $color = $sun_color; }
		echo "<tr class=\"" . $color . "\">";
		if($date_str == $today){
			echo "<td class= data>";
		}else{
			echo "<td class= data>";
		}
		
		
		
		//祭日データを抽出
		$message = file($horiday_file);
		$h_flag = 0;
		for($j=0; $j<count($message); $j++){
			list($tdate,$h_name) = split( ",", $message[$j]);
			if($date_str2 == $tdate){
				$h_flag++;
				$h_name = chop($h_name);
				break;
			}
		}
		unset($message);


		if($h_flag){ $color = $sun_color; }
		echo "$day_num</td>";
		
		if($today_flag){
			echo "";
		}
		if($h_flag){
			echo "";
		}
		
		if($date_str == $tekisyutu[$i]){	
			
	echo "<td class= naiyou>";			
		
		}else{
			echo "<td class= naiyou>";
$result=mysqli_query($sql, "SELECT * From `news` WHERE sort>=$news_today AND link='2' ORDER BY sort");
while($row=mysqli_fetch_assoc($result)){
include('admin/parts/basic_hensu.php');

$tekisyutu=$sort2;					
			
			if($date_str == $tekisyutu){
				if($blank=='2' || $blank=='3' || $blank=='4'){
			if($blank == '1'){
echo "<div class=\"calendar_page_icon\">NEWS</div>";
}elseif($blank == '2'){
			echo "<div class=\"calendar_page_icon\">イベント</div>";
			}elseif($blank == '3'){
			echo "<div class=\"calendar_page_icon_2\">キャンペーン</div>";
			}elseif($blank == '4'){
			echo "<div class=\"calendar_page_icon_3\">店休日</div>";
			}else{
			echo "";
			}			
			
			echo "<div class=\"calendar_page_title\"><a href=\"calendar2.php?id=".$id."\">" . $newstitle . "</a></div>";
		}
			}
		}
		}
		echo "</td></tr>";
	}
	if($i % 7 == 0){
		echo "";
	}
}
?>
  
</TABLE>
		  <div class="event_back"><?php echo 
			"<A HREF=$PHP_SELF?year=$pre_year&month=$pre_month class=\"btn_5\">".$pre_month."月</A>"; ?></div>
          <div class="event_next"><?php echo 
			"<A HREF=$PHP_SELF?year=$next_year&month=$next_month class=\"btn_5\">".$next_month."月</A>"; ?></div>
        </div>
        <div class="clear"></div>
        
      </div><!--page_base-->  
  </div><!--calendar_page_base-->
    
</div><!--page_main-->


  







<?php include ('../php/footer.php'); ?>

</main>

</body>

</html>