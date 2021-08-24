<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>管理画面</title>

<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />

<!-- ※デフォルトのスタイル（style.css） -->
<link rel="stylesheet" media="all" type="text/css" href="../css/index.css" />

<!-- ※スマートフォン用のスタイル（smart.css） -->
<link rel="stylesheet" media="all" type="text/css" href="../css/smart.css" />

</head>

<body>
<div class="login">
	<h1>Login</h1>
    <form action="check_login.php" method="post">
    	<input type="text" name="user" placeholder="Username" required />
        <input type="password" name="pass" placeholder="Password" required />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>

</body>
</html>