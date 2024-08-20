<?php get_header(); ?>

<main>
  <section class="hero">
    <h1 data-ja="お知らせ">News</h1>
    <img src="<?= get_template_directory_uri(); ?>/img/hero/1.jpg.webp" alt="">
  </section>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article>
        <div class="title">
          <h2><?php the_title(); ?></h2>
          <time datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
        </div>

        <div class="layout">
          <a href="<?= esc_url(get_home_url()) . '/news'; ?>" class="back">
            <span class="material-symbols-outlined">
              arrow_left_alt
            </span>
            back
          </a>

          <div class="body">
            <div class="thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="content">
              <?php the_content(); ?>
            </div>
          </div>

        </div>
      </article>
  <?php
    endwhile;
  endif;
  ?>

</main>

<?php get_footer(); ?>