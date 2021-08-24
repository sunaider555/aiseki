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
$input = $_POST['input'];
$photo1n = $_POST['photo1n'];
$jpeg = $_POST['jpeg'];
$news_shop = $_POST['news_shop'];
$newsedit = $_POST['newsedit'];
$blank = $_POST['blank'];



$result=mysqli_query($sql, "SELECT * From `news`");
mysqli_query($sql, "INSERT INTO `news` VALUES ('$n_id','$wdate','$newstitle','$input','$photo1n','$jpeg','$news_shop','$newsedit','$blank')");
?>

<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title></title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=news_list.php?shop_id=<?php echo $shop_id; ?>">

</head>

<body>
</body>
</html>