<?php
//セッションの復元
session_start();

//設定ファイル読み込み
require_once 'conf.php';

//新規IDを取得
$id=time('U');
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
	<div class="container"><h1>イベント登録ページ</h1>
	<p>新規イベント登録ページです。</p>
	<p><a href="news_list2.php" class="btn btn-primary btn-lg" role="button">登録済みのイベント一覧</a></p>
</div></div>
<div class="container">
  
  <pre class="prettyprint html">イベント設定</pre>


  
  <div class="list-group-item-danger" >新規<span class="prettyprint html">イベント</span>書き込み</div>  
 
<form action="news_check2.php" method="post" enctype="multipart/form-data">
       <h3 id="usage2" class="page-header">
      イベント内容</h3>

    
    <select name="blank" class="form-control">
    <option value="2">イベント</option>
    <option value="3">キャンペーン</option>
    <option value="4">店休日</option>
    </select>
    <h3 id="usage2" class="page-header">
      日付
    </h3>
    
    <input type="text" name="start" class="form-control" id="datepicker_3" autocomplete="off"><br />
<h3 id="usage2" class="page-header">
      タイトル
    </h3>
 
    <input name="newstitle" type="text" class="form-control" value="" /><br />
    
    <!--<h3 id="usage2" class="page-header">
      写真登録
     </h3>
    
    <input type="file" name="photo1" />-->
   <h3 id="usage2" class="page-header">
      内容
    </h3>
    <textarea name="input" cols="" rows="" class="form-control" id="input"></textarea>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <br />
    <br />
    <div class="text-danger">※最新イベントの登録後は必ず「最新イベントの登録」ボタンを押してください。</div>
    <br />
    <input name="submit" type="submit" class="btn-info btn-lg" value="最新イベント登録" />
    
    
   
 </form>
<p></p>

</div>
  

  
<?php include ('php/footer.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- ▼jQuery-UI -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    
    <!-- ▼jQuery-UI-datepicker -->
    <script src="js/jquery.ui.datepicker-ja.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" >
 <script>
var format = 'yy/mm/dd';


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
