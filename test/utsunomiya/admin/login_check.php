<?php
	//セッションの復元
	session_start();
	
		//設定ファイル読み込み
	require_once 'conf.php';
	
	//ログインチェック
	if ($_SESSION['login'] != 'OK') {
		//ログインしていないメッセージを表示する
		
		echo <<< GOLGO
		<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>エラー</title>


<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">


</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- navbar-inverse で黒系ナビゲーションの指定をしています。-->
<!-- navbar-fixed-top でヘッダー固定の指定をしています。-->
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<!--button~はウインドウのサイズが780px以下になった時に表示されます。-->
<a class="navbar-brand" href="#">CAST EDIT TOOL</a>
<!--こちらにサイト名を入れます。-->
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="ok_login.php">ホーム</a></li>
<li><a href="schedule.php">当日出勤設定</a></li>
                <li><a href="schedule_2.php">3日間出勤設定</a></li>
                <li><a href="cast.php">キャスト登録</a></li>
                <li><a href="cast_edit.php">キャスト編集・削除</a></li>
                <li><a href="cast_sort.php">キャスト並び替え</a></li>
                <li><a href="news.php">ニュース設定</a></li>
               
</ul>
</div>
<!--/.nav-collapse -->
</div>
</div>

<div class="jumbotron">
	<div class="container"><h1>ログインエラー</h1>
	<p>ログインしていません。</p>
	<p><a href="index.php" class="btn btn-primary btn-lg" role="button">ログイン画面を開く</a></p>
</div></div>
<div class="container">
  
  
  <div class="error_txt">
  ※ERROR 2<br />
  ログインエラー<br />
  ログインしていません。
  </div>  
 </div>
  

GOLGO;

echo "<div class=\"container-fluid\">
<footer class=\"popover-title\" id=\"footer\"><a href=\"".$copyright_url."\" target=\"_blank\">".$copyright."</a></footer></div>";
echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>\n";




		
		echo '</body>';
		echo '</html>';
		
		//終了
		exit();
	}
?>