<?php get_header(); 
global $wp_query;
// $cats = get_categories();
$current_term = $wp_query->get_queried_object();
$current_slug = esc_html($current_term->slug); ?>
<main class="main main-blog main-thitruong">
    <div class="sec-breadcrumb" data-aos="zoom-out">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
                <li class="--active"><?php echo __('Tags :','monamedia') ?> <?php echo $current_term->name; ?></li>
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
								<?php echo __('Tags :','monamedia') ?> <?php echo $current_term->name; ?>
                            </h2>
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
</main>
<?php get_footer();