<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	//ファンクションファイル読み込み
require_once 'parts/function.php';

$name2 = $_GET['name2'];

$result=mysqli_query($sql, "SELECT * From `data` WHERE `name2` = '$name2'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu3.php');

}

?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>現在の混雑状況</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/animsition.css"/>

</head>
<body><?php include ('php/header.php'); ?>
<div class="jumbotron">
	<div class="container"><h1>現在の混雑状況登録ページ</h1>
	<p>現在の混雑状況登録ページです。男性・女性の混雑状況を設定し「登録」ボタンを押して下さい。 </p>
	<p><a href="ok_login.php" class="btn btn-primary btn-lg" role="button">トップページ</a></p>
</div></div>
<div class="container">
 
<form action="write.php" method="post"><input type="hidden" name="id" value="<?php echo $id; ?>" />
  <pre class="prettyprint html">現在の混雑状況登録</pre>
  <aside>
    <h3 id="usage2" class="page-header">
      男性</h3>
      <p>
      <?php 
if($link1 == '1'){
	$man0='selected="selected"';
	}elseif($link1 == '2'){
	$man10='selected="selected"';
	}elseif($link1 == '3'){
	$man20='selected="selected"';
	}elseif($link1 == '4'){
	$man30='selected="selected"';
	}elseif($link1 == '5'){
	$man40='selected="selected"';
	}elseif($link1 == '6'){
	$man50='selected="selected"';
	}elseif($link1 == '7'){
	$man60='selected="selected"';
	}elseif($link1 == '8'){
	$man70='selected="selected"';
	}elseif($link1 == '9'){
	$man80='selected="selected"';
	}elseif($link1 == '10'){
	$man90='selected="selected"';
	}elseif($link1 == '11'){
	$man100='selected="selected"';
	}
	?>
    <select name="link1" class="form-control">
    <option value="1" <?php echo $man0; ?>>0%</option>
    <option value="2" <?php echo $man10; ?>>10%</option>
    <option value="3" <?php echo $man20; ?>>20%</option>
		<option value="4" <?php echo $man30; ?>>30%</option>
		<option value="5" <?php echo $man40; ?>>40%</option>
		<option value="6" <?php echo $man50; ?>>50%</option>
		<option value="7" <?php echo $man60; ?>>60%</option>
		<option value="8" <?php echo $man70; ?>>70%</option>
		<option value="9" <?php echo $man80; ?>>80%</option>
		<option value="10" <?php echo $man90; ?>>90%</option>
		<option value="11" <?php echo $man100; ?>>100%</option>
    </select>
      </p>  
	  <h3 id="usage2" class="page-header">
      女性</h3>
      <p>
      <?php 
if($link2 == '1'){
	$woman0='selected="selected"';
	}elseif($link2 == '2'){
	$woman10='selected="selected"';
	}elseif($link2 == '3'){
	$woman20='selected="selected"';
	}elseif($link2 == '4'){
	$woman30='selected="selected"';
	}elseif($link2 == '5'){
	$woman40='selected="selected"';
	}elseif($link2 == '6'){
	$woman50='selected="selected"';
	}elseif($link2 == '7'){
	$woman60='selected="selected"';
	}elseif($link2 == '8'){
	$woman70='selected="selected"';
	}elseif($link2 == '9'){
	$woman80='selected="selected"';
	}elseif($link2 == '10'){
	$woman90='selected="selected"';
	}elseif($link2 == '11'){
	$woman100='selected="selected"';
	}
	?>
    <select name="link2" class="form-control">
    <option value="1" <?php echo $woman0; ?>>0%</option>
    <option value="2" <?php echo $woman10; ?>>10%</option>
    <option value="3" <?php echo $woman20; ?>>20%</option>
		<option value="4" <?php echo $woman30; ?>>30%</option>
		<option value="5" <?php echo $woman40; ?>>40%</option>
		<option value="6" <?php echo $woman50; ?>>50%</option>
		<option value="7" <?php echo $woman60; ?>>60%</option>
		<option value="8" <?php echo $woman70; ?>>70%</option>
		<option value="9" <?php echo $woman80; ?>>80%</option>
		<option value="10" <?php echo $woman90; ?>>90%</option>
		<option value="10" <?php echo $woman100; ?>>100%</option>
    </select>
      </p>  
    <div class="text-danger">
    ※最後に必ず「登録」ボタンを押して下さい。
    「登録」ボタンを押さないと反映されません。
    </div>
    <hr><input type="hidden" name="name" value="<?php echo $name; ?>" /><input type="hidden" name="name2" value="<?php echo $name2; ?>" /><input type="hidden" name="operation" value="edit" />
  <br>
  <input name="submit" type="submit" class="btn-info btn-lg" value="登録" />
</aside>



 </form>
</div>
<?php include ('php/footer.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="js/animsition.min.js"></script>
<?php include ('php/rigft_js.php'); ?>
</body>
</html>
