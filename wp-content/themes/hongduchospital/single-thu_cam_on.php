<?php
get_header();
while (have_posts()) :
	the_post();
?>
<main class="main main-blog-dt">
    <div class="sec-breadcrumb" data-aos="zoom-out">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
                <?php
					$terms = get_the_terms($post->ID, 'category');
					if (is_array($terms)) {
						foreach ($terms as $item) {
					?>
                <li><a href="<?php echo get_term_link($item->term_id) ?>"><?php echo $item->name; ?></a></li>
                <?php
						}
					}
					?>
                <li class="--active"><a><?php the_title() ?></a></li>
            </ul>
        </div>
    </div>

    <div class="blog-area sec-2">
        <div class="container">
            <div class="cols">
                <div class="col">
                    <div class="blog-dt" data-aos="fade">
                        <div class="blog-dt__content">

                            <div class="mona-content">
                                <h1 class="main-title">
                                    <?php the_title() ?>
                                </h1>
                               <!-- <?php
									// viewCount(get_the_ID());
									// $post_views = get_post_meta(get_the_ID(), 'post_views_count', true);
									// if (!empty($post_views)) {
									?>
                                    <p class="date"><?php echo get_the_date('d/m/Y') ?> -
                                        <i class="fa fa-eye"></i> <?php echo $post_views; ?>
                                    </p> -->
                                    <?php
                                        // }
                                        ?>

                                <?php 
                                if(get_the_content() !=''){
                                    the_content();
                                }else{
                                    echo 'Bài viết chưa được nhập nội dung vui lòng quay lại sau.';
                                }
                                 ?>
                               
                                <div class="blog-detail-share">
                                    <p class="blog-detail-share-title">SHARE:</p>
                                    <div class="blog-detail-share-content">
                                        <?php get_template_part('patch/social', 'share') ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="blog-aside">
                        <?php get_template_part('patch/tintuc', 'hot') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $post_lien_quan = wp_get_object_terms($post->ID, 'category', array('fields' => 'ids'));
        $args = array(
            'post_type' => 'thu_cam_on',
            'post_status' => 'publish',
            'posts_per_page' => 8,
            'order' => 'DESC',
            'post__not_in' => array($post->ID),
        );
        $post_bai_viet = new WP_Query($args);
        if ($post_bai_viet->have_posts() != '') {
        ?>

    <section class="blog-best sec-2">
        <div class="container">
            <div class="blog-best__wrap">
                <h2 class="main-title --uppercase --mb-30" data-aos="fade-down">
                    <?php echo __('CÁC TIN KHÁC', 'monamedia') ?>
                </h2>
                <div class="is-slider --loop --auto" data-aos="fade-up">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
						$args = array(
							'post_type' => 'thu_cam_on',
							'posts_per_page' => 8,
							'order' => 'DESC',
							'post__not_in' => array(get_the_ID()),
						);
						while ($post_bai_viet->have_posts()) {
							$post_bai_viet->the_post();
						?>
                            <div class="swiper-slide">
                                <div class="blog-best__item">
                                    <div class="c-blog__hor --hor-2">
                                        <div class="img tin-tuc-xh custom-img-slider">
                                            <a href="<?php the_permalink() ?>">
                                                <?php the_post_thumbnail('270x146') ?>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="date"><?php echo get_the_date('d/m/Y') ?></p>
                                            <a href="<?php the_permalink() ?>" class="title">
                                                <?php the_title() ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
						}
						wp_reset_query();
						?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php } ?>
</main>

<?php
endwhile;
get_footer();
?>