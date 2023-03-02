<section class="blog-area ">
    <div class="container">
        <div class="cols">
            <div class="col">
                <div class="blog-thitruong --mb-60 pd-links-slider-wrap">
                    <div class="main-title-wrap --mb-30">
                        <h2 class="main-title --uppercase" data-aos="fade-down">
                            <?php  single_term_title() ?>
                        </h2>
                        <?php
                        $obz = get_queried_object();
                        $childs = mona_get_term_children($obz->term_id, $obz->taxonomy);
                        if (count($childs) > 0) { ?>
                        <div class="pd-links-slider is-slider slider-index">
                            <div class="swiper-button-prev st-2"></div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper content-bo-loc">

                                    <?php
                              
                                        $custom_term = get_terms(array('taxonomy' => $obz->taxonomy, 'term_taxonomy_id' => $childs));
                                        foreach ($custom_term as $item) {
                                        ?>
                                        <div class="swiper-slide  item 2">
                                            <div class="mina">
                                                <a href="<?php echo get_category_link($item->term_id); ?>">
                                                    <?php echo  $item->name ?></a>
                                            </div>
                                        </div>
                                    <?php }
                                   ?>


                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                            <div class="swiper-button-next st-2"></div>
                        </div>
                        <?php  }else{
                            echo 'co cc';
                        }  ?>
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

                                    ?>
                        <?php
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
                    <div class="pagination" data-aos="fade-up">
                        <nav>
                            <?php //mona_page_navi() ?>

                        </nav>

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