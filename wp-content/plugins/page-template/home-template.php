<?php

/**
 * Template name: Home Page
 * @author : đức pro
 */
get_header();
while (have_posts()) :
    the_post();
?>

<section class="grid__fluid frontp2">
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
                                    <a href="<?php echo $item_silider['link_move_slider']  ?>" target="_self">
                                        <img class="custom-img-css-slider" height="350" width="1920" alt=""
                                            class="slider-4858 slide-16701"
                                            src="<?php echo $item_silider['hinh_anh_slider'] ?>" style="opacity: 1;">
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

<section class="section section-lg section-full-width bg-gray-porce-ligher" id="about-us">
    <div class="container">
        <div class="row row-30">
            <div class="col-xl-5">
                <div class="about-out">

                    <?php $list_quy_trinmh = get_field('list_quy_trinmh');
                        if ($list_quy_trinmh) {
                            
                            $count=1;
                            foreach ($list_quy_trinmh as $item_quy_trinh) {
                        ?>
                    <div class="about-out-item decor-1">
                        <div class="about-out-item-inner decor-custom-<?php echo $count ?>  " data-aos="fade-up">
                            <div><span class="icon icon-xl icon-primary linearicons-book2"></span>
                                <span><img src="<?php echo $item_quy_trinh['hinh_anh'] ?>" alt=""></span>
                                <p style="    padding: 12px 0 0; color: #fff;font-size: 18px; ">
                                    <?php echo $item_quy_trinh['tieu_de_quy_trinh'] ?></p>
                            </div><span class="about-out-item-inner-decor decor-1"></span>
                        </div>
                    </div>
                    <?php
                  $count++;
                            }
                          
                        } ?>

                </div>
            </div>
            <div class="col-xl-5 d-xl-flex">
                <div class="about-unit">
                    <h2 class="about-unit-title" data-aos="fade-up"><?php echo get_field('the_title_content_about') ?>
                    </h2>
                    <p class="wow " data-aos="fade-left"><?php echo get_field('noi_dung_about_content') ?></p>
                    <div class="about-unit-quote">
                        <div class="about-unit-quote-left" data-aos="fade-left"><img
                                src="<?php echo get_field('hinh_annh_giam_doc') ?>" alt="" width="203" height="260">
                        </div>
                        <div class="about-unit-quote-body">
                            <h4 class="about-unit-quote-title" data-aos="fade-left">
                                <?php echo get_field('ten_nguoi_lam') ?></h4>
                            <p class="about-unit-quote-cite" data-aos="fade-left"><?php echo get_field('chuc_vu') ?></p>
                            <div class="about-unit-quote-content">
                                <div class="about-unit-quote-content-body">
                                    <p data-aos="fade-left"><?php echo get_field('noi_dung_va_cau_noi') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="blog-best sec-2">
    <div class="container">
        <div class="blog-best__wrap ">
            <div class="custom-display">
                <h2 class="h2_home  --uppercase --mb-30" data-aos="fade-down">
                    <?php echo __('DỊCH VỤ NỔI BẬT', 'monamedia') ?>
                </h2>
                <?php if (get_field('xem_them_dich_vu') != '') {
                        ?>
                <a class="button button-albus button-effect-ujarak" style="margin-bottom: 10px;"
                    href="<?php echo get_field('xem_them_dich_vu') ?>"> Xem Thêm Dịch Vụ </a>

                <?php
                        } ?>
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
                                        <p class="date"><?php echo get_the_date('d/m/Y',$item_service->ID) ?></p>
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

<section class="grid__xl frontp7">
    <div class="box">
        <div class="">
            <div class="frontp7__row1">
                <h2 class="h2_home border-custom" data-aos="fade-down"><span>TIN TỨC - SỰ KIỆN</span></h2>
            </div>
            <div class="frontp7__row2 d__fl">
                <?php $tin_tuc_va_su_kien = get_field('tin_tuc_va_su_kien');
                    if ($tin_tuc_va_su_kien) {
                        $time_data =0;
                        foreach ($tin_tuc_va_su_kien as $item_tin_tuc) {
                            $time_data+=100;
                    ?>
                <div class="item" data-aos="fade-up" c>
                    <h3><a
                            href="<?php echo get_term_link($item_tin_tuc->term_id) ?>"><?php echo $item_tin_tuc->name ?></a>
                    </h3>
                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 4,
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'category',
                                            'field' => 'id',
                                            'terms' => array($item_tin_tuc->term_id),
                                            'compare' => '='
                                        )
                                    )
                                );
                                $my_query = new WP_Query($args);
                                $count = 0;
                                while ($my_query->have_posts() && $count < 1) {
                                    $my_query->the_post();
                                ?>
                    <ul class="d__fl">
                        <li class="d__fl">
                            <div class="figu">
                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                    <?php the_post_thumbnail() ?>
                                </a>
                            </div>
                            <div class="para">
                                <h4 class="para__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>

                            </div>
                        </li>
                    </ul>
                    <?php
                                    $count++;
                                }
                                 ?>
                    <ul class="d__fl">
                        <?php 
                                    while ($my_query->have_posts()) {
                                        $my_query->the_post(); ?>
                        <li class="d__fl" data-aos="fade-up">
                            <div class="figu">
                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                    <?php the_post_thumbnail() ?>
                                </a>
                            </div>
                            <div class="para">
                                <h4 class="para__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                            </div>
                        </li>
                        <?php
                                    }
                                    wp_reset_query(); ?>
                    </ul>
                    <div class="item__read_more" data-aos="fade-up"><a
                            href="<?php echo get_term_link($item_tin_tuc->term_id) ?>">Xem thêm</a></div>
                </div>
                <?php
                    $time_data++;
                        }
                    } ?>
            </div>
        </div>
    </div>
</section>

<section class="grid__xl frontp5">
    <div class="box">
        <div class="">
            <div class="frontp5__row1 custom-display">
                <h2 class="h2_home --mb-30" data-aos="fade-down"><span>CHUYÊN KHOA</span></h2>
                <?php if (get_field('xem_them_chuyen_khoa') != '') {
                        ?>
                <a class="button button-albus button-effect-ujarak"
                    href="<?php echo get_field('xem_them_chuyen_khoa') ?>">Xem Thêm Chuyên Khoa </a>

                <?php
                        } ?>
            </div>
            <div class="frontp5__row2 d__fl">
                <div class="frontp5_tab__click">
                    <ul class="">
                        <?php $list_chuyen_khoa = get_field('chuyen_khoa_list');
                            if ($list_chuyen_khoa) {
                                $active = 'active';
                                $number_chuyen_khoa = 0;
                                foreach ($list_chuyen_khoa as $item_list_chuyen_khoa) {

                                    $number_chuyen_khoa++;
                            ?>
                        <style>
                        .frontp5_tab__click ul .active .none {
                            display: none;
                        }

                        .frontp5_tab__click ul .active .block {
                            display: block;
                        }

                        .frontp5_tab__click ul li .block {
                            display: none;
                        }

                        @media screen and (max-width: 990px) {
                            .frontp5_tab__click ul .active .none {
                                display: block;
                            }

                            .frontp5_tab__click ul .active .block {
                                display: none;
                            }

                            .frontp5_tab__click ul li .block {
                                display: block;
                            }

                            .frontp5_tab__click ul li .none {
                                display: none;
                            }
                        }
                        </style>
                        <li data-aos="fade-up" data-tab="frontp5tab_<?php echo $number_chuyen_khoa ?>"
                            class="tab__click <?php echo $active ?>"><a><i> <img class="none custom-icon-css"
                                        style="width: auto;height: auto;     margin: 7px;"
                                        src="<?php echo $item_list_chuyen_khoa['hinhanh_icon'] ?>" alt=""> <img
                                        class="block custom-icon-css" style="width: auto;height: auto;   margin: 7px;"
                                        src="<?php echo $item_list_chuyen_khoa['hinhanh_icon_active'] ?>"
                                        alt=""></i><span><?php echo $item_list_chuyen_khoa['tieu_de_chuyebn_khoa'] ?></span></a>
                        </li>
                        <?php
                                    $active = '';
                                }
                            } ?>


                    </ul>
                </div>
                <div class="frontp5_tab__wrap">
                    <?php $list_chuyen_khoa = get_field('chuyen_khoa_list');
                        if ($list_chuyen_khoa) {
                            $active = 'active';
                            $number_chuyen_khoa = 0;
                            foreach ($list_chuyen_khoa as $item_list_chuyen_khoa) {

                                $number_chuyen_khoa++;
                        ?>
                    <div id="frontp5tab_<?php echo $number_chuyen_khoa ?>" class="tab__wrap <?php echo $active ?>">
                        <div class="item">
                            <p><?php echo $item_list_chuyen_khoa['content_chuyen_khoa'] ?><?php if ($item_list_chuyen_khoa['link_move_chuyen_khoa'] != '') { ?><a
                                    href="<?php echo $item_list_chuyen_khoa['link_move_chuyen_khoa'] ?>"> Xem thêm
                                    ></a><?php } ?></p>
                        </div>
                    </div>
                    <?php
                                $active = '';
                            }
                        } ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="grid__xl frontp6">
    <div class="box">
        <div class="">
            <div class="frontp6__row1 custom-display">
                <h2 class="h2_home --mb-30" data-aos="fade-down"><span>ĐỘI NGŨ CHUYÊN GIA</span></h2>
                <?php if (get_field('xem_them_chuyen_gia') != '') {
                        ?>
                <a class="button button-albus button-effect-ujarak"
                    href="<?php echo get_field('xem_them_chuyen_gia') ?>"> Xem Thêm Chuyên Gia </a>
                <?php
                        } ?>
            </div>
            <div class="frontp6__row2 d__fl">
                <div class="frontp6__row2__owl">
                    <div class="owl-carousel owl-theme">
                        <?php $list_doi_ngu = get_field('doi_ngu_chuyen_nghiep');
                            if ($list_doi_ngu) {
                                $number_doi_ngu = 1;
                                foreach ($list_doi_ngu as $item_doi_ngu) {
                                    $number_doi_ngu++;
                            ?>
                        <div data-hash="frontp6_<?php echo $number_doi_ngu ?>">
                            <div class="item" data-aos="fade-up">
                                <a href=""><span><img
                                            src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($item_doi_ngu->ID), 'full') ?>"
                                            alt=""></span></a>
                                <div class="d__fl">
                                    <h3><b><?php echo $item_doi_ngu->post_title ?></b><br><small><?php echo get_field('chuc_vu_doi_ngu', $item_doi_ngu) ?></small>
                                    </h3><a href="<?php echo get_permalink($item_doi_ngu->ID) ?>">Xem
                                        chi tiết ></a>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            } ?>


                    </div>
                </div>
                <div class="frontp6__row2__owl_thumb">
                    <div class="owl-carousel1 owl-theme d__fl">
                        <?php $list_doi_ngu = get_field('doi_ngu_chuyen_nghiep');
                            if ($list_doi_ngu) {
                                $number_doi_ngu = 1;
                                $active_doing = 'active';
                                foreach ($list_doi_ngu as $item_doi_ngu) {
                                    $number_doi_ngu++;

                            ?>
                        <div class="item" data-aos="fade-right"><a href="#frontp6_<?php echo $number_doi_ngu ?>"
                                class="<?php echo $active_doing ?>"><img
                                    src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($item_doi_ngu->ID), 'full') ?>"
                                    alt="">
                                <p class="custom-css-title"><?php echo $item_doi_ngu->post_title ?></p>
                            </a></div>
                        <?php
                                    $active_doing = '';
                                }
                            } ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="grid__xl frontp9">
    <div class="box">
        <div class="">
            <div class="frontp9__row2">
                <div class="owl-carousel owl-theme">
                    <?php $cac_noi_dung_khac = get_field('cac_noi_dung_khac');
                        if ($cac_noi_dung_khac) {
                            foreach ($cac_noi_dung_khac as $item_noi_dung) {
                        ?>
                    <div class="item" data-aos="fade-left">
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

<?php
endwhile;
get_footer();
?>