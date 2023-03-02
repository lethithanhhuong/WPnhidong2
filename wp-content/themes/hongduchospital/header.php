<?php

/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @author : Đức code supper 
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_site_icon(); ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="<?php echo get_site_url() ?>/template/css/metu.css">
	<link rel="stylesheet" href="<?php echo get_site_url() ?>/template/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_site_url() ?>/template/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_site_url() ?>/template/css/style.css">
	<link rel="stylesheet" href="<?php echo get_site_url() ?>/template/js/old-master/wprmenu.css">
	<link rel="stylesheet" href="<?php echo get_site_url() ?>/template/js/old-master/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_site_url() ?>/template/js/swiper/swiper.min.css">
	<link rel="stylesheet" href="<?php echo get_site_url() ?>/template/js/Font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_site_url() ?>/template/js/dist/css/lightgallery.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	
	<script type="text/javascript">
      ajaxurl = <?php echo admin_url('admin-ajax.php'); ?>
	  </script>
    <?php wp_head(); ?>
</head>
<?php
if (wp_is_mobile()) {
    $body = 'mobile-detect';
} else {
    $body = 'desktop-detect';
}
?>
<body <?php body_class($body); ?> data-rsssl=1 class="home blog">

	<header id="header" class="header">
		
		<section class="grid__xl header2" id="bannner-hinh-anh">
			<div class="box">
				<div class="d__fl">
					<div class="header2_col1">
						<div class="header2_col1_h1"> <?php echo get_custom_logo(); ?></div>
					</div>
					<div class="header2_col3 d_xl">
						<form role="search" method="get" action=" <?php echo esc_url(home_url('/')); ?>"  id="searchform" class="d__fl">
						<td colspan="3">
							<input  type="search" value="<?php echo get_search_query(); ?>"id="s"  name="s" title="Tìm kiếm: "   placeholder="Tìm kiếm..." />
								<button type="submit" value="Search"><i class="fa fa-search" style="color:#00ae48"></i></button>
							</td>
						
						</form>

					</div>
					<div class="header2_col4 d_xl">
						<a target="_blank" href="<?php echo mona_option('order_note_bacs6'); ?>"><i class="fa fa-facebook"></i></a>
						<a class="cusstom-a-tyoutube" target="_blank" href="<?php echo mona_option('order_note_youtbe'); ?>"> <i class="fa fa-youtube-play"></i></a>
					</div>

					<section class="content-the-tag-bai-viet dahh-sach-tu-khoa tưtưưư-khoa-o-header">
						<div class="container">
								<div class="contentbox">
									<ul class="col-2-list content">
										<?php
											$tags = get_tags();
											foreach ($tags as $tag) {
												echo '<li class="li-the-tag"><a href="' . get_category_link($tag->term_id) . '">' . $tag->name . '</a></li>';
											}
											?>
									</ul>
							</div>
						</div>
					</section>
					
				</div>
			</div>
		</section>

		<style>
			.cbp-spmenu {
				height: 0;
				overflow: hidden
			}
		</style>
		<svg width="0" height="0" style="display: block;overflow: hidden;">
			<symbol id="svg_wpr_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
				style="width: 25px; height: 50px;vertical-align: middle;fill: currentColor;overflow: hidden;">
				<path fill="currentColor"
					d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z">
				</path>
			</symbol>
		</svg>
		<div class="wprm-wrapper">
			<div class="wprm-overlay"></div>
			<div id="wprmenu_bar" class="wprmenu_bar bodyslide left widget-menu-left wpr-logo-left">
				<div class="hamburger hamburger--slider"><span class="hamburger-box"><span
							class="hamburger-inner"></span></span></div>
				<div class="wprm_logo"> <?php echo get_custom_logo(); ?></div>
				<div class="wprmenu_bar__dang_ky"><a  href="https://dev-mobile.droh.co/webapp-nd2/"  btn-id="modal_metu_2">Đăng ký khám</a></div>
				<div class="wprm_search">
					<i id="wprm_search_icon" class="d_flex1"><svg style="width: 20px; height: 20px;">
							<use xlink:href="#svg_wpr_1"></use>
						</svg></i>
					<div class="wprm_search_form">
						<form method="get" action="<?php echo esc_url(home_url('/')); ?>"  id="searchform">
						<td colspan="3">
						<input type="text"  ist="my-list" value="<?php echo get_search_query(); ?>"id="s"  name="s" placeholder="Tìm kiếm...">
								<button type="submit" value="search"><i><svg style="width: 20px; height: 20px;">
										<use xlink:href="#svg_wpr_1"></use>
							</svg></i></button>
							</td>
						</form>
					</div>
				</div>
			</div>
			<div id="mg-wprm-wrap" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left default">
			<?php
                        wp_nav_menu(array(
                            'container' => false,
                            'container_class' => '',
                            'menu_class' => 'menu',
                            'menu_id' => 'wprmenu_menu_ul',
                            'theme_location' => 'primary-menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'fallback_cb' => false,
                            'walker' => new Mona_Custom_Walker_Nav_Menu,
                        ));?>

					<section class="content-the-tag-bai-viet dahh-sach-tu-khoa tưtưưư-khoa-o-header">
						<div class="container">
								<div class="contentbox">
									<ul class="tags-nav">
										<?php
											$tags = get_tags();
											foreach ($tags as $tag) {
												echo '<li class="li-the-tag"><a href="' . get_category_link($tag->term_id) . '">' . $tag->name . '</a></li>';
											}
											?>
									</ul>
							</div>
						</div>
					</section>
				
			</div>
		</div>
		<section class="grid__xl header3 d_xl" id="navbar">
			<div class="box">
				<div class="">
					<div class="header3__col1"> <?php echo get_custom_logo(); ?></div>
					<div class="header3__col2">
						<div class="main-menu-top">
                        <?php
                        wp_nav_menu(array(
                            'container' => false,
                            'container_class' => '',
                            'menu_class' => 'menu',
                            'menu_id' => 'menu-main-menu',
                            'theme_location' => 'primary-menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'fallback_cb' => false,
                            'walker' => new Mona_Custom_Walker_Nav_Menu,
                        ));?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</header>

<body >
    