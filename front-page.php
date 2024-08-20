<?php get_header(); ?>

<main>
  <section class="hero">
    <div class="sticky">
      <video src="<?= get_template_directory_uri(); ?>/hero.mp4" playsinline muted loop autoplay></video>
      <div class="scroll">scroll</div>
      <h1>
        和太鼓衆SHIN
        <span>和太鼓×篠笛×尺八×エレクトーン×舞台演出</span>
      </h1>
    </div>

    <div class="body">
      <h2>
        和太鼓衆SHIN<br>
        夢と希望と感動を…<br>
        伝統と創造が織り成す和のアート
      </h2>
      <div class="hero-logo">
        <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="">
        <span class="shadow">
      </div>
    </div>
  </section>

  <div class="parallax-bg">
    <div class="bg">
      <img src="<?= get_template_directory_uri(); ?>/img/bg/asanoha.webp" alt="" class="asa far3">
      <img src="<?= get_template_directory_uri(); ?>/img/bg/matsu-left.webp" alt="" class="matsu-l far3">
      <img src="<?= get_template_directory_uri(); ?>/img/bg/matsu-right.webp" alt="" class="matsu-r far2">
      <img src="<?= get_template_directory_uri(); ?>/img/bg/seigaiha.webp" alt="" class="seigaiha far0">
      <img src="<?= get_template_directory_uri(); ?>/img/bg/shippo.webp" alt="" class="shippo far0">
      <img src="<?= get_template_directory_uri(); ?>/img/bg/tsuru.webp" alt="" class="tsuru far1">
    </div>

    <section class="contents">
      <h2 data-ja="ご依頼形態">contents</h2>
      <ul>
        <li class="anime60">
          <div class="img-box parallax-area">
            <img src="<?= get_template_directory_uri(); ?>/img/contents/1.jpg.webp" alt="" class="parallax">
          </div>
          <div class="body">
            <h3 data-en="theater performance"><span>舞台公演</span></h3>
            <p>日本舞踊、剣舞、コンテンポラリーダンス、演奏家とのコラボなどでSHINの世界感を舞台で表現する総合演出をいたします。</p>
          </div>
        </li>
        <li class="anime60">
          <div class="img-box parallax-area">
            <img src="<?= get_template_directory_uri(); ?>/img/contents/2.jpg.webp" alt="" class="parallax">
          </div>
          <div class="body">
            <h3 data-en="live performance"><span>出張演奏</span></h3>
            <p>テーマパーク、学校、企業、施設、ホテル、地域などのイベントに出向いて演奏いたします。</p>
          </div>
        </li>
        <li class="anime60">
          <div class="img-box parallax-area">
            <img src="<?= get_template_directory_uri(); ?>/img/contents/3.jpg.webp" alt="" class="parallax">
          </div>
          <div class="body">
            <h3 data-en="performance & trial"><span>楽器体験</span></h3>
            <p>イベントなどで演奏後にオプションとして和楽器体験ブースでの体験会も承ります。</p>
          </div>
        </li>
        <li class="anime60">
          <div class="img-box parallax-area">
            <img src="<?= get_template_directory_uri(); ?>/img/school/7.jpg.webp" alt="" class="parallax">
          </div>
          <div class="body">
            <h3 data-en="school / lesson"><span>指導</span></h3>
            <p>
              和太鼓・篠笛教室『巴』をはじめ、個人レッスンやチーム指導も承っております。
              <a href="<?= esc_url(home_url('/school/')); ?>" class="link-btn">
                巴について知る
                <span class="material-symbols-outlined">
                  arrow_right_alt
                </span>
              </a>
            </p>
          </div>
        </li>
        <li class="anime60">
          <div class="img-box parallax-area">
            <img src="<?= get_template_directory_uri(); ?>/img/contents/5.jpg.webp" alt="" class="parallax">
          </div>
          <div class="body">
            <h3 data-en="music provider"><span>楽曲提供</span></h3>
            <p>SHINの楽器編成のなかでのオリジナル楽曲の提供を承っております。</p>
          </div>
        </li>
      </ul>
      <a href="<?= esc_url(home_url('/contents/')); ?>" class="btn">
        もっと詳しく
        <span class="material-symbols-outlined">
          arrow_right_alt
        </span>
      </a>
    </section>

    <section class="youtube" id="youtube">
      <div class="slick-youtube">
        <div class="body">
          <div class="box">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dxlLVGDFyqg?si=sCVvzC9M8dIXi9Fk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <h3>和太鼓衆SHIN & 和太鼓巴 紹介動画</h3>
        </div>

        <div class="body">
          <div class="box">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/BM5ecZq_CpI?si=TC-Qyd4mtmS3nbEB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <h3>和太鼓衆SHIN BlueSoul～金青の未陸～ short movie</h3>
        </div>

        <div class="body">
          <div class="box">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/06_uW8NzowM?si=WQluf8aoGSmFzD0k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <h3>和太鼓衆SHIN 1stアルバム『BLUE』</h3>
        </div>
        <div class="body">
          <div class="box">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_FWcU-VTpxg?si=U5KnflXqK-3Y3WCr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <h3>「YAMATO」 和太鼓衆SHIN</h3>
        </div>
      </div>
      <div class="arrows"></div>

    </section>

    <?php get_template_part('template-parts/cta'); ?>

    <section class="schedule">
      <h2 data-ja="演奏予定">schedule</h2>
      <div class="events">
        <ul class="poster">
          <!-- サブループ -->
          <?php
          $schedule_query = get_shedule_query();
          if ($schedule_query->have_posts()) :
            while ($schedule_query->have_posts()) :
              $schedule_query->the_post();
          ?>
              <li class="switchImage">
                <a href="<?= get_my_id_url(); ?>">
                  <?php the_post_thumbnail(); ?>
                </a>
              </li>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
          <!-- サブループ ここまで　　-->
        </ul>

        <ul class="event-body">
          <!-- サブループ -->
          <?php
          $schedule_query = get_shedule_query();
          if ($schedule_query->have_posts()) :
            while ($schedule_query->have_posts()) :
              $schedule_query->the_post();
          ?>
              <li class="switchTarget">
                <a href="<?= get_my_id_url(); ?>">
                  <?php the_post_thumbnail(); ?>
                  <h3><?php the_title(); ?></h3>
                  <p>日時：<?php the_field('day'); ?></p>
                  <p>場所：<?php the_field('location'); ?></p>
                </a>
              </li>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
          <!-- サブループ ここまで　　-->
        </ul>
      </div>
      <a href="<?= esc_url(get_post_type_archive_link('schedule')); ?>" class="btn">
        すべて見る
        <span class="material-symbols-outlined">
          arrow_right_alt
        </span>
      </a>
    </section>

    <section class="news">
      <h2 data-ja="お知らせ">news</h2>
      <ul>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <div class="box">
                  <?php if (has_post_thumbnail()) the_post_thumbnail(); ?>
                </div>
                <div class="post-body">
                  <time datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                  <h3><?php the_title(); ?></h3>
                </div>
              </a>
            </li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>
      <a href="<?= esc_url(get_home_url()) . '/news'; ?>" class="btn">
        すべて見る
        <span class="material-symbols-outlined">
          arrow_right_alt
        </span>
      </a>
    </section>
  </div>

</main>

<?php get_footer(); ?>