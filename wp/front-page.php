<?php get_header(); ?>

<main class="top">

  <section class="hero">
    <div class="containers">
      <div class="hero__sub">住宅建設や防災における<br class="sp-only">「現場のニーズ」に応えるサイト</div>
      <h1 class="ttl-primary">日東エルマテリアルの<br class="sp-only"><span>防災対策ソリューション</span></h1>
      <div class="hero__lead">災害への備えを「低コスト」かつ「万全」に実現する<br class="pc-only">「突然の停電」に特化した製品をご提供いたします。</div>
      <div class="flex fS gap20 aiC hero__btn">
        <div class="ctabtn">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>sll/" class="more bgLB core">
            <div class="balloon"><span class="balloon__txt">災害時のライフラインを確保する<span class="cR">給電システム</span></span></div>
            スマートエルライン™ライト
          </a>
        </div>
        <div class="ctabtn">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>plc_tape/" class="more bgLG core">
            <div class="balloon"><span class="balloon__txt">安全確保のための<span class="cR">高輝度蓄光テープ</span></span></div>
            エルクライト™
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/slider' ); ?>

  <section class="card-type2 bg-LB">
    <div class="containers">
      <h2 class="ttl-secondary">以下のようなニーズをお持ちの企業様に活用されています。</h2>
      <div class="flex gap30 card">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>sll/" class="card__wrap">
          <h3 class="card__wrap--ttl">お手軽に<span>低コストな停電対策</span>を提供したい</h3>
          <summary class="card__box">
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/item01.png" alt="お手軽に低コストな停電対策を提供したい"></figure>
            <div class="card__box--txt"><span>住居へ電力供給可能な停電対策システム</span><br>スマートエルライン™ライト</div>
          </summary>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>plc_tape/" class="card__wrap">
          <h3 class="card__wrap--ttl">停電発生時の<span>工場・倉庫の安全を確保</span>したい</h3>
          <summary class="card__box">
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/item02.png" alt="停電発生時の工場・倉庫の安全を確保したい"></figure>
            <div class="card__box--txt"><span>停電時の避難経路を確保する高輝度蓄光テープ</span><br>エルクライト™シリーズ</div>
          </summary>
        </a>
      </div>
      <div class="ctabtn">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="more wp-thumb">
          <div class="balloon"><span class="balloon__txt">日東エルマテリアルの停電対策サービス</span></div>
          カタログダウンロード
        </a>
      </div>
      
    </div>
  </section>

  <section class="useful-wp">
    <div class="containers">
      <h2 class="ttl-secondary">停電などの防災対策に関わる<br class="sp-only">お役立ち資料</h2>
      <div class="flex jcA gap30">
        <a href="#" class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/top/img-useful01.png" alt=""></figure>
          <summary class="card__box">
            <h3 class="card__box--ttl">資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイト</h3>
            <div class="card__box--txt">資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。</div>
            <div class="more small">資料をダウンロード</div>
          </summary>
        </a>
        <a href="#" class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/top/img-useful02.png" alt=""></figure>
          <summary class="card__box">
            <h3 class="card__box--ttl">資料タイトルが入ります。資料タイトルが入ります。資料タイト</h3>
            <div class="card__box--txt">資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。資料の紹介文が入ります。</div>
            <div class="more small">資料をダウンロード</div>
          </summary>
        </a>
      </div>
    </div>
  </section>

  <section class="info bg-G">
    <div class="containers">
      <h2 class="ttl-secondary">会社情報</h2>
      <div class="flex gap30 card">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>company/" class="card__box">
          <h3 class="card__box--txt">企業情報</h3>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>agency/" class="card__box">
          <h3 class="card__box--txt">販売代理店様へ</h3>
        </a>
      </div>
    </div>
  </section>

  <section class="sec-news">
    <div class="containers">
      <h2 class="ttl-secondary">お知らせ</h2>

      <a href="#" class="sec-news__box">
        <dl class="flex aiC sec-news__box--item">
          <dt><time class="time">2022.9.20</time></dt>
          <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
        </dl>
      </a>
      <a href="#" class="sec-news__box">
        <dl class="flex aiC sec-news__box--item">
          <dt><time class="time">2022.9.20</time></dt>
          <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
        </dl>
      </a>
      <a href="#" class="sec-news__box">
        <dl class="flex aiC sec-news__box--item">
          <dt><time class="time">2022.9.20</time></dt>
          <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
        </dl>
      </a>
      <a href="#" class="sec-news__box">
        <dl class="flex aiC sec-news__box--item">
          <dt><time class="time">2022.9.20</time></dt>
          <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
        </dl>
      </a>
      <a href="#" class="sec-news__box">
        <dl class="flex aiC sec-news__box--item">
          <dt><time class="time">2022.9.20</time></dt>
          <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
        </dl>
      </a>
      <a href="#" class="sec-news__box">
        <dl class="flex aiC sec-news__box--item">
          <dt><time class="time">2022.9.20</time></dt>
          <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
        </dl>
      </a>
      
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>news/" class="more bgW">お知らせ一覧を見る</a>
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>