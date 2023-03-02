<?php
get_header();
while (have_posts()) :
	the_post();
?>
<main class="main main-blog-dt">
    <div class="sec-breadcrumb" >
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
                <li class="--active"><a><?php the_title() ?></a></li>
            </ul>
        </div>
    </div>

    <div class="blog-area sec-2">
        <div class="container">
            <div class="cols">
                <div class="col">
                    <div class="blog-dt" >
                        <div class="blog-dt__content">
                            <div class="mona-content">
                                <!-- <h1 class="main-title">
                                    <?php the_title() ?>
                                </h1> -->
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
                                <?php the_content() ?>
                            </div>
                            <div class="blog-detail-share">
                                <p class="blog-detail-share-title">SHARE:</p>
                                <div class="blog-detail-share-content">
                                    <?php get_template_part('patch/social', 'share') ?>
                                </div>
                            </div>
                            <div class="box-comment wow rotateIn">
                                <?php comments_template() ?>
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


    <?php echo get_template_part('patch/tintuc', 'page') ?>
</main>
<?php
endwhile;
get_footer();
?>