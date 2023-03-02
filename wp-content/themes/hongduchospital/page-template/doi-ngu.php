<?php

/**
 * Template name: đội ngũ Page
 * @author : Hy Hý
 */
get_header();
while (have_posts()) :
	the_post();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<main class="main main-noibat">
    <div class="sec-breadcrumb" data-aos="zoom-out">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
                <li class="--active"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
            </ul>
        </div>
    </div>
    <div class="aside-search" data-aos="fade-up">
        <?php $cate = @$_GET['cate']; ?>
        <form method="get" id="searchform" class="searchform" action="<?php echo get_the_permalink(MONA_SEARCH); ?>">
            <div class="hd-right">
                <div class="hd-search">
                    <div class="hd-search-form" id="hd-search-form">
                        <!-- <select class="f-control" name="cate">
          <option value=""><?php _e('Đội ngũ bác sĩ', 'monamedia'); ?> </option>
              <?php
              $terms = get_terms(array('taxonomy' => 'product_cat'));
              if ($terms && !is_wp_error($terms)) {
                foreach ($terms as $item) {
                  $selected = '';
                  if ($cate == $item->slug) {
                    $selected = 'selected';
                  }
                  echo '<option ' . $selected . ' value="' . $item->slug . '">' . $item->name . '</option>';
                }
              }
              ?>
          </select> -->
                        <input type="text" class="f-control" name="key" value="<?php echo esc_html(@$_GET['key']); ?>"
                            id="key"
                            placeholder="<?php echo esc_attr_x('Nhập tên bác sĩ bạn cần tìm', 'placeholder', 'monamedia'); ?>" />
                        <button type="submit" class="main-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <section class="blog-best sec-2">
        <div class="container">
            <div class="blog-best__wrap danh-sach-doi-ngu-y-te ">
                <?php 
                        $in2 = get_field('doi_ngu_1');
                        if (is_array($in2)) {
                            foreach ($in2 as $i => $item) { ?>
                <div class="custom-display">
                    <?php
                                echo ' <h2 class="h2_home  --uppercase --mb-30 color_1">' . $item->name . '</h2>';
                                 ?>
                </div>

                <div class="danh-sach-doi-ngu ">
                    <div class="slider slider-doi-ngu">
                        <?php
                                        $args = array(
                                            'post_type' => 'service',
                                            'posts_per_page' => -1,
                                            'tax_query' => array(
                                                'relation' => 'AND',
                                                array(
                                                    'taxonomy' => 'doi_ngu_bs',
                                                    'field' => 'id',
                                                    'terms' => array($item->term_id),
                                                    'compare' => '='
                                                )
                                            )
                                        );
                                        $my_query = new WP_Query($args);
                                        while ($my_query->have_posts()) {
                                            $my_query->the_post();
                                    ?>
                        <div>
                            <div class="blog-best__item ">
                                <div class="c-blog__hor --hor-2">
                                    <div class="img tin-tuc-xh custom-img-slider">
                                        <a href="<?php echo get_permalink() ?>">
                                            <?php the_post_thumbnail('270x146')?>
                                        </a>
                                    </div>
                                    <div class="sigma_doctor-body">
                                        <h5>
                                            <a href="<?php echo get_permalink() ?>"
                                                title="<?php echo get_the_title() ?>"
                                                tabindex="-1"><?php echo get_the_title() ?></a>
                                        </h5>
                                        <div class="sigma_doctor-categories">
                                            <a href="<?php echo get_permalink() ?>" class="sigma_doctor-category"
                                                title="<?php echo get_field('chuc_vu_doi_ngu') ?>"
                                                tabindex="-1"><?php echo get_field('chuc_vu_doi_ngu') ?></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php }
                                    ?>


                    </div>
                </div>
                <?php 
                            }
                        }   
                        ?>

            </div>
        </div>
    </section>

    <?php get_template_part('pactch/tintuc', 'page') ?>
</main>
<script>
function gosort(url) {
    window.location.href = url;
}

$('.slider-doi-ngu').slick({
    rows: 2,
    focusOnSelect: true,
    arrows: true,
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,

    prevArrow: "<button type='button' class='custom-left'><i class='fa fa-arrow-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='custom-right'><i class='fa fa-arrow-right' aria-hidden='true'></i></button>",
    responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1000,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
</script>
<?php
endwhile;
get_footer();
?>