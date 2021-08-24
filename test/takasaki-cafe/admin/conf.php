<?php

//ログイン設定
$login_id="takasaki-cafe";	#ユーザーID
$login_pass="1234";	#ユーザーPASS

//「''」内を変更。サイトURL
$site_url = '';

//「''」内を変更。モバイル版URL
$mobile_url = '';

//「''」内を変更。スマフォ版URL
$smart_url = '';

//「''」内を変更。出勤情報日付切り替えの時間差設定　※-2で2時間遅れで日付切り替え
$jisa = '-3';

//「''」店名URL
$tenmei = "takasakicafe";

//写真サイズ※固定サイズは「変更不可」のところにｱﾘ

$photo_m = 240;	//携帯ページ用メイン
//掲示板用写真サイズ
$photo_bbs = 200;
$photo_bbss = 100;


//「''」内を変更
$sql_server = 'mysql128.phy.lolipop.lan';	/* SQLサーバアドレス */
$sql_database = 'LAA0219176-aiseki';	/* SQLデータベース名 */
$sql_table = 'data';	/* SQLテーブル名 */
$sql_user = 'LAA0219176';	/* SQLログインID */
$sql_pass = 'icdesign';	/* SQLログインパス */


//写真クオリティー
$quality = 90;

//【携帯ページ】キャストリスト表示件数（1ページの最大表示件数）
$page_lmt = '20';

//【pcページ】トップニュース
$page_lmt2 = '5';

//【携帯ページ】掲示板表示件数（1ページの最大表示件数）
$page_lmt_bbs = '3';

//管理者用コピーライト
$copyright = 'Copyright &copy; Monochrome Design Studio';
$copyright_url = 'http://monochrome-ds.com/';

/*////////// 変更はここまで //////////*/
if(! $sql=mysqli_connect("$sql_server", "$sql_user", "$sql_pass", "$sql_database")) {print ("MySQL Connection Failed.\n"); exit;}

if (!mysqli_set_charset($sql, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($sql));
}

/*////////// 以下変更不可　 //////////*/

//写真サイズ
$photo_l = 46;	//出勤管理ページの最小写真(固定)

$php_disp =	'index2.php';					//登録・一覧表示ページ
$php_write = 'write.php';					//新規書込み
$php_rewrite = 'rewrite.php';				//編集書込み
$php_edit = 'edit.php';						//編集ページ
//出勤編集画面色設定

//出勤日切り替え用日付
$tdy = date('md' , time() + $jisa*3600);
$ytd = date('md' , time() + (-24+$jisa)*3600);
$dby = date('md' , time() + (-48+$jisa)*3600);
$twdby = date('md' , time() + (-72+$jisa)*3600);
$thdby = date('md' , time() + (-96+$jisa)*3600);
$fodby = date('md' , time() + (-120+$jisa)*3600);
$fidby = date('mb' , time() + (-144+$jisa)*3600);
//表示期限日比較用
$tdy_8dig = date('Ymd' , time() + $jisa*3600);
//プロフィール登録日用
$yobi8 = date('YmdHis');
//曜日の日本語表記用
$week = array('日','月','火','水','木','金','土');
//日付（本日から6日間分）
$day1 = date('n.j' , time() + $jisa*3600);
$day2 = date('n.j' , time() + (24+$jisa)*3600);
$day3 = date('n.j' , time() + (48+$jisa)*3600);
$day4 = date('n.j' , time() + (72+$jisa)*3600);
$day5 = date('n.j' , time() + (96+$jisa)*3600);
$day6 = date('n.j' , time() + (120+$jisa)*3600);
$day7 = date('n.j' , time() + (144+$jisa)*3600);
$week1 = $week[date('w' , time() + $jisa*3600)];
$week2 = $week[date('w' , time() + (24+$jisa)*3600)];
$week3 = $week[date('w' , time() + (48+$jisa)*3600)];
$week4 = $week[date('w' , time() + (72+$jisa)*3600)];
$week5 = $week[date('w' , time() + (96+$jisa)*3600)];
$week6 = $week[date('w' , time() + (120+$jisa)*3600)];
$week7 = $week[date('w' , time() + (144+$jisa)*3600)];
//空データ
$empty = '';
$edi = date('md' , time() + $jisa*3600);
$edi2 = date('Y/m/d' , time() + $jisa*3600);

$news_today = date('Ymd');


//h1
$h1 = "婚活応援酒場「相席酒場」";
//タイトル
$title = "婚活応援酒場「相席酒場」";
//description
$description = "婚活応援酒場「相席酒場」";
//keywords
$keywords = "居酒屋,相席酒場,飲み放題,無料,婚活応援酒場";
//seo
$seo = "婚活応援酒場「相席酒場」";
//page
$page = "";

?>