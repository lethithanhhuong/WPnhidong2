<?php
get_header();
while (have_posts()) :
    the_post();
?>

    <main class="main main-tuyendung-dt">
        <div class="sec-breadcrumb" >
            <div class="container">
                <ul class="breadcrumb">
                    <li >
                        <a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monameida') ?></a>
                    </li>
                    <li  >
                        <a href="<?php echo get_the_permalink(MONA_TUYEN_DUNG) ?>"><?php echo __('Tuyển dụng') ?></a>
                    </li>
                    <li class="--active" >
                        <a href="javascript:;"><?php the_title() ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="sec-tuyendung-dt sec-60">
            <div class="container">
                <div class="mona-frame">
                    <div class="cols">
                        <div class="col left">
                            <div class="cate-mobile" >
                                <div class="cate-mobile-list">
                                    <?php get_template_part('patch/danh', 'muc') ?>
                                </div>
                                <div class="overlay-cate"></div>
                            </div>
                        </div>
                        <div class="col right" >
                            <p class="date">
                                <img src="<?php echo get_site_url() ?>/template/images/icon-calender.png" alt="" />
                                <span> <?php echo get_the_date('d F, Y') ?></span>
                            </p>
                            <h2 class="main-title --mb-20 tt-22 t-capitalize">
                                <?php the_title() ?>
                            </h2>
                            <div class="mona-content">
                                <?php the_content() ?>
                            </div>
                            <div class="share">
                                <div class="tags-list">
                                    <p class="tt"><?php echo __('Tags:', 'monamedia') ?></p>
                                    <div>
                                        <?php
                                        $tags = get_the_tags();
                                        if ($tags != '') {
                                            foreach ($tags as $tag) {
                                                echo '<a class="tag" href="' . get_category_link($tag->term_id) . '">' . $tag->name . '</a>';
                                            }
                                        } else {
                                            echo 'Chưa có thẻ tag';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="share-social">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()); ?>&t=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=500');
                                    return false;" class="item facebook">
                                    <img src="<?php echo get_site_url() ?>/template/images/icon-share-facebook.png" alt="" />
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_the_permalink()); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=500');
                                    return false;" class="item linkedin single-social"> <img src="<?php echo get_site_url() ?>/template/images/icon-like.png" alt="" /></a></li>
                        
                                <a href="https://sp.zalo.me/share_inline?d=<?php echo base64_encode(json_encode(array('url' => urlencode(get_the_permalink())))); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=500'); return false;" class="item mona-bg-icon"><img class="twitter-icon" src="<?php echo get_site_url() ?>/template/images/icon-zalo.png" alt="" /></a>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $post_lien_quan = wp_get_object_terms($post->ID, 'recruitments', array('fields' => 'ids'));
        $args = array(
            'post_type' => 'recruitment',
            'post_status' => 'publish',
            'posts_per_page' => 7,
            'tax_query' => array(
                array(
                    'taxonomy' => 'recruitments',
                    'field' => 'id',
                    'terms' => $post_lien_quan,
                )
            ),
            'post__not_in' => array($post->ID),
        );
        $post_bai_viet = new WP_Query($args);
        if ($post_bai_viet->have_posts() != '') {
        ?>
            <section class="c-related sec-60 --pt-0" >
                <div class="container">
                    <div class="c-related-wrap">
                        <h2 class="main-title tt-22 t-capitalize --mb-25">
                            <?php echo __(' Tuyển Dụng Liên Quan','monamedia') ?>                        
                        </h2>
                        <div class="is-slider is-slider-common --swiper-pag --auto --loop">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php
                                    $time_post_new = 0;
                                    while ($post_bai_viet->have_posts()) {
                                        $time_post_new += 100;
                                        $post_bai_viet->the_post();
                                    ?>
                                        <div class="swiper-slide"  data-aos-delay="<?php echo $time_post_new ?>">
                                            <div class="c-video">
                                                <div class="c-video-img">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php the_post_thumbnail('280x180') ?>
                                                    </a>
                                                </div>
                                                <div class="c-video-content">
                                                    <h3 class="main-title tt-16 --mb-10">
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php the_title() ?>
                                                        </a>
                                                    </h3>
                                                    <p class="desc">
                                                        <?php echo wp_trim_words(get_the_excerpt(), 20)  ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                    $time_post_new++;
                                    wp_reset_query() ?>
                                </div>
                                <div class="swiper-pagination"  data-aos-delay="200"></div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
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