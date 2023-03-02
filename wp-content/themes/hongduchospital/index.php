<?php
get_header();
?>

<main class="main main-blog main-thitruong">
    <div class="sec-breadcrumb" data-aos="zoom-out">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'one_heath') ?></a></li>
                <li class="--active"> <?php  single_post_title() ?></li>
            </ul>
        </div>
    </div>


    <section class="blog-area ">
        <div class="container">
            <div class="cols">
                <div class="col">
                    <div class="blog-thitruong --mb-60 pd-links-slider-wrap">
                        <div class="main-title-wrap --mb-30">
                            <h2 class="main-title --uppercase" data-aos="fade-down">
                                <?php  echo __('TIN TỨC','one_heath') ?>
                            </h2>
                           
                            <div class="pd-links-slider is-slider slider-index">
                            <div class="swiper-button-prev st-2"></div>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper content-bo-loc">

                                        <?php
                                $obz = get_queried_object();
                                $cate = get_terms(array(
                                    'taxonomy' => 'category',
                                    'parent' => 0,
                                ));
                                foreach ($cate as $category) {
                                    
                                ?>
                                        <div class="swiper-slide  item">
                                            <div class="mina">
                                                <a href="<?php echo get_category_link($category->term_id); ?>"><img
                                                        class="custom-icon-img" src="<?php $image = get_field('icon_category',$category);
                                            $size ='30x30';
                                           
                                        echo wp_get_attachment_image_url($image,$size) ?>" alt=""> &nbsp;
                                                    <?php echo  $category->name ?></a>
                                            </div>
                                        </div>
                                        <?php
                                }
                                ?>
                                        <!-- <div class="swiper-pagination"></div> -->
                                    </div>
                                </div>
                                <div class="swiper-button-next st-2"></div>
                            </div>
                        </div>
                        <div class="blog-area__list">
                            <?php
                              
                                if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
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
                                    }
                                    wp_reset_query();
                                    global $wp_query;
                                  
                                    if ($wp_query->max_num_pages >1 )
                                    echo '<div class="misha_loadmore loadmore">Xem Thêm</div>'; 
                                    ?>
                            <div class="infor_01"></div>
                            <?php 

                                } else {
                                    echo 'Hiện tại chưa có bài viết';
                                }
                                ?>
                        </div>

                    </div>
                    <div class="blog-exp --mb-60">
                        <div class="main-title-wrap --mb-30" data-aos="fade-down">
                            <h2 class="main-title --uppercase"><?php echo __('Tin tuyển dụng', 'one_heath') ?></h2>
                        </div>
                        <div class="blog-area__list">
                            <div class="is-slider --auto --loop" data-aos="fade-up">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php
                                            $args = array(
                                                'post_type' => 'post',
                                                'posts_per_page' => -1,
                                                'cat' => 212,
                                            );
                                            $query = new WP_Query($args);
                                            while ($query->have_posts()) {
                                                $query->the_post();
                                            ?>
                                        <div class="swiper-slide">
                                            <div class="blog-are__item">
                                                <div class="c-blog__hor --hor-2">
                                                    <div class="img cusstom-img">
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php the_post_thumbnail('270x190') ?>
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
                                        <?php }
                                            wp_reset_query();
                                            ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                        <div class="blog-area__pagination" data-aos="fade-up">
                            <a
                                href="<?php echo get_category_link(212); ?>"><?php echo __('Xem thêm', 'one_heath') ?></a>
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
    </section>

</main>



<?php
get_footer();
?>