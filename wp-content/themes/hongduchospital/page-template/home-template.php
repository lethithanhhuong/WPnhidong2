<?php

/**
 * Template name: Home Page
 * @author : đức pro
 */
get_header();
while (have_posts()) :
    the_post();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<div class="main-home">
    <section class="grid__fluid frontp2 ">
        <div class="box">
            <div class="">
                <div class="frontp2__row1">
                    <div id="metaslider-id-4858" style="max-width: 1920px;"
                        class="ml-slider-3-24-0 metaslider metaslider-flex metaslider-4858 ml-slider slide-home">
                        <div id="metaslider_container_4858">
                            <div id="metaslider_4858" class="flexslider">
                                <ul aria-live="polite" class="slides">
                                    <?php $slider_home = get_field('slider_home_page');
                                    if ($slider_home) {
                                        foreach ($slider_home as $item_silider) {
                                            
                                    ?>
                                    <li style=" width: 100%;" class="slide-27415 ms-image">
                                        <a href="<?php if($item_silider['link_move_slider'] !=''){echo $item_silider['link_move_slider'];}else{
                                        echo '';
                                    }   ?>" target="_self">
                                            <img class="custom-img-css-slider" height="500" width="1920" alt=""
                                                class="slider-4858 slide-16701"
                                                src="<?php echo $item_silider['hinh_anh_slider'] ?>"
                                                style="opacity: 1;">

                                        </a>
                                    </li>
                                    <?php
                                        }
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="content-chuyen-khoa-va-dich-vu gradient_model1">
        <section class="grid__xl frontp3">
            <div class="box">
                <div class="">
                    <div class="frontp3__row2 d__fl">
                        <div class="frontp3__row2__col2 d__fl">
                            <?php $list_quy_trinmh = get_field('list_quy_trinmh');
                        if ($list_quy_trinmh) {
                            foreach ($list_quy_trinmh as $item_quy_trinh) {
                        ?>
                            <div class="content-the">
                                <p class="content-the__content">
                                    <a href="<?php echo $item_quy_trinh['link_go_quy_trinh'] ?>" class="item">
                                        <span class="content-the__content--icon"><img
                                                src="<?php echo $item_quy_trinh['hinh_anh'] ?>" alt=""></span>
                                    </a>
                                </p>
                            </div>
                            <?php
                                }
                            } ?>

                        </div>
                        <div class="frontp3__row2__col1">
                            <div class="frontp5__row1 custom-display">
                                <h2 class="h2_home --mb-30 color_3"><span>CHUYÊN KHOA</span></h2>
                                <?php //if (get_field('xem_them_chuyen_khoa') != '') {
                        ?>
                                <!-- <a class="button button-albus button-effect-ujarak"
                                    href="<?php echo get_field('xem_them_chuyen_khoa') ?>">Xem Thêm Chuyên Khoa </a> -->

                                <?php
                        //} 
                        ?>
                            </div>
                            <div class="cac-chuyen-khoa-danh-sach">
                                <div class="flex-chuyen-khoa">
                                    <div class="content-cac-chuyen-gia">

                                        <div class="cac-chuyen-khoa-noi">
                                            <div class="item-title">
                                                <?php echo get_field('ten_chuyen_gia_title') ?>
                                            </div>
                                            <ul class="cac-chuyen-khoa content-overflow-x">

                                                <?php $item_dich_vu_chue_khoa = get_field('noi_dung_chuyen_khoa');
                                                    if($item_dich_vu_chue_khoa){
                                                        $count=0;
                                                        foreach($item_dich_vu_chue_khoa as $item_chuyen_khoa){
?>                                                 
                                                <li class="icon">
                                                    <?php  echo $item_chuyen_khoa['ten_cac_chuyen_khoa'] ?>
                                                    <div class="info info<?php  echo $count  ?>">
                                                    <i class="fa fa-window-close" aria-hidden="true"></i>
                                                        <?php echo $item_chuyen_khoa['content_chuyen_khoa']?></div>
                                                </li>
                                                
                                                <?php 
                                                    $count++;
                                                }
                                            }?>
                                            </ul>
                                        </div>

                                        <div class="cac-chuyen-khoa-noi">
                                            <div class="item-title">
                                                <?php echo get_field('chuyen_khoa_ngoai') ?>
                                            </div>
                                            <ul class="cac-chuyen-khoa content-overflow-x">
                                                <?php $item_dich_vu_chue_khoa = get_field('noi_dung_chuyen_khoa_ngoai');
                                                    if($item_dich_vu_chue_khoa){
                                                        $count=0;
                                                        foreach($item_dich_vu_chue_khoa as $item_chuyen_khoa){
                                                        ?>
                                               
                                                <li class="icon-cl">
                                                    <?php  echo $item_chuyen_khoa['ten_cac_chuyen_khoa'] ?>
                                                    <div class="info info-cl<?php  echo $count  ?>">
                                                    <i class="fa fa-window-close" aria-hidden="true"></i>
                                                        <?php echo $item_chuyen_khoa['content_chuyen_khoa_ngoai']?>
                                                    </div>
                                                </li>
                                            

                                                <?php 
                                                    $count++;
                                                }
                                            }?>
                                            </ul>
                                        </div>

                                        <div class="cac-chuyen-khoa-noi">
                                            <div class="item-title">
                                                <?php echo get_field('can_lam_sang') ?>
                                            </div>
                                            <ul class="cac-chuyen-khoa content-overflow-x">

                                                <?php $item_dich_vu_chue_khoa = get_field('noi_dung_chuyen_khoa_cls');
                                                    if($item_dich_vu_chue_khoa){
                                                        $count=0;
                                                        foreach($item_dich_vu_chue_khoa as $item_chuyen_khoa){

                                                    
                                                        ?>
                                                <li class="icon-cucu">
                                                    <?php  echo $item_chuyen_khoa['ten_cac_chuyen_khoa'] ?>
                                                    <div class="info thong-tin-right info-cucu<?php  echo $count  ?>">
                                                    <i class="fa fa-window-close" aria-hidden="true"></i>
                                                        <?php echo $item_chuyen_khoa['content_chuyen_khoa_cls']   ?>
                                                    </div>
                                                </li>
                                                <?php 
                                                    $count++;
                                                }
                                            }?>
                                            </ul>
                                        </div>

                                        <!-- end tab \ -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="grid__xl frontp5">
            <div class="box">
                <div class="frontp3__row2__col1">
                    <div class="frontp5__row1 custom-display">
                        <h2 class="h2_home --mb-30 color_3"><span>CHUYÊN KHOA</span></h2>
                        <?php if (get_field('xem_them_chuyen_khoa') != '') {
                        ?>
                        <a class="button button-albus button-effect-ujarak"
                            href="<?php echo get_field('xem_them_chuyen_khoa') ?>">Xem Thêm Chuyên Khoa </a>

                        <?php
                        } ?>
                    </div>
                    <div class="cac-chuyen-khoa-danh-sach">
                        <div class="flex-chuyen-khoa">
                            <div class="content-cac-chuyen-gia">
                                <?php $list_chuyen_gia_khoa =get_field('list_chuyen_gia');
                                    if($list_chuyen_gia_khoa){
                                        foreach($list_chuyen_gia_khoa as $item_chuyen_gia_khoa){
                                            ?>
                                <div class="cac-chuyen-khoa-noi">
                                    <div class="item-title">
                                        <?php echo $item_chuyen_gia_khoa['ten_chuyen_gia_title'] ?>
                                    </div>
                                    <ul class="cac-chuyen-khoa content-overflow-x">

                                        <?php $item_dich_vu_chue_khoa = $item_chuyen_gia_khoa['noi_dung_chuyen_khoa'];
                                                    if($item_dich_vu_chue_khoa){
                                                        foreach($item_dich_vu_chue_khoa as $item_chuyen_khoa){

                                                    
                                                    if($item_chuyen_khoa['link_cac_chuyen_khoa'] !=''){
                                                        ?>
                                        <li><a href="<?php echo $item_chuyen_khoa['link_cac_chuyen_khoa'] ?>">
                                                <?php echo $item_chuyen_khoa['ten_cac_chuyen_khoa'] ?></a></li>
                                        <?php 
                                                    }else{
                                                        ?>
                                        <li><?php echo $item_chuyen_khoa['ten_cac_chuyen_khoa'] ?></li>
                                        <?php 
                                                    } 
                                                    
                                                }
                                            }?>
                                    </ul>
                                </div>

                                <?php 
                                        }
                                    } ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </div>
    <section class="blog-best sec-2 margin-top-css gradient_model2 dich-vu-noi-bat">
        <div class="container">
            <div class="blog-best__wrap ">
                <div class="custom-display">
                    <h2 class="h2_home  --uppercase --mb-30 color_1">
                        <?php echo __('DỊCH VỤ NỔI BẬT', 'monamedia') ?>
                    </h2>
                </div>
                <div class="is-slider --loop --auto">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $list_service = get_field('list_dich_vu');
                    if ($list_service) {
                        foreach ($list_service as $item_service) {
                            
                    ?>
                            <div class="swiper-slide">
                                <div class="blog-best__item">
                                    <div class="c-blog__hor --hor-2">
                                        <div class="img tin-tuc-xh custom-img-slider">
                                            <a href="<?php echo get_permalink($item_service->ID) ?>">
                                                <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($item_service->ID), '270x146') ?>"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="date"><?php the_date('d/m/Y',$item_service->ID) ?></p>
                                            <a href="<?php echo get_permalink($item_service->ID) ?>" class="title">
                                                <?php echo $item_service->post_title ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="grid__xl blog-best doi-ngu-chuyen-gia margin-top-css gradient_model3">
        <div class="custom-div-class">
            <div
                class="vc_row wpb_row vc_row-fluid img-bf-hinh-anh  sigma-background-position-left-top sigma-title-color-default   sigma-row-secondary-overlay sigma-overlay-opacity-7  " style="background-image: url(<?php echo get_field('img_bg_doi_ngu_chuyen_gia')?>) !important;">
                <div class="wpb_column sigma-background-position-left-top">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div
                                class="sigma_custom_heading_wrapper  sigma-custom-heading  text-center  meet-my-our-team">
                                <div class="section-title  ">
                                    <h2 class="title ">
                                        ĐỘI NGŨ CHUYÊN GIA </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sigma_doctor_wrapper">
                <div class="slider slider-nav-nhan-su">
                    <?php $list_doi_ngu = get_field('doi_ngu_chuyen_nghiep');
                                if ($list_doi_ngu) {
                                    foreach ($list_doi_ngu as $item_doi_ngu) {
                                ?>
                    <div class="" style="width: 381px;" tabindex="-1" data-slick-index="-5" id="" aria-hidden="true">
                        <article id=""
                            class="sigma_doctor style-15 sigma-doctor-wrapper post-299 doctor type-doctor status-publish has-post-thumbnail hentry">
                            <div class="sigma_doctor-thumb sigma-filter-img-wrapper">
                                <a href="<?php echo get_permalink($item_doi_ngu->ID) ?>"> <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($item_doi_ngu->ID), '420x420') ?>"
                                    alt="<?php echo $item_doi_ngu->post_title ?>"></a>
                               
                            </div>
                            <div class="sigma_doctor-body">
                                <h5>
                                    <a href="<?php echo get_permalink($item_doi_ngu->ID) ?>"
                                        title="<?php echo $item_doi_ngu->post_title ?>"
                                        tabindex="-1"><?php echo $item_doi_ngu->post_title ?></a>
                                </h5>
                                <div class="sigma_doctor-categories">
                                    <a href="<?php echo get_permalink($item_doi_ngu->ID) ?>"
                                        class="sigma_doctor-category"
                                        title="<?php echo get_field('chuc_vu_doi_ngu', $item_doi_ngu) ?>"
                                        tabindex="-1"><?php echo get_field('chuc_vu_doi_ngu', $item_doi_ngu) ?></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                                    }
                                } ?>



                </div>
            </div>

        </div>
    </section>
    <section class="blog-exp sec-2 margin-top-css gradient_model4">
        <div class="container">
            <div class="blog-best__wrap set-width-cho-layout tin-tuc-ne-ba">
                <div class="custom-display">
                    <h2 class="h2_home  --uppercase --mb-30 color_2">
                        <?php echo __('TIN TỨC', 'monamedia') ?>
                    </h2>

                    <a class="button button-albus button-effect-ujarak"
                        href="<?php echo get_the_permalink(get_option('page_for_posts')) ?>">

                        Xem Thêm Tin Tức <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a> 

                </div>
                <div class="flex-layout-start">

                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'order' => 'DESC',
                                );
                                $my_query = new WP_Query($args);
                                while ($my_query->have_posts()  ) {
                                    $my_query->the_post();
                                ?>
                    <div class="blog blog-new-layout">
                        <div class="c-blog__hor --hor-2">
                            <div class="img tin-tuc-xh custom-img-slider">
                                <a href="<?php the_permalink() ?>">
                                    <?php the_post_thumbnail() ?>
                                </a>
                            </div>
                            <div class="content">
                            <p class="date"><?php echo get_the_date('d/m/Y') ?></p>
                                <!-- <div class="sigma_post-meta is-absolute">
                                    <span class="posted-on">
                                        <?php echo get_the_date('j F, Y') ?>
                                    </span>
                                </div> -->
                                <!-- <div class="sigma_post-meta">
                                                <span class="author">
                                                    <i class="fa fa-user-circle-o"></i>
                                                    <?php
                                                                    $auth_id = $post->post_author; 
                                                                    echo get_the_author_meta( 'display_name', $auth_id ); 
                                                                    ?>
                                                </span>
                                                <span class="categories-list">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    <?php 
                                                                                $categories = get_the_category();
                                                                                if ( ! empty( $categories ) ) {
                                                                                    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                                                                }
                                                                                ?>
                                                </span>
                                            </div> -->


                                <a class="custom-title-content" href="<?php the_permalink() ?>"
                                    class="<?php the_title() ?>">
                                    <?php the_title() ?>
                                </a>
                                <div class="custom-content_trips">
                                    <?php echo wp_trim_words(get_the_content(),25) ?>
                                </div>
                                <a href="<?php the_permalink() ?>" class="btn-link" title="Xem chi tiết bài viết"> Xem
                                    thêm
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                                }
                                wp_reset_query();
                               ?>
                </div>

            </div>
        </div>
    </section>
    <section class="grid__xl frontp8 concu margin-top-css gradient_model5">
        <div class="box">
            <div class="">
                <div class="thu-vien-anh">
                    
                    <div class="title-thu-vien-anh custom-display">
                        <h2 class="h2_home --uppercase --mb-30 color_1"><?php if(get_field('tieu_de_tab_video') !=''){ echo get_field('tieu_de_tab_video') ; }else{
                        echo 'VIDEO';
                    }  ?>
                    </h2>
                    </div>
                    <div class="">
                        <?php $item_video =get_field('youtube_platy_link');
                    if($item_video){
                      
                            ?>
                        <div class="gallery-custom">
                            <div class="ifame-video-custom" id="slider-click">
                                <?php  
                                $type = $item_video[0]['true_false'];
                                if($type == 'free'){
                                        ?>
                                <!-- <button class="active">play</button> -->
                                <video width="100%" height="527" controls="controls" preload="metadata"
                                    onclick="this.play()">
                                    <source src="<?php echo $item_video[0]['ifame_video_thu_vien_link_wweb'] ?>"
                                        type="video/mp4">
                                </video>
                                <?php 
                                }else if($type =='tinh-phi'){
                                    ?>
                                <iframe width="100%" height="527"
                                    src="<?php echo $item_video[0]['ifame_video_thu_vien'] ?>"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <?php 
                                } ?>

                            </div>
                            <p class="cusstom-the-p" id="texxt_p"><?php echo $item_video[0]['span_title'] ?></p>
                        </div>

                        <?php 
                    } ?>
                    </div>
                    <div class="slider slider-netao">
                        <?php $item_video =get_field('youtube_platy_link');
                        if($item_video){
                            foreach($item_video as $item_video_ifame){
                                ?>
                        <div class="gallery-custom">
                            <div class="ifame-video-bot">
                                <?php  
                                $type = $item_video_ifame['true_false'];
                                if($type == 'free'){
                                        ?>
                                <video width="260" height="145" controls="controls" preload="metadata"
                                    onclick="this.play()">
                                    <source src="<?php echo $item_video_ifame['ifame_video_thu_vien_link_wweb'] ?>"
                                        type="video/mp4">
                                </video>
                                <?php 
                                }else if($type =='tinh-phi'){
                                    ?>
                                <iframe width="260" height="145"
                                    src="<?php echo $item_video_ifame['ifame_video_thu_vien'] ?>"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <?php 
                                } ?>
                            </div>
                            <p class="cusstom-the-p"><?php echo $item_video_ifame['span_title'] ?></p>
                        </div>
                        <?php 
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-best sec-2 cam-nhan-than-nhan margin-top-css gradient_model6">
        <div class="container">
            <div class="blog-best__wrap ">
                <div class="custom-display">
                    <h2 class="h2_home  --uppercase --mb-30 color_4">
                        <?php echo __('CẢM NHẬN CỦA THÂN NHÂN - BỆNH NHI', 'monamedia') ?>
                    </h2>
                </div>

                <div class="is-slider --loop --auto">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $lisst_than_nhan = get_field('list_than_nhan_benh_nhan');
                    if ($lisst_than_nhan) {
                        foreach ($lisst_than_nhan as $item_than_nhan) {
                    ?>
                            <div class="swiper-slide">
                                <div class="blog-best__item">
                                    <div class="c-blog__hor --hor-2">
                                        <div class="img tin-tuc-xh custom-img-slider">
                                            <a href="<?php echo get_permalink($item_than_nhan->ID) ?>">
                                                <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($item_than_nhan->ID), '270x146') ?>"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="date"><?php echo get_the_date('d/m/Y',$item_than_nhan->ID) ?></p>
                                            <a href="<?php echo get_permalink($item_than_nhan->ID) ?>" class="title">
                                                <?php echo $item_than_nhan->post_title ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="grid__xl frontp9 margin-top-css gradient_model7">
        <div class="box">
            <div class="">
                <div class="frontp9__row2">
                    <div class="owl-carousel owl-theme">
                        <?php $cac_noi_dung_khac = get_field('cac_noi_dung_khac');
                        if ($cac_noi_dung_khac) {
                            foreach ($cac_noi_dung_khac as $item_noi_dung) {
                        ?>
                        <div class="item">
                            <span><img src="<?php echo $item_noi_dung['hinh_anh_noi_dung'] ?>"
                                    alt=""></span><b><?php echo $item_noi_dung['con_so_noi_dung'] ?></b>
                            <hr><small><?php echo $item_noi_dung['title_noi_dung'] ?></small>
                        </div>
                        <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="content-the-tag-bai-viet margin-top-css  gradient_model8" style="padding-bottom: 30px;">
        <div class="container">
            <div class="blog-best__wrap ">
                <div class="contentbox">
                    <h2 class="h4"> <?php echo get_field('tieu_de_sach_tu_khoa') ?></h2>
                    <ul class="col-2-list content">
                        <?php $list_danh_sach_tu_khoa =get_field('list_danh_sach_tu_khoa');
                        if($list_danh_sach_tu_khoa){
                        foreach($list_danh_sach_tu_khoa as $item_tue_khoa){
                            ?>
                                <li class="li-the-tag"><a href="<?php echo $item_tue_khoa['link_toi_bai_viet_cua_tu_khoa'] ?>"><?php echo $item_tue_khoa['cac_tu_khoa'] ?></a></li>
                            <?php  
                         }
                        } 
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
</div>
<script>
$('.slider-danh-gia').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    focusOnSelect: true,
    arrows: true,
    prevArrow: "<button type='button' class='custom-left'><i class='fa fa-arrow-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='custom-right'><i class='fa fa-arrow-right' aria-hidden='true'></i></button>",
});

$(document).on('click', '.xem-them-hello', function(e) {
    var div = $(this).closest('.kb-frame').find('.content-hello');
    $(this).css('display', 'none');
    if (div.is('.overflow-unset')) {
        div.removeClass('overflow-unset');
    } else {
        div.addClass('overflow-unset');
    }
});
</script>

<script>
// $('.slider-taone').slick({
//     slidesToShow: 1,
//     infinite: true,
//     autoplay: false,
//     dots: false,
//     prevArrow: false,
//     nextArrow: false,
//     autoplaySpeed: 3000,
//     slidesToScroll: 1,
//     // asNavFor: '.slider-netao'
// });
$('.slider-netao').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    // infinite: true,
    focusOnSelect: true,
    arrows: true,
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
            breakpoint: 1468,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }

        },

        {
            breakpoint: 300,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }

        },
    ],
    prevArrow: "<button type='button' class='custom-left'><i class='fa fa-arrow-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='custom-right'><i class='fa fa-arrow-right' aria-hidden='true'></i></button>",
    // asNavFor: '.slider-taone',



});

// $('a[data-slide]').click(function(e) {
//     e.preventDefault();
//     var slideno = $(this).data('slide');
//     $('.slider-netao').slick('slickGoTo', slideno - 1);
// });
$('.slider-nav-nhan-su').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    // dots: true,
    focusOnSelect: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
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

$('a[data-slide]').click(function(e) {
    e.preventDefault();
    var slideno = $(this).data('slide');
    $('.slider-nav-nhan-su').slick('slickGoTo', slideno - 1);
});

$(".slider-netao .gallery-custom").each(function(index) {
    $(this).on("click", function() {
        if ($(this).find("iframe").attr("src")) {
            // viet cau lenh hien thi iframe
            // console.log($(this).find("iframe").attr("src"));
            $("#slider-click").html(`<iframe width="100%" height="527"
                                    src=${$(this).find("iframe").attr("src")}
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>`);
        } else {
            $("#slider-click").html(`<video width="100%" height="527"  controls="controls" preload="metadata" onclick="this.play()">
                                    <source src=${$(this).find("source").attr("src")}
                                        type="video/mp4">
                                </video>`);
        }

        // truy van text 
        // console.log($(this).find(".ifrcusstom-the-pame").text());
        $('#texxt_p').text($(this).find(".cusstom-the-p").text())

    });
});

</script>
<style>
section.blog-best.sec-2.cam-nhan-than-nhan.margin-top-css.gradient_model6 .blog-best__wrap {
    background:<?php echo get_field('cam_nhan_than_nhan') ?>;
}
section.grid__xl.frontp8.concu.margin-top-css.gradient_model5 .thu-vien-anh {
    background:<?php echo get_field('thu_vien_doi_mau') ?>;
}
section.blog-exp.sec-2.margin-top-css.gradient_model4 .blog-best__wrap{
    background-color:<?php echo get_field('tin_tuc_doi_mau') ?>;
}
section.blog-best.sec-2.margin-top-css.gradient_model2 .blog-best__wrap {
    background-color:<?php echo get_field('dich_vu_noi_bat_mau') ?>;
}
.content-chuyen-khoa-va-dich-vu.gradient_model1 .frontp3__row2{
    background-color:<?php echo get_field('chuyen_khoa_doi_mau') ?>;
}
.img-bf-hinh-anh{
    background: <?php echo get_field('doi_ngu_bac_si') ?>;
}
/* ten cac box  */
.content-chuyen-khoa-va-dich-vu .h2_home{
    color: <?php echo get_field('ten_chuyen_khoa_mau') ?>;
}
.dich-vu-noi-bat .color_1{
    color: <?php echo get_field('ten_dich_vu') ?>;
}
.gradient_model5 .title-thu-vien-anh .color_1{
    color: <?php echo get_field('titile_box_video') ?>;
}
.cam-nhan-than-nhan .color_4 {
    color: <?php echo get_field('cam_nahn_than_nhan') ?>;
}
.tin-tuc-ne-ba .color_2 {
    color: <?php echo get_field('title_tin_tuc') ?>;
}
.sigma-custom-heading .section-title .title {
    color: <?php echo get_field('title_doi_ngu') ?>;
}
/* style gradient  */

.content-chuyen-khoa-va-dich-vu .custom-display {
    border-image: linear-gradient( to right, <?php echo get_field('gradient_chuyen_khoa_mau') ?>, rgba(235, 234, 234, 0.971) ) 0 1 100%;
}
.dich-vu-noi-bat .blog-best__wrap .custom-display {
    border-image: linear-gradient( to right, <?php echo get_field('gradient_dich_vu') ?>, rgba(235, 234, 234, 0.971) ) 0 1 100%;
}
.tin-tuc-ne-ba .custom-display {
    border-image: linear-gradient( to right, <?php echo get_field('gradient_tin_tuc') ?>, rgba(235, 234, 234, 0.971) ) 0 1 100%;
}
.thu-vien-anh .custom-display {
    border-image: linear-gradient( to right, <?php echo get_field('gradient_box_video') ?>, rgba(235, 234, 234, 0.971) ) 0 1 100%;
}
.cam-nhan-than-nhan .blog-best__wrap .custom-display {
    border-image: linear-gradient(to right, <?php echo get_field('gradient_cam_nahn_than_nhan') ?>, rgba(235, 234, 234, 0.971) ) 0 1 100%;
}
</style>
<?php
endwhile;
get_footer();


?>