<?php
// cssとjs,jQueryの読み込み
function my_scripts() {
	wp_enqueue_style( 'css-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ),'', true );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blog'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


// カスタム投稿
function self_made_post_type() {
	register_post_type( 'voice',
			array(
					'label' => 'お客様の声', //表示名
					'public'        => true, //公開状態
					'exclude_from_search' => false, //検索対象に含めるか
					'show_ui' => true, //管理画面に表示するか
					'show_in_menu' => true, //管理画面のメニューに表示するか
					'menu_position' => 5, //管理メニューの表示位置を指定
					'hierarchical' => true, //階層構造を持たせるか
					'has_archive'   => true, //この投稿タイプのアーカイブを作成するか
					'supports' => array(
							'title',
							'editor',
							'comments',
							'excerpt',
							'thumbnail',
							'custom-fields',
							'post-formats',
							'page-attributes',
							'trackbacks',
							'revisions',
							'author'
					), //編集画面で使用するフィールド
			)
	);
}
add_action( 'init', 'self_made_post_type', 1 );


//カテゴリタイプの設定（カスタムタクソノミーの設定）
register_taxonomy(
	'cat_voice', //カテゴリー名（任意）
	'voice', //カスタム投稿名
	array(
		'hierarchical' => true, //カテゴリータイプの指定
		'update_count_callback' => '_update_post_term_count',
		//ダッシュボードに表示させる名前
		'label' => 'voiceのカテゴリー', 
		'public' => true,
		'show_ui' => true
	)
);    



//デフォルトスクリプト
// function my_scripts() {
// 	if ( is_single() ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
// }

add_action( 'wp_enqueue_scripts', 'my_scripts' );


//概要の文字数
function my_length($length) {
	return 60;
}

add_filter('excerpt_mblength','my_length');


//概要（抜粋）の省略記号
function my_more($more) {
	return '…';
}

add_filter('excerpt_more', 'my_more');


//アイキャッチ画像
add_theme_support( 'post-thumbnails' );



// ウィジェット
register_sidebar( array(
	'id' => 'column01',
	'name' => 'カラム01',
	'description' => '１段目に表示するウィジェットを指定。',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>'
) );

register_sidebar( array(
	'id' => 'column02',
	'name' => 'カラム02',
	'description' => '２段目に表示するウィジェットを指定。',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>'
) );

register_sidebar( array(
	'id' => 'column03',
	'name' => 'カラム03',
	'description' => '３段目に表示するウィジェットを指定。',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>'
) );


//検索フォーム
add_theme_support( 'html5', array('search-form') );


//メインクエリの変更
function my_query($query) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
 	}

	if ( $query->is_home() ) {
		$query->set( 'posts_per_page', '10' );
	}

}

add_action( 'pre_get_posts', 'my_query' );

//カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション' );

add_theme_support( 'post-thumbnails' );
//アイキャッチ画像の定義と切り抜き
add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
 add_image_size( '505_thumbnail', 505, 354, true );
 add_image_size( '600_thumbnail', 600, 340, true );
 add_image_size( '240_thumbnail', 240, 180, true );
}

//
function replaceImagePath($arg) {
	$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
	return $content;
}  
add_action('the_content', 'replaceImagePath');

//ページネーション
function pagination($pages = '', $range = 1)
{
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><div class=\"pagination-box\"><span class=\"page-of\"> ".$paged." / ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div></div>\n";
     }
}
