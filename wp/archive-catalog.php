<?php get_header(); ?>

<main class="arc-catalog">

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower">日東エルマテリアルの製品カタログ</h1>
        <div class="lead">防災対策にかかわる各種製品カタログをご用意しております。<br>製品の特長を詳しく知りたい方はぜひご覧ください。</div>
      </div>
    </div>
  </section>

  <section class="catalog-menu">
    <div class="containers">

      <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => -1,
          'post_type' => 'catalog',
          'paged' => $paged,
          'order' => 'DESC',
          'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="flex card">
            <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
            <summary class="card__box">
              <h2 class="card__box--ttl"><?php the_title(); ?></h2>
              <h3 class="card__box--txt"><?php echo CFS()->get('lead'); ?></h3>
              <div class="more">資料をダウンロード</div>
            </summary>
          </a>

        <?php endwhile; ?>
      <?php endif; ?>
      
    </div>
  </section>


</main>

<?php get_footer(); ?>