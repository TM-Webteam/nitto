<?php 
/*
Template Name: 日東エルマテリアルの強み
Template Post Type: page
*/
get_header(); ?>

<main class="template">

<section class="agency">
    <section class="hero03">
      <div class="containers core">
        <div class="hero03__box">
          <h1>
            <div class="hero03__box--sub">販売代理店様へ</div>
            <div class="ttl-primary">日東エルマテリアルの強み</div>
          </h1>
          <div class="ctabtn">
            <a href="#" class="btn01 bgR">カタログダウンロード</a>
          </div>
        </div>
      </div>
    </section>

    <section class="symmetry">
      <div class="containers">

        <div class="flex aiC sp-reverse item">
          <summary class="item__box">
            <div class="item__box--num">01</div>
            <h2 class="item__box--ttl">400社あまりの関連メーカー品を提供可能</h2>
            <h3 class="item__box--txt">
              日東電工グループとして、「住宅関連材料・製品」と「生産現場への生産材・副資材」を主に販売しています。取扱メーカー数は400社ほどあり、お客様のニーズ・課題に対し、様々な製品で課題解決をご提案いたします。</h3>
          </summary>
          <figure class="item__img"><img src="<?php echo assets_path() ?>img/agency/img-agency01.png" alt=""></figure>
        </div>

        <div class="flex aiC item">
          <figure class="item__img"><img src="<?php echo assets_path() ?>img/agency/img-agency02.png" alt=""></figure>
          <summary class="item__box">
            <div class="item__box--num">02</div>
            <h2 class="item__box--ttl">お客様のご要望にお応えして新製品開発も可能</h2>
            <h3 class="item__box--txt">
              弊社は商社でありながらも、ファブレスメーカーとしての顔も持ち合わせており、ご要望に合わせ「新製品開発」も行っています。また、シート・フィルム・テープ・フォームをはじめとする素材に対して加工を施し、新たな機能を付加した製品のご提案が可能です。
            </h3>
          </summary>
        </div>

        <div class="flex aiC sp-reverse item">
          <summary class="item__box">
            <div class="item__box--num">03</div>
            <h2 class="item__box--ttl">お客様のニーズ・課題をスピーディに解決</h2>
            <h3 class="item__box--txt">オンラインを含む面談営業を基本とする事で お客様のニーズを的確に把握して高い専門知識で”お困りごと”に対し、スピーディーに解決をいたします。</h3>
          </summary>
          <figure class="item__img"><img src="<?php echo assets_path() ?>img/agency/img-agency03.png" alt=""></figure>
        </div>

      </div>
    </section>


      <?php get_template_part( 'template-parts/slider' ); ?>

      <?php get_template_part( 'template-parts/inquiry' ); ?>
</main>

<?php get_footer(); ?>