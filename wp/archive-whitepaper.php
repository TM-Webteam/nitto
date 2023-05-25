<?php get_header(); ?>

<main class="arc-whitepaper">

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower">お役立ち資料</h1>
        <div class="lead">業界や製品に関する基礎知識、ノウハウを<br class="sp-only">まとめた資料をご用意しております。<br>無料でダウンロードいただけますので<br class="sp-only">ぜひご覧ください。</div>
      </div>
    </div>
  </section>

  <section class="latest">
    <div class="containers">
      <h2 class="ttl-secondary non">おすすめ資料</h2>
      <div class="flex gap30">

        <?php
          $args = array(
            'posts_per_page'   => 2,
            'post_type'    => 'whitepaper',
            'paged' => $paged,
            'order' => 'DESC',
            'orderby' => 'post_date',
            'post_status' => 'publish',
          );
          $latest_query = new WP_Query($args);
          $exclude_ids = array();
          if ($latest_query->have_posts()) :
          ?>
          <?php while ($latest_query->have_posts()) : $latest_query->the_post();
            $exclude_ids[] = get_the_ID();
            $post_terms = get_the_terms(get_the_ID(), 'whitepaper_category');
          ?>

          <a href="<?php the_permalink(); ?>" class="flex item">
            <h3 class="item__ttl"><?php the_title(); ?></h3>
            <div class="item__img"><?php the_post_thumbnail(); ?></div>
            <div class="item__box">
              <div class="item__box--cat">
                <?php if ($post_terms) : ?>
                  <?php foreach ($post_terms as $post_term) : ?>
                    <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <div class="item__box--txt"><?php echo CFS()->get('lead'); ?></div>
            </div>
          </a>

        <?php endwhile; endif; ?>
        
      </div>
    </div>
  </section>

  <section class="catalog-menu">
    <div class="containers">

      <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => -1,
          'post_type' => 'whitepaper',
          'paged' => $paged,
          'order' => 'DESC',
          'post_status' => 'publish',
          'post__not_in' => $exclude_ids,
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