<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	//ファンクションファイル読み込み
require_once 'parts/function.php';

$id = $_GET['id'];

$result=mysqli_query($sql, "SELECT * From `news` WHERE `id` = '$id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ニュース編集・削除</title>


<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css"> 	
    <link rel="stylesheet" href="css/animsition.css"/>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>

</head>
<body>

<?php include ('php/header.php'); ?> 

<div class="jumbotron">
	<div class="container"><h1>イベント登録ページ</h1>
	<p>イベント編集ページです。</p>
	<p><a href="news_list.php" class="btn btn-primary btn-lg" role="button">登録中イベント一覧</a></p>
</div></div>
<div class="container">
  
  <pre class="prettyprint html">イベント編集・削除</pre>
  
<div class="list-group-item-danger" >イベントを編集します</div> 
  
    <form action="news_rewrite_2.php" method="post">
    <h3 id="usage2" class="page-header">イベント内容</h3>
    <?php 
if($blank == '1'){
	$icon1='selected="selected"';
	}elseif($blank == '2'){
	$icon2='selected="selected"';
	}elseif($blank == '3'){
	$icon3='selected="selected"';
	}elseif($blank == '4'){
	$icon4='selected="selected"';
	}else{
	$icon1='selected="selected"';
	}
	?>
    <select name="blank" class="form-control">
    <option value="2" <?php echo $icon2; ?>>イベント</option>
    <option value="3" <?php echo $icon3; ?>>キャンペーン</option>
    <option value="4" <?php echo $icon4; ?>>店休日</option>
    </select>    
    <h3 id="usage2" class="page-header">日付</h3>
    
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="sort" value="<?php echo $sort; ?>" />
<input type="hidden" name="sort2" value="<?php echo $sort2; ?>" />
<input type="hidden" name="photo1" value="<?php echo $photo1; ?>" />
<input type="text" name="start" value="<?php echo $start; ?>" autocomplete="off">
		<input type="hidden" name="end" value="<?php echo $end; ?>" />
		<input type="hidden" name="time" value="<?php echo $time; ?>" />
<h3 id="usage2" class="page-header">タイトル</h3>
    <input name="newstitle" type="text" class="form-control" value="<?php echo $newstitle; ?>" />
    
    <h3 id="usage2" class="page-header">内容
      <?php $input = str_replace("<br />" , "\r\n" , $input); ?><textarea name="input" cols="" rows="" class="form-control" id="input"><?php echo $input; ?></textarea>
    </h3>
    <input type="hidden" name="operation" value="edit" />
    <input name="jpeg" type="hidden" value="<?php echo $jpeg; ?>" /><input name="link" type="hidden" value="4" />
<br />
    <br />
    <div class="text-danger">※イベントの編集後は必ず「イベントを送信」ボタンを押してください。</div>
    <br />
    <input name="submit" type="submit" class="btn-info btn-lg" value="イベントを送信" />
    
    </form>
<p></p>
 
<pre class="prettyprint html">イベントを削除します</pre>
    <div class="text-danger">※「イベントを削除」するとデータは復旧できませんのでご注意下さい。</div> 
    <a href="news_edit_2_b.php?id=<?php echo $id; ?>" class="fancybox fancybox.ajax btn-primary btn" >イベントを削除する</a> 
 <p></p>
</div></div>
  

  

<?php include ('php/footer.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.inview.js"></script>
<!-- ▼jQuery-UI -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    
    <!-- ▼jQuery-UI-datepicker -->
    <script src="js/jquery.ui.datepicker-ja.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" >
 <script>
var format = 'yy.mm.dd';


// 開始日の設定
var start = $("[name=start]").datepicker({
    dateFormat: 'yy/mm/dd'
}).on("change", function () {
    // 開始日が選択されたとき
    // 終了日の選択可能最小日を設定
    end.datepicker("option", "minDate", getDate(this));
});

// 終了日の設定
var end = $("[name=end]").datepicker({
    dateFormat: 'yy/mm/dd'
}).on("change", function () {
    // 開始日が選択されたとき
    // 開始日の選択可能最大日を設定
    start.datepicker("option", "maxDate", getDate(this));
});


/**
 * 選択された日付をminDate,maxDate用に変換
 */
function getDate(element) {
    var date;
    try {
        date = $.datepicker.parseDate(format, element.value);
    } catch (error) {
        date = null;
    }
    return date;
}
        </script>
    <script src="js/animsition.min.js"></script>
<?php include ('php/rigft_js.php'); ?>
</body>
</html>
