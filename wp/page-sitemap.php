<?php get_header(); ?>

<main class="sitemap">

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower">サイトマップ</h1>
      </div>
    </div>
  </section>

  <section class="sitemap__box">
    <div class="containers flex gap60">

      <div class="group">
        <div class="group__ttl">製品紹介</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>sll/">スマートエルライン™ライト</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>plc_tape/">エルクライト™</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>agency/">販売代理店様へ</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">お役立ち情報</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>whitepaper/">お役立ち資料</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>column/">お役立ちコラム</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">お知らせ</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">お問合せ</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/">製品カタログダウンロード</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">ご相談・お問合せ</a></li>
        </ul>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>