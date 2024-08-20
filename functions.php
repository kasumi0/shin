<?php
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");

// css、jsを読み込む

function my_script_init()
{
  wp_enqueue_script("awesome", "https://kit.fontawesome.com/0a07eaf69b.js");
  if (is_front_page() || is_page('goods') || is_page('school')) {
    wp_enqueue_script("slick-cdn", "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array("jquery"), "1.8.1", true);
  }
  wp_enqueue_script("my-common", get_template_directory_uri() . "/js/common.js", array(), filemtime(get_theme_file_path('js/common.js')), true);
  if (is_front_page()) {
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
    wp_enqueue_script("my-script", get_template_directory_uri() . "/js/script.js", array("my-common"), filemtime(get_theme_file_path('js/script.js')), true);
  } elseif (is_post_type_archive('schedule')) {
    wp_enqueue_style("my-schedule", get_template_directory_uri() . "/css/schedule.css", array(), filemtime(get_theme_file_path('css/schedule.css')), "all");
  } elseif (is_archive()) {
    wp_enqueue_style("my-news", get_template_directory_uri() . "/css/news.css", array(), filemtime(get_theme_file_path('css/news.css')), "all");
  } elseif (is_single()) {
    wp_enqueue_style("my-single", get_template_directory_uri() . "/css/news-single.css", array(), filemtime(get_theme_file_path('css/news-single.css')), "all");
  } elseif (is_page('about')) {
    wp_enqueue_style("my-about", get_template_directory_uri() . "/css/about.css", array(), filemtime(get_theme_file_path('css/about.css')), "all");
  } elseif (is_page('contents')) {
    wp_enqueue_style("my-contents", get_template_directory_uri() . "/css/contents.css", array(), filemtime(get_theme_file_path('css/contents.css')), "all");
  } elseif (is_page('goods')) {
    wp_enqueue_style("my-goods", get_template_directory_uri() . "/css/goods.css", array(), filemtime(get_theme_file_path('css/goods.css')), "all");
  } elseif (is_page('project')) {
    wp_enqueue_style("my-project", get_template_directory_uri() . "/css/project.css", array(), filemtime(get_theme_file_path('css/project.css')), "all");
  } elseif (is_page('school')) {
    wp_enqueue_style("my-school", get_template_directory_uri() . "/css/school.css", array(), filemtime(get_theme_file_path('css/school.css')), "all");
  } elseif (is_page('supporter')) {
    wp_enqueue_style("my-supporter", get_template_directory_uri() . "/css/supporter.css", array(), filemtime(get_theme_file_path('css/supporter.css')), "all");
  } elseif (is_page('privacy')) {
    wp_enqueue_style("my-privacy", get_template_directory_uri() . "/css/privacy.css", array(), filemtime(get_theme_file_path('css/privacy.css')), "all");
  } elseif (is_page('contact')) {
    wp_enqueue_style("my-contact", get_template_directory_uri() . "/css/contact.css", array(), filemtime(get_theme_file_path('css/contact.css')), "all");

    // ここにサイトキーを入れて下さい
    $siteKey = "6LdPBysqAAAAAI2Ui0F5bDq5vflDTU2PvHe3kUtM";
    wp_enqueue_script("recaptcha", "https://www.google.com/recaptcha/api.js?render={$siteKey}", true);
  }
}
add_action("wp_enqueue_scripts", "my_script_init");

// archive.phpの一覧ページのurlを設定

function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
    $args['label'] = 'お知らせ';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// トップページのメインクエリの表示件数変更

function isTop_posts_per_page($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  } elseif ($query->is_home()) {
    $query->set('posts_per_page', 3);
    return;
  }
}
add_action('pre_get_posts', 'isTop_posts_per_page');

// カスタム投稿のアーカイブページの表示件数を変更

function change_posts_per_page($query)
{
  if (is_admin() || !$query->is_main_query())
    return;
  if ($query->is_post_type_archive('schedule')) {
    $query->set('posts_per_page', '6');
  }
}
add_action('pre_get_posts', 'change_posts_per_page');

// scheduleテーブルのpickupタグのみのサブループ
function get_shedule_query()
{
  $my_query = new WP_Query(
    array(
      'post_type'      => 'schedule',
      'tag'            => 'pickup',
      'posts_per_page' => 3
    )
  );
  return $my_query;
}

// アーカイブページ（ページネーション付き）のidリンクを取得( ~ $slug/page/$num#id の形で)
function get_my_id_url() {
  $date = get_post(get_the_ID());
  $post_datetime = strtotime($date->post_date);
  $num_arg = array(
    'post_type'      => 'schedule',
    'posts_per_page' => -1,
    'date_query'     => array(
      'year'     => date('Y', $post_datetime),
      'monthnum' => date('n', $post_datetime),
      'day'      => date('j', $post_datetime),
      'hour'     => date('G', $post_datetime),
      'minute'   => (int) date('i', $post_datetime),
      'second'   => (int) date('s', $post_datetime),
      'compare'  => '>=',
    ),
  );
  $my_query = get_posts($num_arg);
  $my_count = count($my_query);
  $my_page_num = (int) ceil($my_count / 6);
  $my_slug = $my_page_num === 1 ? '#post-' : "page/$my_page_num#post-";
  $my_id_url = esc_url(home_url('/schedule/')) . $my_slug . get_the_ID();
  return $my_id_url;
}