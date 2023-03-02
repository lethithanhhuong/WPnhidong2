<?php

/**
 * Template name: đội ngũ Page
 * @author : Hy Hý
 */
get_header();
while (have_posts()) :
	the_post();
?>
	<main class="main main-noibat">
		<div class="sec-breadcrumb" data-aos="zoom-out">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
					<li class="--active"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
				</ul>
			</div>
		</div>
		<div class="aside-search" data-aos="fade-up">
			<?php echo get_search_form() ?>
		</div>
		<div class="pd sec-3">
			<div class="container">
				<div class="pd__wrap">
					<div class="pd__sell" data-aos="fade">
						<div class="pd__tabs-content data-return shop-container">
							<div class="tab-content --active">
								<div class="pd__list">
									<div class="cols">
										<?php
										$args = array(
											'post_type' => 'product',
											'posts_per_page' => 12,
											'order' => 'DESC',
										);
										$my_query = new WP_Query($args);
										$time_delay =0;
										while ($my_query->have_posts()) {
											$time_delay+=50;
											$my_query->the_post();
										?>
											<div class="col" data-aos="fade-left" data-aos-delay="<?php echo $time_delay ?>" >

												<div class="c-pd__item"> 
													<div class="c-pd__img">
														<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('384x284') ?></a>
													</div>
													<div class="c-pd__content">
														<a href="<?php the_permalink() ?>" class="title">
															<?php the_title() ?>
														</a>
													</div>
												</div>
											</div>
										<?php
										$time_delay++;
										}
										wp_reset_query();
										?>
									</div>
								</div>
								<div class="pagination">
									<nav>
										<?php mona_page_navi($my_query) ?>
									</nav>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('pactch/tintuc', 'page') ?>
	</main>
	<script>
		function gosort(url) {
			window.location.href = url;
		}
	</script>
<?php
endwhile;
get_footer();
?>