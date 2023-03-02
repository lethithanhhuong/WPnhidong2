<?php
get_header();
$obz = get_queried_object();
$home1 = get_field('doi_ngu_1',$obz);
?>
<main class="main main-noibat">
    <div class="sec-breadcrumb" data-aos="zoom-out">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo  home_url() ?>"><?php echo  __('Trang chủ', 'monamedia') ?></a></li>
                <li class="--active"><a ><?php single_term_title() ?></a></li>
            </ul>
        </div>
    </div>
    <div class="aside-search" data-aos="fade-up">
        <?php echo  get_search_form() ?>
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
                                    while (have_posts()) {
                                        the_post();
                                    ?>
                                    <div class="col" data-aos="fade-left" data-aos-delay="50">
                                        <div class="c-pd__item">
                                            <div class="c-pd__img"><a href="<?php echo  get_permalink()?>"
                                                    title="<?php echo get_the_title()?>"><?php the_post_thumbnail('384x284')?></a>
                                            </div>
                                        </div>
                                        <div class="c-pd__content">
                                            <div><a class="title" href="<?php echo  get_permalink()?>"
                                                    title="<?php  echo get_the_title()?>"><?php echo  get_the_title()?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }
                                wp_reset_query(); ?>
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

  
    <?php get_template_part('pactch/tintuc', 'page') ?>
</main>
<script>
function gosort(url) {
    window.location.href = url;
}
</script>
<?php
get_footer();
?>