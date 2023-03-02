<?php

/**
 * Template name: about Page
 * @author :duc
 */
get_header();
while (have_posts()) :
    the_post();
?>
<main class="main main-about">
    <div class="sec-breadcrumb" data-aos="zoom-out">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
                <li class="--active"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
            </ul>
        </div>
    </div>
    <div class="about sec-3">
        <div class="container">
            <div class="about__wrap">
                <div class="content">
                    <?php the_content() ?>
                    <!-- <div class="slider-about-banner">
                        <div class="container">
                            <div class="swiper-container">
                                <!-- <div class="swiper-wrapper"> -->
                                    <?php 
                                  

                            //     $slider_about =get_field('slider_about');
                            // $size ='full';
                            //     if($slider_about ){
                            //         foreach($slider_about as $list_1){
                            //             if ($list_1!='') {
                            //                 $image_url = wp_get_attachment_image_url($list_1,$size);
                            //             }
                                        ?>
                                    <!-- <div class="swiper-slide" style="background-image: url(<?php //echo $image_url ?>);"> -->
                                        <!-- <h2>SIMPLE SWIPER</h2> -->
                                    <!-- </div> -->
                                    <?php 
                                    // }
                                    // }
                                 
                                ?>
                                    
                                <!-- </div> -->

                                <!-- <div class="swiper-pagination"></div> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</main>

<?php
endwhile;
get_footer();
?>