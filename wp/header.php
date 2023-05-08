<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php esc_html(bloginfo('charset')); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords" content="">
<!-- <meta name="description" content="<?php bloginfo('description'); ?>"> -->
<meta name="author" content="">
<title><?php wp_title('|', true, 'right'); ?></title>
<meta name="format-detection" content="telephone=no">

<!-- Schema.org markup for Google+ -->
<!-- <meta itemprop="name" content="<?php esc_html(bloginfo('name')) ?>">
<meta itemprop="image" content="<?php esc_html(bloginfo('description')) ?>"> -->

<!-- Twitter Card data -->
<!-- <meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="日東エルマテリアル">
<meta name="twitter:image:src" content=""> -->

<!-- Open Graph data -->
<!-- <meta property="og:title" content="<?php esc_html(bloginfo('name')) ?>">
<meta property="og:description" content="<?php esc_html(bloginfo('description')) ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:image" content="">
<meta property="og:image:width" content="">
<meta property="og:image:height" content="">
<meta property="og:site_name" content="<?php esc_html(bloginfo('name')) ?>"> -->

<!-- Style sheet -->
<link rel="stylesheet" href="<?php echo assets_path() ?>css/main.css">
<?php wp_head(); ?>

</head>
<body class="<?php if ($body_class) {
								echo $body_class;
							} ?>">
  <header>
  <div class="in">
    <aside class="flex aiC inherit">
      <div class="in__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo assets_path() ?>img/common/h-logo.svg" alt="日東エルマテリアル"></a></div>
      <nav class="in__nav pc-only">
        <ul class="flex jcE aiC">
          <li><a href="tel:0120640450" class="tel">0120-64-0450</a>　（平日：09:00~17:30）</li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="more tiny">カタログダウンロード</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more tiny">ご相談・お問合せ</a></li>
        </ul>
      </nav>
      <div id="nav-toggle" class="sp-only">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </aside>
  </div>
  <nav class="nav-list pc-only">
    <ul class="flex nav-list-box">
      <li class="parent">
        <a href="#" class="arrow disabled">製品紹介</a>
        <div class="mega flex pull">
          <div class="mega__parent">製品紹介</div>
          <div class="mega__box flex">
            <div class="mega__box--list">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>sll/" class="ttl">スマートエルライン™ライト</a>
            </div>
            <div class="mega__box--list">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>plc_tape/" class="ttl">エルクライト™JB.JC.JD</a>
            </div>
          </div>
        </div>
      </li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>agency/" class="link">販売代理店様へ</a></li>
      <li class="parent">
        <a href="#" class="arrow disabled">お役立ち情報</a>
        <div class="mega flex pull">
          <div class="mega__parent">お役立ち情報</div>
          <div class="mega__box flex">
            <div class="mega__box--list">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>whitepaper/" class="ttl">お役立ち資料</a>
            </div>
            <div class="mega__box--list">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>column/" class="ttl">お役立ちコラム</a>
            </div>
            <div class="mega__box--list">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>news/" class="ttl">お知らせ</a>
            </div>
          </div>
        </div>
      </li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/" class="link">企業情報</a></li>
    </ul>
  </nav>

  <div id="gloval-nav" class="sp-only">
    <ul class="list">
      <li><a href="#" class="disabled">製品紹介</a></li>
      <li class="child"><a href="<?php echo esc_url( home_url( '/' ) ); ?>sll/">スマートエルライン™ライト</a></li>
      <li class="child"><a href="<?php echo esc_url( home_url( '/' ) ); ?>plc_tape/">エルクライト™JB.JC.JD</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>agency/">販売代理店様へ</a></li>
      <li><a href="#" class="disabled">お役立ち情報</a></li>
      <li class="child"><a href="<?php echo esc_url( home_url( '/' ) ); ?>whitepaper/">お役立ち資料</a></li>
      <li class="child"><a href="<?php echo esc_url( home_url( '/' ) ); ?>column/">お役立ちコラム</a></li>
      <li class="child"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">お知らせ</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">企業情報</a></li>
    </ul>
    <ul class="aside">
      <li><a href="tel:0120640450" class="tel">0120-64-0450</a><br>（平日：09:00~17:30）</li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="more small">カタログダウンロード</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more small">ご相談・お問合せ</a></li>
    </ul>
  </div>
</header>
  