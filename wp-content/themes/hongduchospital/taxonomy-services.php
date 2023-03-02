<?php


get_header();

?>

<main class="main main-blog main-thitruong">
    <div class="sec-breadcrumb" data-aos="zoom-out">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
                <li class="--active"><a><?php single_term_title() ?></a></li>
            </ul>
        </div>
    </div>
        <section class="blog sec-2 du-an-page">
        <div class="container">
            <div class="blog-special">
                <div class="cols">
                    <div class="col left" data-aos="fade-up">
                        <div class="blog-special__wrap">
                            <div class="cols">
                                <?php
                                    $count = 0;
                                    while (have_posts() && $count < 1) {
                                        the_post();
                                    ?>
                                <div class="col col-cc">
                                    <div class="blog-special__item">
                                        <div class="c-blog__hor">
                                            <div class="img custom-css-thumbnail">
                                                <a href="<?php the_permalink() ?>">
                                                    <?php the_post_thumbnail('600x400') ?>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="<?php the_permalink() ?>" class="title">
                                                    <?php the_title() ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                        $count++;
                                    }
                                    wp_reset_query();

                                    ?>
                                <div class="col col-cc">
                                    <div class="blog-special__item">
                                        <?php
                                            $count = 1;
                                            while (have_posts() && $count < 3) {
                                                the_post();
                                            ?>
                                        <div class="c-blog__hor">
                                            <div class="img">
                                                <a href="<?php the_permalink() ?>">
                                                    <?php the_post_thumbnail('270x190') ?>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <a href="<?php the_permalink() ?>" class="title">
                                                    <?php the_title() ?>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                                $count++;
                                            }
                                            wp_reset_query();
                                            ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col right" data-aos="fade-up">
                        <div class="blog-special__item">
                            <?php
                            $count = 3;
                                while (have_posts() && $count < 5) {
                                    the_post();
                                ?>
                            <div class="c-blog__hor">
                                <div class="img">
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail('100x77') ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="<?php the_permalink() ?>" class="title">
                                        <?php the_title() ?>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $count++;
                                }
                                wp_reset_query();
                                ?>
                            <?php
                                ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pd sec-khon-bao">
        <div class="container">
            <div class="pd__wrap">
                <div class="pd__sell" data-aos="fade">
                    <div class="pd__tabs-content data-return shop-container">
                        <div class="tab-content --active">
                            <div class="pd__list">
                                <div class="cols projects">
                                    <?php
										$time_delay =0;
										while (have_posts()) {
											$time_delay+=50;
											the_post();
										?>
                                    <div class="col box-shadow-ne" data-aos="fade-left" data-aos-delay="<?php echo $time_delay ?>">
                                        <div class="c-pd__item">
                                            <div class="c-pd__img">
                                                <a
                                                    href="<?php the_permalink() ?>"><?php the_post_thumbnail('384x284') ?></a>
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
										$time_delay++;
										}
										wp_reset_query();
										?>
                                        <?php
                                            global $wp_query;
                                          
                                            if ($wp_query->max_num_pages >1 )
                                            echo '<div class="misha_loadmore loadmore">Xem Thêm</div>'; 
                                            ?>
                                        <div class="infor_01"></div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
</main>



<?php
get_footer();
?>