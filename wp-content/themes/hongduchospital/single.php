<?php
get_header();
while (have_posts()) :
	the_post();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<meta property="og:image" content="<?php echo get_the_post_thumbnail_url() ?>"/>
<meta property="og:title" content="<?php echo get_the_title() ?>"/>
<meta property="og:description" content="<?php echo get_the_excerpt() ?>"/>
<main class="main main-blog-dt">
    <div class="sec-breadcrumb" data-aos="zoom-out">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
                <?php
					$terms = get_the_terms($post->ID, 'category');
					if (is_array($terms)) {
						foreach ($terms as $item) {
					?>
                <li><a href="<?php echo get_term_link($item->term_id) ?>"><?php echo $item->name; ?></a></li>
                <?php
						}
					}
					?>
                <li class="--active"><a><?php the_title() ?></a></li>
            </ul>
        </div>
    </div>

    <div class="blog-area sec-2">
        <div class="container">
            <div class="cols">
                <div class="col">
                    <div class="blog-dt" data-aos="fade">
                        <div class="blog-dt__content">

                            <div class="mona-content">
                            <?php
									viewCount(get_the_ID());
									$post_views = get_post_meta(get_the_ID(), 'post_views_count', true);
									if (!empty($post_views)) {
									?>
                                <p class="date"><?php echo get_the_date('d/m/Y') ?> -
                                    <i class="fa fa-eye"></i> <?php echo $post_views; ?>
                                </p>
                                <?php
									}
									?>
                                <h1 class="main-title">
                                    <?php the_title() ?>
                                </h1>
                                

                                <?php 
                                if(get_the_content() !=''){
                                    the_content();
                                }else{
                                    echo 'Bài viết chưa được nhập nội dung vui lòng quay lại sau.';
                                }
                                 ?>
                                  <?php if(get_field('hinh_anh_thu_vien') !=''){ ?>
                                <div class="thu-vien-anh">
                                    <div class="title-thu-vien-anh">
                                        <h2 class="h2_home  color_4">Thư Viện Ảnh</h2>
                                    </div>
                                    <div class="">
                                    </div>
                                        <div class="library-section-library-inner">
                                            <div class="library-isotope">
                                                <div class="library-body">
                                                    <div class="columns-1 wow fadeInLeft">
                                                            <div class="col-1 ">
                                                                <div class="library-box">
                                                                    <?php $image_thu_vien = get_field('hinh_anh_thu_vien');
                                                                    $size ='full';
                                                                echo wp_get_attachment_image($image_thu_vien,$size) ?>
                                                                    <?php
                                                                    $ga = get_field('mona_gal_proj');
                                                                    $gaitm = [];
                                                                    if (is_array($ga)) {
                                                                        foreach ($ga as $itm) {
                                                                            $gaitm[] = ['src' => $itm['url'], 'thumb' => $itm['url']];
                                                                        }
                                                                    }
                                                                    ?>
                                                                    <div class="mona-gallery-dys"
                                                                        data-thumb='<?php echo json_encode($gaitm); ?>'></div>
                                                                </div>
                                                            </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <?php }
                                ?>
                               
                              
                            </div>
                             <div class="news-detail-action">
                                    <p class="blog-detail-share-title"><?php echo __('Các thẻ tags: ','monamedia') ?></p>
                                    <ul class="tags-nav">
                                        <?php
											$tags = get_the_tags();
											if($tags!=''){
												foreach ($tags as $tag) {
													echo '<li><a href="' . get_category_link($tag->term_id) . '">' . $tag->name . '</a></li>';
												}
											}else{
												echo 'Chưa có thẻ tag cho bài viết này';
											}
												
												?>
                                    </ul>
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



    <?php $post_lien_quan = wp_get_object_terms($post->ID, 'category', array('fields' => 'ids'));
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 8,
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'id',
                    'terms' => $post_lien_quan,
                )
            ),
            'post__not_in' => array($post->ID),
        );
        $post_bai_viet = new WP_Query($args);
        if ($post_bai_viet->have_posts() != '') {
        ?>

    <section class="blog-best sec-2">
        <div class="container">
            <div class="blog-best__wrap">
                <h2 class="main-title --uppercase --mb-30" data-aos="fade-down">
                    <?php echo __('CÁC TIN KHÁC', 'monamedia') ?>
                </h2>
                <div class="is-slider --loop --auto" data-aos="fade-up">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 8,
							'order' => 'DESC',
							'post__not_in' => array(get_the_ID()),
						);
						while ($post_bai_viet->have_posts()) {
							$post_bai_viet->the_post();
						?>
                            <div class="swiper-slide">
                                <div class="blog-best__item">
                                    <div class="c-blog__hor --hor-2">
                                        <div class="img tin-tuc-xh custom-img-slider">
                                            <a href="<?php the_permalink() ?>">
                                                <?php the_post_thumbnail('270x146') ?>
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
                            <?php
						}
						wp_reset_query();
						?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php } ?>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
$('.slider-netao').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    infinite: true,
    focusOnSelect: true,
    arrows: true,
    prevArrow: "<button type='button' class='custom-left'><i class='fa fa-arrow-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='custom-right'><i class='fa fa-arrow-right' aria-hidden='true'></i></button>",
    autoplaySpeed: 3000,


});
$( ".slider-netao .gallery-custom-taone" ).each(function(index) {
    $(this).on("click", function(){
        // console.log($(this).find("img").attr("src"));
        // $('#texxt_p').attr("href"));
    // truy van text 
            // console.log($(this).find(".ifrcusstom-the-pame").text());
        $('#show_anh').attr("src",$(this).find("img").attr("src"));

    });
});
</script>
<?php
endwhile;
get_footer();
?>