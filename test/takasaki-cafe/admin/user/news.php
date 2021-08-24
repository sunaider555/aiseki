<?php
//セッションの復元
session_start();

//設定ファイル読み込み
require_once '../conf.php';

//新規IDを取得
$n_id=time('U');

$shop_id = $_GET['shop_id'];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `shop_id` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}
  $result=mysqli_query($sql, "SELECT * From `news` WHERE `news_shop` = '$no' ORDER by n_id DESC LIMIT 1");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu6.php');
}

$nowtime = 

	if($photo1n == $empty){
	echo "";
}else{
	echo "<img src=\"../".$photo1n.".jpg\" alt=\"".$name."\"/>\n";
}

?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ホットニュース設定</title>

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/style2.css">
<link rel="stylesheet" href="../css/animsition.css"/>

</head>
<body>

<?php include ('header.php'); ?> 

<div class="jumbotron">
	<div class="container"><h1><?php echo $name; ?>様ホットニュース登録ページ</h1>
	<p>ホットニュース登録ページです。</p>
	<p><a href="news_list.php?shop_id=<?php echo $shop_id; ?>" class="btn btn-primary btn-lg" role="button">ホットニュース一覧</a></p>
</div></div>
<div class="container">
  
  <pre class="prettyprint html">ホットニュース設定</pre>


  
  <div class="list-group-item-danger" >新規ホットニュース書き込み</div>  
 
<form action="news_check.php?shop_id=<?php echo $shop_id; ?>" method="post" enctype="multipart/form-data">
      <h3 id="usage2" class="page-header">
      登録日
    </h3>
    
    <input type="text" name="wdate" class="form-control" value="<?php
	echo date('Y/');
	echo date('n/');
	echo date('j');
?>"><br />
	<h3 id="usage2" class="page-header">
      店舗名
    </h3>
 <?php echo $name; ?>
	<br />
    
<h3 id="usage2" class="page-header">
      タイトル
    </h3>
 
    <input name="newstitle" type="text" class="form-control" value="" /><br />
    
    <h3 id="usage2" class="page-header">
      写真登録
     </h3>
    
    <input type="file" name="photo1n" />
   <h3 id="usage2" class="page-header">
      内容
    </h3>
    <textarea name="input" cols="" rows="6" class="form-control" id="input"></textarea>
    <input type="hidden" name="n_id" value="<?php echo $n_id; ?>" />
	<input type="hidden" name="news_shop" value="<?php echo $no; ?>" />
	<input type="hidden" name="newsedit" value="<?php echo time(); ?>" />
    <br />
    <br />
    <div class="text-danger">※ホットニュースの登録後は必ず「ニュースの登録」ボタンを押してください。</div>
    <br />
    <input name="submit" type="submit" class="btn-info btn-lg" value="ニュース登録" />
    
    
   
 </form>
<p></p>

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
