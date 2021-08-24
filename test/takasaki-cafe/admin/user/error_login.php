<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>エラー</title>


<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/style2.css">
<link rel="stylesheet" href="../css/animsition.css"/>
</head>

<body>

<div class="jumbotron">
	<div class="container"><h1>ログインエラー</h1>
	<p>ログインに失敗しました。</p>
	<p><a href="index.php" class="btn btn-primary btn-lg" role="button">ログイン画面</a></p>
</div></div>
<div class="container">
  
  <h1>■ログインエラー</h1> 
  <div id="top_title1">ログインに失敗しました。</div>
  
  <aside>
  <div class="error_txt">
  ※ERROR <br />
  ログインに失敗しました。<br />
  <a href="index.php">もう一度IDとパスワードを確認してください。</a>
  </div>
 </aside>

</div>
  

  

<?php include ('../php/footer.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <!-- ▼jQuery-UI -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <!-- ▼jQuery-UI-datepicker -->
    <script src="js/jquery.ui.datepicker-ja.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" >
 <script>
      $(function() {
        $("#datepicker").datepicker();
      });
      $(function() {
        $("#datepicker_1").datepicker();
        $("#datepicker_1").datepicker("option", "showOn", 'button');
      });
      $(function() {
        $("#datepicker_2").datepicker();
        $("#datepicker_2").datepicker("option", "showOn", 'both');
      });
      $(function() {
        $("#datepicker_3").datepicker();
        $("#datepicker_3").datepicker("option", "showOn", 'both');
        $("#datepicker_3").datepicker("option", "buttonImageOnly", true);
        $("#datepicker_3").datepicker("option", "buttonImage", 'img/ico_calendar.png');
      });
    </script>
<script src="js/animsition.min.js"></script>
<?php include ('php/rigft_js.php'); ?>
</body>
</html>

</body>
</html>
