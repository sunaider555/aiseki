<div class="animsition">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- navbar-inverse で黒系ナビゲーションの指定をしています。-->
<!-- navbar-fixed-top でヘッダー固定の指定をしています。-->
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<!--button~はウインドウのサイズが780px以下になった時に表示されます。-->
<a class="navbar-brand" href="news_list.php?shop_id=<?php echo $shop_id; ?>">HOT NEWS EDIT</a>
<!--こちらにサイト名を入れます。-->
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
                <li><a href="news.php?shop_id=<?php echo $shop_id; ?>">HOT NEWS新規書き込み設定</a></li>
	<li><a href="news_list.php?shop_id=<?php echo $shop_id; ?>">登録中HOT NEWS一覧</a></li>
</ul>
</div>
<!--/.nav-collapse -->
</div>
</div> 