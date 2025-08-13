<?php
// セットアップ（機能サポート、メニュー登録、HTML5対応など）
function nomal_setup() {
  add_theme_support( 'title-tag' );                // <title> をWPに任せる
  add_theme_support( 'post-thumbnails' );          // アイキャッチ
  add_theme_support( 'html5', [ 'search-form', 'gallery', 'caption', 'comment-form', 'comment-list', 'style', 'script' ] );
  register_nav_menus( [
    'global' => 'グローバルナビ',
    'footer' => 'フッターナビ',
  ] );
  load_theme_textdomain( 'nomal', get_template_directory() . '/languages' ); // 翻訳（任意）
}
add_action( 'after_setup_theme', 'nomal_setup' );

// CSS/JSの読み込み
function nomal_assets() {

  wp_enqueue_script(
    'jquery-cdn',
    'https://code.jquery.com/jquery-3.4.1.min.js',
    [],
    '3.4.1',
    true
  );

  // bxSlider（CSS + JS）
  wp_enqueue_style(
      'bxslider-style',
      'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css',
      [],
      '4.2.15'
  );
  wp_enqueue_script(
      'bxslider-js',
      'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js',
      ['jquery-cdn'],
      '4.2.15',
      true
  );

  // scrollgress（JS）
  wp_enqueue_script(
      'scrollgress-js',
      'https://cdnjs.cloudflare.com/ajax/libs/scrollgress/2.0.0/scrollgress.min.js',
      [],
      '2.0.0',
      true
  );

  // Google Fonts
  wp_enqueue_style(
      'google-font-lato',
      'https://fonts.googleapis.com/css?family=Lato:900&display=swap',
      [],
      null
  );
	// wp_enqueue_style( 'nomal-reset', get_theme_file_uri( '/assets/css/reset.css' ), [], '1.0' );
  //   wp_enqueue_style( 'mybiz-layout', get_theme_file_uri( '/assets/css/layout.css' ), ['mybiz-reset'], '1.0' );
  //   wp_enqueue_style( 'mybiz-parts', get_theme_file_uri( '/assets/css/parts.css' ), ['mybiz-layout'], '1.0' );
  //   wp_enqueue_style( 'mybiz-style-rtl', get_theme_file_uri( '/assets/css/style-rtl.css' ), ['mybiz-parts'], '1.0' );
  //   wp_enqueue_style( 'mybiz-style-main', get_theme_file_uri( '/assets/css/style.css' ), ['mybiz-style-rtl'], '1.0' );
	// wp_enqueue_script( 'mybiz-main', get_theme_file_uri( '/assets/js/main.js' ), [], '1.0', true );
  wp_enqueue_style( 'nomal-reset', get_theme_file_uri( '/assets/css/reset.css' ), [], '1.0' );
  wp_enqueue_style( 'nomal-layout', get_theme_file_uri( '/assets/css/layout.css' ), ['nomal-reset'], '1.0' );
  wp_enqueue_style( 'nomal-parts', get_theme_file_uri( '/assets/css/parts.css' ), ['nomal-layout'], '1.0' );
  wp_enqueue_style( 'nomal-style-main', get_theme_file_uri( '/style.css' ), ['nomal-style-rtl'], '1.0' );
  wp_enqueue_script( 'nomal-main', get_theme_file_uri( '/assets/js/script.js' ), ['jquery-cdn', 'bxslider-js', 'scrollgress-js'], '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'nomal_assets' );

// ウィジェットエリア（任意：サイドバー）
function nomal_widgets_init() {
  register_sidebar( [
    'name'          => 'サイドバー',
    'id'            => 'sidebar-1',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ] );
}
add_action( 'widgets_init', 'nomal_widgets_init' );

// function my_theme_scripts() {
// 	wp_enqueue_script('jquery');
// 	wp_enqueue_script(
// 		'custom-script',
// 		get_template_directory_uri() . '/js/main.js',
// 		array('jquery'),
// 		'1.0',
// 		true
// 	);

// 	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
// 	wp_enqueue_style('style-rtf', get_template_directory_uri() . '/css/style-rtf.css', array(), '1.0', 'all');
//     wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0', 'all');
//     wp_enqueue_style('parts', get_template_directory_uri() . '/css/parts.css', array(), '1.0', 'all');
//     wp_enqueue_style('layout', get_template_directory_uri() . '/css/layout.css', array(), '1.0', 'all');
// }

// add_action('wp_enqueue_scripts', 'my_theme_scripts');