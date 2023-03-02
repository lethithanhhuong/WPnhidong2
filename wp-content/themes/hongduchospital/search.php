<?php
get_header();
?>

    <main class="main main-blog main-thitruong">
        <div class="sec-breadcrumb" data-aos="zoom-out">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
                    <li class="--active"><?php echo __('Tìm Kiếm') ?></li>
                </ul>
            </div>
        </div>
        <section class="blog-area ">
            <div class="container">
                <div class="cols">
                    <div class="col">
                        <div class="blog-thitruong --mb-60">
                            <div class="main-title-wrap --mb-30">
                                <h2 class="main-title --uppercase" data-aos="fade-down">
                                        <?php echo __('Kết quả tìm kiếm:') ?> <?php  global $wp_query; echo $wp_query->query['s'];  ?>
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
                                                        <p>
                                                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                    wp_reset_query();
                                } else {
                                    echo 'Hiện tại chưa có bài viết';
                                }
                                ?>
                            </div>
                            <div class="pagination" data-aos="fade-up">
                                <nav>
                                    <?php mona_page_navi() ?>
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
<?php
get_footer();
?>