<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">

  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?= get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#b91d47">
  <meta name="theme-color" content="#ffffff">

  <!-- Primary Meta Tags -->
  <meta name="title" content="和太鼓衆SHIN" />
  <meta name="description" content="愛知県東三河を中心に活動する和太鼓衆SHINのオフィシャルサイト。和太鼓や和楽器、エレクトーンで独自の世界を音楽や舞台で表現しながら、和楽器の素晴らしさを世界に発信している。" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= esc_url(home_url('/')); ?>" />
  <meta property="og:title" content="和太鼓衆SHIN" />
  <meta property="og:description" content="愛知県東三河を中心に活動する和太鼓衆SHINのオフィシャルサイト。和太鼓や和楽器、エレクトーンで独自の世界を音楽や舞台で表現しながら、和楽器の素晴らしさを世界に発信している。" />
  <meta property="og:image" content="https://kasumi-wmm.com/img/shin-ogp.jpg" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="<?= esc_url(home_url('/')); ?>" />
  <meta property="twitter:title" content="和太鼓衆SHIN" />
  <meta property="twitter:description" content="愛知県東三河を中心に活動する和太鼓衆SHINのオフィシャルサイト。和太鼓や和楽器、エレクトーンで独自の世界を音楽や舞台で表現しながら、和楽器の素晴らしさを世界に発信している。" />
  <meta property="twitter:image" content="https://kasumi-wmm.com/img/shin-ogp.jpg" />


  <title>
    <?php
    if (is_front_page()) echo '和太鼓衆SHIN | 愛知を中心に活動する創作演奏グループ';
    else {
      if (is_archive('schedule')) echo '演奏予定 | ';
      elseif (is_archive() || is_single()) echo 'お知らせ | ';
      elseif (is_page('about')) echo 'SHINとは | ';
      elseif (is_page('contents')) echo 'ご依頼形態 | ';
      elseif (is_page('goods')) echo 'グッズ | ';
      elseif (is_page('project')) echo 'オーストラリアプロジェジェクト | ';
      elseif (is_page('school')) echo '和太鼓教室-巴- | ';
      elseif (is_page('supporter')) echo 'サポーターズクラブ | ';
      elseif (is_page('contact')) echo 'お問い合わせ | ';
      elseif (is_page('privacy')) echo 'プライバシーポリシー | ';
      echo '和太鼓衆SHIN';
    }
    ?>
  </title>
  <?php
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0');
  wp_head();
  ?>

</head>

<body>
  <header>
    <a href="<?= esc_url(get_home_url()); ?>" class="logo">
      <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="">
    </a>
    <nav class="menu">
      <div class="toggle-button">menu</div>

      <ul>
        <li class="has-sub">
          <a href="<?= esc_url(home_url('/about/')); ?>" data-ja="SHINとは">about</a>
          <ul class="sub-menu">
            <li><a href="<?= esc_url(home_url('/supporter/')); ?>">サポーターズクラブ</a></li>
            <li><a href="<?= esc_url(home_url('/project/')); ?>">オーストラリアプロジェクト</a></li>
            <li><a href="<?= esc_url(home_url('/goods/')); ?>">グッズ</a></li>
          </ul>
        </li>
        <li>
          <a href="<?= esc_url(home_url('/contents/')); ?>" data-ja="ご依頼形態">contents</a>
        </li>
        <li>
          <a href="<?= esc_url(home_url('/school/')); ?>" data-ja="和太鼓教室 -巴-">school</a>
        </li>
        <li>
          <a href="<?= esc_url(get_home_url()) . '/schedule'; ?>" data-ja="演奏予定">schedule</a>
        </li>
        <li>
          <a href="<?= esc_url(get_home_url()) . '/news'; ?>" data-ja="お知らせ">news</a>
        </li>
        <li>
          <a href="<?= esc_url(home_url('/contact/')); ?>" data-ja="お問い合わせ">contact</a>
        </li>
      </ul>
    </nav>
  </header>