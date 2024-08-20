<?php get_header(); ?>

<main>
  <section class="hero">
    <h1 data-ja="お知らせ">News</h1>
    <img src="<?= get_template_directory_uri(); ?>/img/hero/1.jpg.webp" alt="">
  </section>

  <?php if (have_posts()) : ?>
    <div class="archive">
      <?php while (have_posts()) : the_post(); ?>
        <article class="card">
          <div class="box">
            <?php the_post_thumbnail(); ?>
          </div>
          <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <time datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
        </article>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>

  <?php get_template_part('template-parts/pagination'); ?>

</main>

<?php get_footer(); ?>