<?php
//セッションの復元
session_start();

//設定ファイル読み込み
require_once '../conf.php';

$shop_id = $_GET['shop_id'];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `shop_id` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}

//フォームからデータ受け取り
$n_id = $_POST['n_id'];
$wdate = htmlspecialchars($_POST['wdate'],ENT_QUOTES);
$newstitle = htmlspecialchars($_POST['newstitle'],ENT_QUOTES);
$input = htmlspecialchars($_POST['input'],ENT_QUOTES);
$photo1n = htmlspecialchars($_POST['photo1n'],ENT_QUOTES);
$jpeg = htmlspecialchars($_POST['jpeg'],ENT_QUOTES);
$news_shop = htmlspecialchars($_POST['news_shop'],ENT_QUOTES);
$newsedit = $_POST['newsedit'];
$blank = $_POST['blank'];
//データを整形
$wdate = mb_convert_kana($wdate,'KaV','utf-8');
$bbstitle =mb_convert_kana($bbstitle,'KaV','utf-8');
$input = mb_convert_kana($input,'KaV','utf-8');

//追加
$input = str_replace('\\' , '' , $input);
//改行コードの前に改行タグを入れる
$input = nl2br($input);
//改行コードを削除
$input = str_replace("\r\n" , "" , $input);

?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ホットニュース設定確認</title>

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/style2.css">
<link rel="stylesheet" href="../css/animsition.css"/>
</head>
<body>

<?php include ('header.php'); ?> 

<div class="jumbotron">
	<div class="container"><h1><?php echo $name; ?>様ホットニュース確認ページ</h1>
	<p>新規ホットニュース登録確認ページです。内容に間違えがなければ、『確定』ボタンを押してください。</p>
	<p><a href="news_list.php?shop_id=<?php echo $shop_id; ?>" class="btn btn-primary btn-lg" role="button">過去のホットニュース一覧</a></p>
</div></div>
<div class="container">
  <div class="panel panel-default">
  <div class="panel-body">ホットニュース書き込み確認</div></div>
	
  <h3 id="usage2" class="page-header">日付 </h3>
  <p><?php echo $wdate; ?></p>
  <h3 id="usage2" class="page-header">タイトル</h3>
  <p><?php echo $newstitle; ?></p>
  <h3 id="usage2" class="page-header">内容  </h3>
  <p><?php echo $input; ?></p>
  <h3 id="usage2" class="page-header">画像確認</h3>
  <p>
    <?php
//ファイル名の取り出し
$photo_name1 = $_FILES['photo1n']['name'];

//ファイルタイプの取り出し
$photo_type1 = $_FILES['photo1n']['type'];

//一時ファイル名の取り出し
$temp_name1 = $_FILES['photo1n']['tmp_name'];


//保存先のディレクトリ
$dir = '../photo/';
$dir2 = 'photo/';
//拡張子
if($photo_type1=='image/jpeg'||$photo_type1=='image/pjpeg'){
	$jpeg = '.jpg';
}elseif($photo_type1=='image/gif'){
	$jpeg = '.gif';
}
//保存先のファイル名
	$upload_name1 = $dir . $n_id . '_1' . $jpeg;
	// m
	$upload_name1_m = $dir . $n_id . '_1_m' . $jpeg;

//データが全部空の時
if ($photo_name1 == $empty && $photo_name2 == $empty && $photo_name3 == $empty && $photo_name4 == $empty && $photo_name5 == $empty && $photo_name6 == $empty && $photo_name7 == $empty && $photo_name8 == $empty && $photo_name9 == $empty && $photo_name10 == $empty && $delete1 == $empty && $delete2 == $empty && $delete3 == $empty && $delete4 == $empty && $delete5 == $empty && $delete6 == $empty && $delete7 == $empty && $delete8 == $empty && $delete9 == $empty && $delete10 == $empty) {
	echo '<p>なにも変更されていません。</p><p>■<a href="news_list.php">一覧に戻ってやり直してください。</a></p>';
}

/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（1枚目）//
/////////////////////////////////////////////
if (($photo_type1 == 'image/jpeg') || ($photo_type1 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name1 , $upload_name1);
	
	if ($result) {
		echo "<table class=\"border1\"><tr>\n";
		
		//アップロードの成功
		echo '<td class="w_px200"><p>■1枚目<br /><a href="' . $upload_name1 . '" target="_blank"><img src="' . $upload_name1_m. '" alt="photo1" /></a></p></td>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name1);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真1]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		

		//サムネイル画像の幅と高さを決める
		
			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);





		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name1);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$n_id.'_1_m.jpg')){
			unlink('./photo/'.$n_id.'_1_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name1_m , $quality)) {
				echo '<p>->サムネイル画像保存(_m)</p>';
			} else {
				echo '<p>->サムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>->サムネイル画像作成失敗</p>';
		}
		
		
		
		echo "</td>\n";
		echo "</tr></table>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name1 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

?>
    <?php
//CSVから該当データを取り出して変数に代入
//$data = file('csv/data.csv');
//for($i=0; $i<sizeof($data); $i++) {
//	$line = explode(',' , $data[$i]);
//	
//	if($line[2] == $name2) {
//		include('parts/basic_hensu_straight.php');
//	}
//}
$data = mysqli_query($sql, "SELECT * FROM `news` WHERE n_id LIKE '$n_id'");
while($row=mysqli_fetch_assoc($data)) {
	include('../parts/basic_hensu6.php');
}


if ($photo_name1 != $empty) {$photo1n = $dir2 . $n_id . '_1';}



//削除写真のデータを空に
if($delete1=='delete'){$photo1n='';}


//書込みデータを結合
//$line = array($id,$name,$name2,$age,$height,$weight,$bust,$cup,$waist,$hip,$comment,$comment2,$profinfo1,$profinfo2,$profinfo3,$profinfo4,$profinfo5,$profinfo6,$profinfo7,$profinfo8,$profinfo9,$profinfo10,$option1,$option2,$option3,$option4,$option5,$option6,$option7,$option8,$option9,$option10,$option11,$option12,$option13,$option14,$option15,$option16,$option17,$option18,$option19,$option20,$option21,$option22,$option23,$option24,$option25,$option26,$option27,$option28,$option29,$option30,$option31,$option32,$option33,$option34,$option35,$option36,$option37,$option38,$option39,$option40,$photo1,$photo2,$photo3,$photo4,$photo5,$photo6,$photo7,$photo8,$photo9,$photo10,$yotei1,$start1,$end1,$yotei2,$start2,$end2,$yotei3,$start3,$end3,$yotei4,$start4,$end4,$yotei5,$start5,$end5,$yotei6,$start6,$end6,$yobi1,$yobi2,$yobi3,$yobi4,$yobi5,$yobi6,$yobi7,$yobi8,$yobi9,$yobi10,$edittime);
//$line = implode(',' , $line);

//CSVファイルから直接読み込んだデータなので、再書込みの時に行末に[\n]は不要
#	$line = $line . "\n";

//配列入れ替え
//$data = file('csv/data.csv');
//for($i=0;$i<sizeof($data);$i++) {
//$lines = explode(',' , $data[$i]);
//if ($lines[2] == $name2) {
//	array_splice($data , $i , 1 , $line);
//	}
//}

//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);
//foreach($data as $item)fputs($handle , $item);
//fclose($handle);
mysqli_query($sql, "UPDATE `news` SET `photo1n`='$photo1n' WHERE `n_id` LIKE '$n_id' LIMIT 1");


//写真を削除
if($delete1=='delete'){
	unlink('./photo/'.$n_id.'_1.jpg');
	unlink('./photo/'.$n_id.'_1_m.jpg');

	echo "<p>".$name."写真1枚目を削除しました。</p>\n";
}

?>
  </p>
  <form action="news_write.php?shop_id=<?php echo $shop_id; ?>" method="post">
  <p>上記内容でよければ「確定」ボタンを押してください。</p>
<input type="hidden" name="n_id" value="<?php echo $n_id; ?>" />
<input type="hidden" name="wdate" value="<?php echo $wdate; ?>" />
<input type="hidden" name="newstitle" value="<?php echo $newstitle; ?>" />
<input type="hidden" name="input" value="<?php echo $input; ?>" />
<input type="hidden" name="photo1n" value="<?php echo $photo1n; ?>" />
<input type="hidden" name="jpeg" value="<?php echo $jpeg; ?>" />
<input type="hidden" name="news_shop" value="<?php echo $news_shop; ?>" />
<input type="hidden" name="newsedit" value="<?php echo $newsedit; ?>" />
<input type="hidden" name="blank" value="<?php echo $blank; ?>" />
<p><input type="submit" value="確定" class="btn-info btn-lg" /></p>
</form>
</form>    
   



</div>
  

  


<?php include ('../php/footer.php'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/animsition.min.js"></script>
<?php include ('php/rigft_js.php'); ?>

</body>
</html>
