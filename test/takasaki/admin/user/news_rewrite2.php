<?php
//設定ファイル読み込み
require_once('../conf.php');

$shop_id = $_GET['shop_id'];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `shop_id` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}

//フォームからデータ受け取り
$n_id = $_POST['n_id'];
$wdate = $_POST['wdate'];
$newstitle = $_POST['newstitle'];
$input = htmlspecialchars($_POST['input'],ENT_QUOTES);
$photo1n = $_POST['photo1n'];
$jpeg = $_POST['jpeg'];
$news_shop = $_POST['news_shop'];
$newswdit = $_POST['newsedit'];
$blank = $_POST['blank'];

$input = mb_convert_kana($input,'KaV','utf-8');

//追加
$input = str_replace('\\' , '' , $input);
//改行コードの前に改行タグを入れる
$input = nl2br($input);
//改行コードを削除
$input = str_replace("\r\n" , "" , $input);
//編集・削除キー
$operation = $_POST['operation'];

//配列入れ替え

	if ($operation == 'edit') {
		mysqli_query($sql, "UPDATE `news` SET `n_id`='$n_id',`wdate`='$wdate',`newstitle`='$newstitle',`input`='$input',`photo1n`='$photo1n',`jpeg`='$jpeg',`news_shop`='$news_shop',`newsedit`='$newsedit',`blank`='$blank' WHERE `n_id` LIKE '$n_id' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `news` WHERE n_id LIKE '$n_id' LIMIT 1");
	}
//}
//}

//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);
//foreach($data as $item)fputs($handle , $item);
//fclose($handle);


//写真を削除
if($operation=='delete'){
	if(file_exists('./photo/'.$n_id.'1.jpg')){
		unlink('./photo/'.$n_id.'1.jpg');
	}
}
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>キャスト登録</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=news_list.php?shop_id=<?php echo $shop_id; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>