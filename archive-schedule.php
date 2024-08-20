<?php get_header(); ?>

<main>
  <section class="hero">
    <h1 data-ja="演奏予定">Schedule</h1>
    <img src="<?= get_template_directory_uri(); ?>/img/hero/4.jpg.webp" alt="">
  </section>

  <?php if (have_posts()) : ?>
    <ul class="list">
      <?php while (have_posts()) : the_post(); ?>
        <li id="post-<?= the_ID(); ?>">
          <div class="s-thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="body">
            <h2><?php the_title(); ?></h2>
            <dl>
              <div class="row first">
                <dt>日時</dt>
                <dd>
                  <p class="day"><?php the_field('day'); ?></p>
                  <div class="time">
                    <p><?php the_field('time'); ?></p>
                  </div>
                </dd>
              </div>
              <div class="row">
                <dt>場所</dt>
                <dd>
                  <p><?php the_field('location'); ?></p>
                  <a href="<?php the_field('map'); ?>" target="_blank" rel="noopener noreferrer">Google Mapで見る</a>
                </dd>
              </div>
              <div class="row">
                <dt>入場料</dt>
                <dd><?php the_field('price'); ?></dd>
              </div>
              <div class="smooth-toggle">
                <div class="inner">
                  <?php if (get_field('ticket')) : ?>
                    <div class="row">
                      <dt>チケット</dt>
                      <dd>
                        <?php the_field('ticket'); ?>
                      </dd>
                    </div>
                  <?php endif; ?>
                  <div class="row">
                    <dt>出演</dt>
                    <dd><?php the_field('performer'); ?></dd>
                  </div>
                  <?php if (get_field('host')) : ?>
                    <div class="row">
                      <dt>主催</dt>
                      <dd><?php the_field('host'); ?></dd>
                    </div>
                  <?php endif; ?>
                  <?php if (get_field('other')) : ?>
                    <div class="row">
                      <dt>その他</dt>
                      <dd>
                        <?php the_field('other'); ?>
                      </dd>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="smooth-button">
                  <div>もっと見る</div>
                  <span class="material-symbols-outlined">
                    keyboard_arrow_down
                  </span>
                </div>
              </div>
            </dl>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>

  <?php get_template_part('template-parts/pagination'); ?>

</main>

<?php get_footer(); ?>