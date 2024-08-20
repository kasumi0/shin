<?php get_header(); ?>

<main>
  <section class="hero">
    <h1 data-ja="グッズ">Merchandise</h1>
    <img src="<?= get_template_directory_uri(); ?>/img/hero/5.jpg.webp" alt="">
  </section>

  <div class="items">
    <section class="cd">
      <div class="image">
        <img src="<?= get_template_directory_uri(); ?>/img/goods/1.jpg.webp" alt="">
      </div>

      <div class="body">
        <hgroup>
          <div class="flex">
            <h2>CD『BLUE』</h2>
            <a href="https://youtu.be/06_uW8NzowM?si=9nHuI7PSe-tAoAHD" class="try" target="_blank" rel="noopener noreferrer">
              <span>視聴する</span>
              <i class="fa-brands fa-youtube"></i>
            </a>
          </div>
          <p class="price">¥2,000</p>
        </hgroup>
        <p class="description">
          2023年 1月21日「BlueSoul-金青の未陸-知立公演」リリース！<br>
          和太鼓衆 SHIN オリジナル曲全 5 曲が収録された新アルバム。
        </p>
        <ol class="track-list">
          <li>天流河 tenryu-ga</li>
          <li>さんぽ sanpo</li>
          <li>YAMATO</li>
          <li>海神の祈り wadatsumi-no-inori</li>
          <li>龍環の祝祭～結～ <span>ryuwa-no-shukusai ～musubi～</span></li>
        </ol>
      </div>
    </section>

    <section class="set">
      <div class="image slick-item">
        <img src="<?= get_template_directory_uri(); ?>/img/goods/2-1.jpg.webp" alt="">
        <img src="<?= get_template_directory_uri(); ?>/img/goods/2-2.jpg.webp" alt="">
      </div>

      <div class="body">
        <hgroup>
          <h2>キーホルダー・ステッカーセット</h2>
          <p class="price">¥500</p>
        </hgroup>
        <p class="description">
          代表・塩崎と永田が彫刻された木製キーホルダーと、そのステッカーのセット販売。
        </p>

      </div>
    </section>

    <section class="t-shirt">
      <div class="image slick-item">
        <img src="<?= get_template_directory_uri(); ?>/img/goods/3-1.jpg.webp" alt="">
        <img src="<?= get_template_directory_uri(); ?>/img/goods/3-2.jpg.webp" alt="">
        <img src="<?= get_template_directory_uri(); ?>/img/goods/3-3.jpg.webp" alt="">
        <img src="<?= get_template_directory_uri(); ?>/img/goods/3-4.jpg.webp" alt="">
        <img src="<?= get_template_directory_uri(); ?>/img/goods/3-5.jpg.webp" alt="">
      </div>

      <div class="body">
        <hgroup>
          <h2>BlueSoul -金青の未陸- Tシャツ</h2>
          <p class="price">¥2,500</p>
        </hgroup>
        <p class="description">
          BlueSoulコンサートを記念して作成した、SHINの鯨デザインがプリントされたTシャツ。<br>
          紺色・白色それぞれ S・M・L・XL サイズの 8 種類展開。
        </p>
      </div>
    </section>
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSebhzn5zExKJnqrO7CGDXIlwD1tEMybVWgUzNDeENJ4yPww-w/viewform?usp=sf_link" target="_blank" rel="noopener noreferrer" class="application-link">
      Googleフォームからグッズを申し込む
    </a>

  </div>
</main>

<?php get_footer(); ?>