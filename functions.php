<?php
/**
 * @package MAY'S
 * @subpackage MAY'S
 * @since MAY'S 1.0
 */

add_filter( 'show_admin_bar', '__return_false' );
function change_query_conditions($query) {
	if ( is_admin() || !$query->is_main_query() ) return;
	if ( $query->is_post_type_archive('gallery') ) {
		$query->set( 'posts_per_page', '18' );
	} else if ( $query->is_post_type_archive('eng-gallery') ) {
		$query->set( 'posts_per_page', '20' );
	} else if ( $query->is_tax('casetype') ) {
		$query->set( 'posts_per_page', '20' );
	} else if ( $query->is_tax('eng-casetype') ) {
		$query->set( 'posts_per_page', '20' );
	} else if ( $query->is_post_type_archive('news') ) {
		$query->set( 'posts_per_page', '20' );
	} else if ( $query->is_post_type_archive('eng-news') ) {
		$query->set( 'posts_per_page', '20' );
	}
}
add_action( 'pre_get_posts', 'change_query_conditions' );
function pickUpImages($key) {
  $arr = post_custom($key);
  if (is_array($arr)) {
    $imgs = '';
    foreach ($arr as $img) {
      $imgs .= '<div>'. wp_get_attachment_image($img,'full'). '</div>';
    }
    return $imgs;
  } else {
    return '<div>'. wp_get_attachment_image($arr,'full'). '</div>';
  }
}
function pickUpThumbnailImages($key) {
  $arr = post_custom($key);
  if (is_array($arr)) {
    $imgs = '';
    foreach ($arr as $img) {
      $imgs .= '<div><span>'. wp_get_attachment_image($img,'full'). '</span></div>';
    }
    return $imgs;
  } else {
    return '<div><span>'. wp_get_attachment_image($arr,'full'). '</span></div>';
  }
}
function pickUpFirstImage($key) {
	$arr = post_custom($key);
	if (is_array($arr)) {
		$imgs = '';
		foreach ($arr as $img) {
			$imgs .= wp_get_attachment_image($img,'full');
			break;
		}
		return $imgs;
	} else {
		return wp_get_attachment_image($arr,'full');
	}
}
function get_roomtype() {
	$cats = get_the_terms(get_the_ID(),'casetype');
	$ret = array();
	foreach ((array)$cats as $cat) {
		if ($cat->parent==2) array_push($ret,$cat->name);
	}
	return implode(' / ',$ret);
}
function get_eng_roomtype() {
	$cats = get_the_terms(get_the_ID(),'eng-casetype');
	$ret = array();
	foreach ((array)$cats as $cat) {
		if ($cat->parent==3) array_push($ret,$cat->name);
	}
	return implode(' / ',$ret);
}
function get_casestyle() {
	$cats = get_the_terms(get_the_ID(),'casetype');
	$ret = array();
	foreach ((array)$cats as $cat) {
		if ($cat->parent==4) array_push($ret,$cat->name);
	}
	return implode(' / ',$ret);
}
function get_product_brand() {
	$cats = get_the_terms(get_the_ID(),'product_brand');
	$ret = array();
	foreach ((array)$cats as $cat) {
		array_push($ret,$cat->name);
	}
	return implode(' / ',$ret);
}
function get_eng_casestyle() {
	$cats = get_the_terms(get_the_ID(),'eng-casetype');
	$ret = array();
	foreach ((array)$cats as $cat) {
		if ($cat->parent==5) array_push($ret,$cat->name);
	}
	return implode(' / ',$ret);
}
function the_pagination($pages = '', $range = 5){
	$showitems = ($range * 2)+1;
	global $paged;
	if (empty($paged)) $paged = 1;
	if ($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if (!$pages) $pages = 1;
	}
	if (1 != $pages) {
		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? '<span>'.$i.'</span>':'<a href="'.get_pagenum_link($i).'">'.$i.'</a>';
				//if ($i <= $pages-1) echo ', ';
			}
		}
	}
}
function is_mobile() {
	$useragents = array(
		'iPhone',
		'iPod',
		'Android',
		'Mobile'
	);
	$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
function switchLanguage() {
	global $post;
	if (!$post->post_parent) return;
	$p = get_post($post->post_parent);
	/*if ($p->post_name==='eng') {
		include 'page-'.$post->post_name.'-eng.php';
		exit;
	}*/
}

/**
 * Added by Zac Fukuda in 2020
 */
add_action('after_setup_theme', 'add_theme_support_post_thumbnail');
function add_theme_support_post_thumbnail() {
	add_theme_support( 'post-thumbnails' );
}

function mays_register_nav_menu() {
	register_nav_menus(array(
      'global_menu' => __('Global Menu', 'mays2020'),
      'global_menu_en' => __('Global Menu (English)', 'mays2020'),
      /*'footer_menu'  => __('Footer Menu', 'mays2020'),*/
	  'global_menu_2' => __('Global Menu 2', 'mays2020'),
      'global_menu_2_en' => __('Global Menu 2 (English)', 'mays2020'),
	));
}
add_action('after_setup_theme', 'mays_register_nav_menu', 0);

function is_to_show_lang_option() {
	$pages = array('lease', 'sales', 'contact');
	return is_page($pages);
}

/* Widget */
add_action('widgets_init', function() {
	$textdomain = 'mays2020';
	register_sidebar( array(
		'name' => __( 'サイドバー(右)', $textdomain ),
		'id' => 'sidebar',
		'description' => __( 'コラム右側.', $textdomain ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-ttl">',
		'after_title' => '</h2>'
	));
});

/* WordPress Popular Posts */
add_filter('wpp_post', function($html, $post, $instance) {
	$img = wp_get_attachment_image_src(get_post_thumbnail_id($post->id), 'thumbnail');
	$output = '<li><a href="'.get_the_permalink($post->id).'"><img src="'.$img[0].'" alt="'.esc_attr($post->title).'"><span class="ttl">'.$post->title.'</span></a></li>';
	return $output;
}, 10, 3);

/* Custom Tag cloud */
add_filter('widget_tag_cloud_args', function($args) {
	if (isset($args['taxonomy']) && $args['taxonomy'] == 'blog_tag') {
	  $args['number'] = 16;
	  $args['orderby'] = 'count';
	  $args['smallest'] = 14;
	  $args['largest'] = 14;
	  $args['unit'] = 'px';
	  $args['separator'] = '';
	  $args['format'] = 'list';
 	}

 	return $args;
});

/* Timber */
// Error
if (!class_exists('Timber')) {
	add_action( 'admin_notices', function() {
		echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
	});
	add_filter('template_include', function( $template ) {
		return get_stylesheet_directory() . '/static/no-timber.html';
	});
	return; 
}

Timber::$dirname = array('templates', 'views');
class MaysTimber extends Timber\Site {

	public function __construct() {
		parent::__construct();
	}

	public function add_to_context($context) {
		$context['site'] = $this;
		return $context;
	}
}
new MaysTimber();

/* Shortcode */
function shortcode_topics_carousel($atts) {
  $page_slug = get_post(get_the_ID())->post_name;
  $a = shortcode_atts(array(
    'posts_per_page' => 12,
  ), $atts);
  $args = array(
    'post_type' => 'column',
    'posts_per_page' => $a['posts_per_page'],
    'post_status' => 'publish',
    'tax_query' => array(
      array(
        'taxonomy' => 'blog_category',
        'field' => 'slug',
        'terms' => $page_slug,
      )
    )
  );

  $context['term'] = $page_slug;
  $context['posts'] = Timber::get_posts($args);
  return TImber::compile('components/shortcode-topics-carousel.twig', $context);
}
add_shortcode('topics_carousel', 'shortcode_topics_carousel');

add_shortcode('blog_tags', function($atts) {
  $tags = Timber::get_terms([
    'post_type' => 'column',
    'taxonomy' => 'blog_tag',
    'orderby' => 'count',
    'order' => 'DESC'
  ]);
	return Timber::compile('shortcodes/blog_tags.twig', ['tags' => $tags]);
});

add_shortcode('blog_ranking', function($atts) {
	if (!function_exists('wpp_get_mostpopular')) { return; }

	$args = shortcode_atts([
		'post_type' => 'column',
		'range' => 'all',
		'limit' => 20
	], $atts);

	$query = new WordPressPopularPosts\Query($args);
	$_posts = $query->get_posts();
	$ids = array_map(function($post) {
		return intval($post->id);
	}, $_posts);

	$posts = Timber::get_posts([
		'post_type' => 'column',
		'posts_per_page' => 20,
		'post__in' => $ids,
		'orderby' => 'post__in'
	]);

	return Timber::compile('shortcodes/blog_ranking.twig', ['posts' => $posts]);
});

add_action('init', 'create_taxonomy_casetypeEng');
function create_taxonomy_casetypeEng(){
  $args = array(
    'label'              => 'Room Type & Style',
    'public'             =>  true,
    'hierarchical'       =>  true,
    'public'             =>  true,
    'show_admin_column'  =>  true,
    'show_in_quick_edit' =>  true
  );
  register_taxonomy(
    'eng-casetype',
    'eng-gallery',
    $args
  );
}

function page_navigation() {
  global $wp_rewrite;
  global $wp_query;
  global $paged;
  $paginate_base = get_pagenum_link(1);
  if(($wp_query->max_num_pages) > 1) {
    if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
      $paginate_format = '';
      $paginate_base = add_query_arg('paged', '%#%');
    } else {
      $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/', 'paged');
      $paginate_base .= '%_%';
    }
    $result = paginate_links( array(
      'base' => $paginate_base,
      'format' => $paginate_format,
      'total' => $wp_query->max_num_pages,
      'mid_size' => 3,
      'current' => ($paged ? $paged : 1),
      'prev_text' => '&larr;',  
      'next_text' => '&rarr;',
    ));
    echo '<div class="nav-links">'."\n".$result."</div>\n";
  }
}

function is_parent_slug() {
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}
?>