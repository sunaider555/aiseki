<?php
//セッションの復元
session_start();

//設定ファイル読み込み
require_once 'conf.php';

//フォームからデータ受け取り
$id = $_POST['id'];
$start = htmlspecialchars($_POST['start'],ENT_QUOTES);
$end = htmlspecialchars($_POST['end'],ENT_QUOTES);
$sort = $_POST['start'];
$sort2 = $_POST['end'];
$time = $_POST['start'];
$newstitle = htmlspecialchars($_POST['newstitle'],ENT_QUOTES);
$input = htmlspecialchars($_POST['input'],ENT_QUOTES);
$photo1 = htmlspecialchars($_POST['photo1'],ENT_QUOTES);
$jpeg = htmlspecialchars($_POST['jpeg'],ENT_QUOTES);
$link = htmlspecialchars($_POST['link'],ENT_QUOTES);
$blank = $_POST['blank'];
//データを整形
$input = mb_convert_kana($input,'KaV','utf-8');

//追加
$input = str_replace('\\' , '' , $input);
//改行コードの前に改行タグを入れる
$input = nl2br($input);
//改行コードを削除
$input = str_replace("\r\n" , "" , $input);

$sort = str_replace('/' , '' , $sort);
$sort = str_replace('(' , '' , $sort);
$sort = str_replace(')' , '' , $sort);
$hankaku1 = preg_replace('/[^0-9a-zA-Z]/', '', $sort);
$sort2 = str_replace('/' , '' , $sort2);
$sort2 = str_replace('(' , '' , $sort2);
$sort2 = str_replace(')' , '' , $sort2);
$hankaku2 = preg_replace('/[^0-9a-zA-Z]/', '', $sort2);

$y = substr($hankaku1,0,4);
$m = substr($hankaku1,4,2);
$d = substr($hankaku1,-2);

$m = (int)$m;
$d = (int)$d;
$sort2 = $y.$m.$d;
?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>最新ニュース設定</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/animsition.css"/>
</head>
<body>

<?php include ('php/header.php'); ?> 

<div class="jumbotron">
	<div class="container"><h1>イベントニュース確認ページ</h1>
	<p>新規イベントニュース登録確認ページです。内容に間違えがなければ、『確定』ボタンを押してください。</p>
	<p><a href="news_list2.php" class="btn btn-primary btn-lg" role="button">登録済みのイベント一覧</a></p>
</div></div>
<div class="container">
  
  <pre class="prettyprint html">新規イベントニュース書き込み確認</pre>
  
  <?php 
  if($blank=='1'){
	echo "";
	}elseif($blank=='2'){
	echo "<h3 id=\"usage2\" class=\"page-header\">イベント内容</h3>
  <p>イベント</p>";
	}elseif($blank=='3'){
	  echo "<h3 id=\"usage2\" class=\"page-header\">イベント内容</h3>
  <p>キャンペーン</p>";
	}elseif($blank=='4'){
	  echo "<h3 id=\"usage2\" class=\"page-header\">イベント内容</h3>
  <p>店休日</p>";
	}else{
	echo "";
	}
   ?>
  <h3 id="usage2" class="page-header">日付 </h3>
  <p><?php echo $start; ?></p>
  <h3 id="usage2" class="page-header">タイトル</h3>
  <p><?php echo $newstitle; ?></p>
  <h3 id="usage2" class="page-header">内容  </h3>
  <p><?php echo $input; ?></p>

    <form action="news_write2.php" method="post">
<p class="text-danger">上記内容でよければ「書込み」ボタンを押してください。</p>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="start" value="<?php echo $start; ?>" />
<input type="hidden" name="end" value="<?php echo $end; ?>" />
<input type="hidden" name="sort" value="<?php echo $hankaku1; ?>" />
<input type="hidden" name="sort2" value="<?php echo $sort2; ?>" />
<input type="hidden" name="time" value="<?php
if($wdate == $empty){
	echo date('Ymd');
}else{
	echo $wdate;
}
?>" />
<input type="hidden" name="newstitle" value="<?php echo $newstitle; ?>" />
<input type="hidden" name="input" value="<?php echo $input; ?>" />
<input type="hidden" name="photo1" value="<?php echo $photo1; ?>" />
<input type="hidden" name="jpeg" value="<?php echo $jpeg; ?>" />
<input type="hidden" name="link" value="3" />
<input type="hidden" name="blank" value="<?php echo $blank; ?>" />
<p><input type="submit" value="書込み" class="btn-info btn-lg" /></p>
</form>    
   



</div>
  

  


<?php include ('php/footer.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/animsition.min.js"></script>
<?php include ('php/rigft_js.php'); ?>

</body>
</html>
