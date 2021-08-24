<?php
echo <<<GOLGO
  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-dropdown_top"><a class="drawer-brand drawer-brand_shop" href="ota/" title="相席酒場 太田店">太田店</a></li>
        <li><a class="drawer-brand drawer-brand_shop" href="takasaki/" title="相席酒場 高崎連雀町店">高崎連雀町店</a></li>
        <li><a class="drawer-brand drawer-brand_shop" href="takasaki-cafe/" title="相席カフェ 高崎駅西口店">高崎駅西口店</a></li>
        <li><a class="drawer-brand drawer-brand_shop" href="utsunomiya/" title="相席酒場 宇都宮店">宇都宮店</a></li>              
        <li><a class="drawer-brand" href="/" title="<?php echo $seo; ?>">ホーム</a></li>
        <li><a class="drawer-brand" href="about.php" title="<?php echo $seo; ?>相席酒場とは">相席酒場とは？</a></li>
        <li><a class="drawer-brand" href="enjoy.php" title="<?php echo $seo; ?>お店の楽しみ方">お店の楽しみ方</a></li>                     
        <li><a class="drawer-brand" href="recruit.php" title="<?php echo $seo; ?>求人情報">求人情報</a></li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="index.php" title=""><img src="img/logo.svg" alt=""></a></h1>
    <li class="menu__single">
      <a href="/" title="<?php echo $seo; ?>">ホーム</a>
    </li>
    <li class="menu__single">
      <a href="about.php" title="<?php echo $seo; ?>相席酒場とは？">相席酒場とは？</a>
    </li>
    <li class="menu__single">
      <a href="enjoy.php" title="<?php echo $seo; ?>お店の楽しみ方">お店の楽しみ方</a>
    </li>        
    <li class="menu__single">
        <a href="#" class="init-bottom" title="">店舗一覧</a>
        <ul class="menu__second-level">
            <li><a href="ota/" title="相席酒場 太田店">太田店</a></li>
            <li><a href="takasaki/" title="相席酒場 高崎連雀町店">高崎連雀町店</a></li>                       
            <li><a href="takasaki-cafe/" title="相席カフェ 高崎駅西口店">高崎駅西口店</a></li>   
            <li><a href="utsunomiya/" title="相席酒場 宇都宮店">宇都宮店</a></li>
        </ul>
    </li>
    <li class="menu__single">
      <a href="recruit.php" title="<?php echo $seo; ?>求人情報">求人情報</a>
    </li>                       
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="/" title="<?php echo $seo; ?>"><img src="img/logo.svg" alt="<?php echo $seo; ?>"></a></h1></div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>
GOLGO;
?>