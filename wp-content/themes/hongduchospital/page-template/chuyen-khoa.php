<?php

/**
 * Template name: chuyen-khoa Page
 * @author :duc
 */
get_header();
while (have_posts()) :
    the_post();
?>
<main class="main main-blog main-thitruong">
    <div class="sec-breadcrumb" data-aos="zoom-out">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'one_heath') ?></a></li>
                <li class="--active"> <?php echo get_the_title() ?></li>
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
                                <?php  echo get_the_title() ?>
                            </h2>
                           
                            <div class="pd-links-slider is-slider slider-index">
                            <div class="swiper-button-prev st-2"></div>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper content-bo-loc">

                                        <?php
                                $obz = get_queried_object();
                                $cate = get_terms(array(
                                    'taxonomy' => 'cac_chuyen_khoa',
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
                                    </div>
                                </div>
                                <div class="swiper-button-next st-2"></div>
                            </div>
                        </div>
                        <div class="blog-area__list">
                        <?php
                                    $args = array(
                                        'post_type' => 'chuyen_khoa',
                                    'posts_per_page' => 10,
                                    'order' => 'DESC',
                                    );
                                    $query_new = new WP_Query($args);
                                    if($query_new->have_posts()){
                                    while ($query_new->have_posts()) {
                                        $query_new->the_post();
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
                                    global $query_new;
                                    ?>
                                  
                                    <div class="pagination">
                                <nav>
                                    <?php mona_page_navi($query_new) ?>
                                </nav>
                            </div>
                            <?php 

                                } else {
                                    echo 'Hiện tại chưa có bài viết';
                                }
                                ?>
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
endwhile;
get_footer();
?>