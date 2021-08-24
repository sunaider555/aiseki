<div class="animsition">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- navbar-inverse で黒系ナビゲーションの指定をしています。-->
<!-- navbar-fixed-top でヘッダー固定の指定をしています。-->
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<!--button~はウインドウのサイズが780px以下になった時に表示されます。-->
<a class="navbar-brand" href="ok_login.php">SHOP EDIT TOOL</a>
<!--こちらにサイト名を入れます。-->
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="news.php">ニュース設定</a></li>
	<li><a href="news_list.php">ニュース一覧</a></li>
	<li><a href="news2.php">イベント設定</a></li>
	<li><a href="news_list2.php">イベント一覧</a></li>
	<li><a href="menu.php?name2=<?php echo $tenmei; ?>">メニュー登録</a></li>
	<li><a href="konzatsu.php?name2=<?php echo $tenmei; ?>">現在の混雑状況</a></li>
</ul>
</div>
<!--/.nav-collapse -->
</div>
</div> 