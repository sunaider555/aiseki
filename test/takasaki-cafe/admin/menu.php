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

$result=mysqli_query($sql, "SELECT * From `data2` WHERE `name2` = '$name2'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu2.php');

}

?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>メニューの写真の変更・削除</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/animsition.css"/>

</head>
<body><?php include ('php/header.php'); ?>
<div class="jumbotron">
	<div class="container"><h1>メニュー写真の変更・削除ページ</h1>
	<p>メニュー写真登録ページです。メニュー写真削除する場合は削除にチェックをして、「登録」ボタンを押して下さい。 </p>
	<p><a href="ok_login.php" class="btn btn-primary btn-lg" role="button">トップページ</a></p>
</div></div>
<div class="container">
 
<form action="upload_photo2.php" method="post" enctype="multipart/form-data">
  <pre class="prettyprint html">メニュー写真の変更・削除</pre>
  <aside>
    
    <div class="text-danger">
    ※最後に必ず「登録」ボタンを押して下さい。
    「登録」ボタンを押さないと反映されません。
    <br />    
    ※写真削除する場合は削除にチェックをして、
    「登録」ボタンを押して下さい。
    <br>
    ※スライダー画像サイズは1500px × 1050pxの写真でお願いします。
サイズが異なると、レイアウトが崩れる場合がございます。    </div>
  
  <table class="table table-striped">
    <tr>
      <td width="23%" class="t_photo">ドリンク1枚目<br /></td>
      <td width="20%" class="t_photo_2">
        <figure class="photo01">
          <div class="photo02">
            <?php
if ($photo1 == $empty) {
	echo '登録なし';
} else {
	echo '<img src="' . $photo1 . '.jpg" alt="photo1"  />';
}
?>
            </div>
          </figure>
      </td>
      <td width="42%" class="t_photo_2">
      <input type="file" name="photo1" />
      </td>
      <td width="15%" class="t_photo_2">
      <?php
if($photo1!=$empty){
	echo "<input type=\"checkbox\" name=\"delete1\" value=\"delete\" /><br />削除";
}
?>
      </td>
    </tr>
    <tr>
      <td width="23%" class="t_photo">ドリンク2枚目<br /></td>
      <td width="20%" class="t_photo_2">
        <figure class="photo01">
          <div class="photo02">
            <?php
if ($photo2 == $empty) {
	echo '登録なし';
} else {
	echo '<img src="' . $photo2 . '.jpg" alt="photo1"  />';
}
?>
            </div>
          </figure>
      </td>
      <td width="42%" class="t_photo_2">
      <input type="file" name="photo2" />
      </td>
      <td width="15%" class="t_photo_2">
      <?php
if($photo2!=$empty){
	echo "<input type=\"checkbox\" name=\"delete2\" value=\"delete\" /><br />削除";
}
?>
      </td>
    </tr>
	  <tr>
      <td width="23%" class="t_photo">ドリンク3枚目<br /></td>
      <td width="20%" class="t_photo_2">
        <figure class="photo01">
          <div class="photo02">
            <?php
if ($photo3 == $empty) {
	echo '登録なし';
} else {
	echo '<img src="' . $photo3 . '.jpg" alt="photo1"  />';
}
?>
            </div>
          </figure>
      </td>
      <td width="42%" class="t_photo_2">
      <input type="file" name="photo3" />
      </td>
      <td width="15%" class="t_photo_2">
      <?php
if($photo3!=$empty){
	echo "<input type=\"checkbox\" name=\"delete3\" value=\"delete\" /><br />削除";
}
?>
      </td>
    </tr>
	  <tr>
      <td width="23%" class="t_photo">ドリンク4枚目<br /></td>
      <td width="20%" class="t_photo_2">
        <figure class="photo01">
          <div class="photo02">
            <?php
if ($photo4 == $empty) {
	echo '登録なし';
} else {
	echo '<img src="' . $photo4 . '.jpg" alt="photo1"  />';
}
?>
            </div>
          </figure>
      </td>
      <td width="42%" class="t_photo_2">
      <input type="file" name="photo4" />
      </td>
      <td width="15%" class="t_photo_2">
      <?php
if($photo4!=$empty){
	echo "<input type=\"checkbox\" name=\"delete4\" value=\"delete\" /><br />削除";
}
?>
      </td>
    </tr>
	  <tr>
      <td width="23%" class="t_photo">ドリンク5枚目<br /></td>
      <td width="20%" class="t_photo_2">
        <figure class="photo01">
          <div class="photo02">
            <?php
if ($photo5 == $empty) {
	echo '登録なし';
} else {
	echo '<img src="' . $photo5 . '.jpg" alt="photo1"  />';
}
?>
            </div>
          </figure>
      </td>
      <td width="42%" class="t_photo_2">
      <input type="file" name="photo5" />
      </td>
      <td width="15%" class="t_photo_2">
      <?php
if($photo5!=$empty){
	echo "<input type=\"checkbox\" name=\"delete5\" value=\"delete\" /><br />削除";
}
?>
      </td>
    </tr>
	  <tr>
      <td width="23%" class="t_photo">フード1枚目<br /></td>
      <td width="20%" class="t_photo_2">
        <figure class="photo01">
          <div class="photo02">
            <?php
if ($photo6 == $empty) {
	echo '登録なし';
} else {
	echo '<img src="' . $photo6 . '.jpg" alt="photo1"  />';
}
?>
            </div>
          </figure>
      </td>
      <td width="42%" class="t_photo_2">
      <input type="file" name="photo6" />
      </td>
      <td width="15%" class="t_photo_2">
      <?php
if($photo6!=$empty){
	echo "<input type=\"checkbox\" name=\"delete6\" value=\"delete\" /><br />削除";
}
?>
      </td>
    </tr>
	  <tr>
      <td width="23%" class="t_photo">フード2枚目<br /></td>
      <td width="20%" class="t_photo_2">
        <figure class="photo01">
          <div class="photo02">
            <?php
if ($photo7 == $empty) {
	echo '登録なし';
} else {
	echo '<img src="' . $photo7 . '.jpg" alt="photo1"  />';
}
?>
            </div>
          </figure>
      </td>
      <td width="42%" class="t_photo_2">
      <input type="file" name="photo7" />
      </td>
      <td width="15%" class="t_photo_2">
      <?php
if($photo7!=$empty){
	echo "<input type=\"checkbox\" name=\"delete7\" value=\"delete\" /><br />削除";
}
?>
      </td>
    </tr>
	  <tr>
      <td width="23%" class="t_photo">フード3枚目<br /></td>
      <td width="20%" class="t_photo_2">
        <figure class="photo01">
          <div class="photo02">
            <?php
if ($photo8 == $empty) {
	echo '登録なし';
} else {
	echo '<img src="' . $photo8 . '.jpg" alt="photo1"  />';
}
?>
            </div>
          </figure>
      </td>
      <td width="42%" class="t_photo_2">
      <input type="file" name="photo8" />
      </td>
      <td width="15%" class="t_photo_2">
      <?php
if($photo8!=$empty){
	echo "<input type=\"checkbox\" name=\"delete8\" value=\"delete\" /><br />削除";
}
?>
      </td>
    </tr>
	  <tr>
      <td width="23%" class="t_photo">フード4枚目<br /></td>
      <td width="20%" class="t_photo_2">
        <figure class="photo01">
          <div class="photo02">
            <?php
if ($photo9 == $empty) {
	echo '登録なし';
} else {
	echo '<img src="' . $photo9 . '.jpg" alt="photo1"  />';
}
?>
            </div>
          </figure>
      </td>
      <td width="42%" class="t_photo_2">
      <input type="file" name="photo9" />
      </td>
      <td width="15%" class="t_photo_2">
      <?php
if($photo9!=$empty){
	echo "<input type=\"checkbox\" name=\"delete9\" value=\"delete\" /><br />削除";
}
?>
      </td>
    </tr>
	  <tr>
      <td width="23%" class="t_photo">フード5枚目<br /></td>
      <td width="20%" class="t_photo_2">
        <figure class="photo01">
          <div class="photo02">
            <?php
if ($photo10 == $empty) {
	echo '登録なし';
} else {
	echo '<img src="' . $photo10 . '.jpg" alt="photo1"  />';
}
?>
            </div>
          </figure>
      </td>
      <td width="42%" class="t_photo_2">
      <input type="file" name="photo10" />
      </td>
      <td width="15%" class="t_photo_2">
      <?php
if($photo10!=$empty){
	echo "<input type=\"checkbox\" name=\"delete10\" value=\"delete\" /><br />削除";
}
?>
      </td>
    </tr>
  </table>
  <hr><input type="hidden" name="name2" value="<?php echo $name2; ?>" />
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
