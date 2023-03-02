<?php

/**
 * Template name: page video Page
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
                   
                        <div class="slider slider-for">
                            <div><?php 
                            $slider_about =get_field('slider_about');
                            $size ='full';
                                if($slider_about ){
                                    foreach($slider_about as $list_video){
                                      ?>
                                    
                                    <?php }
                                    }?></div>
                           
                        </div>
                        <div class="slider slider-nav">
                        <div><?php 
                            $slider_about =get_field('slider_about');
                            $size ='full';
                                if($slider_about ){
                                    foreach($slider_about as $list_video){
                                      ?>
                                    
                                    <?php }
                                    }?></div>
                        </div>
                    <?php the_content() ?>
                     
                </div>
            </div>
        </div>
    </div>
</main>

<script>
     $('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
   slidesToShow: 3,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: true,
   focusOnSelect: true
 });

 $('a[data-slide]').click(function(e) {
   e.preventDefault();
   var slideno = $(this).data('slide');
   $('.slider-nav').slick('slickGoTo', slideno - 1);
 });
</script>
<?php
endwhile;
get_footer();
?>