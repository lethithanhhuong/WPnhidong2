 <!-- <section class="grid__xl frontp3">
        <div class="box">
            <div class="">
                <div class="frontp3__row2 d__fl">
                    <div class="frontp3__row2__col1">
                        <div class="owl_ul owl-carousel owl-theme">
                        <?php
                            global $post;
                            $font_3_honme = get_field('font_3_honme', $post->ID);
                            if ($font_3_honme) {
                                foreach ($font_3_honme as $item_font3) {
                            ?>
                                    <div class="owl_ul_li item">
                                        <div class="figu">
                                            <a href="<?php echo get_permalink($item_font3->ID) ?>" title="<?php echo $item_font3->post_title ?>">
                                                <img data-src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($item_font3->ID), 'full') ?>" alt="<?php echo $item_font3->post_title ?>" class="owl-lazy">
                                            </a>
                                        </div>
                                        <div class="para">
                                            <h4 class="para__title"><a href="<?php echo get_permalink($item_font3->ID) ?>"><?php echo $item_font3->post_title ?></a>
                                            </h4>
                                            <p>
                                                <span>
                                                    <?php echo wp_trim_words($item_font3->post_content , 20 ); ?>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                            <?php
                                }
                            } ?>


                        </div>

                    </div>
                    <div class="frontp3__row2__col2 d__fl">
                        <?php $list_quy_trinmh = get_field('list_quy_trinmh');
                        if ($list_quy_trinmh) {
                            foreach ($list_quy_trinmh as $item_quy_trinh) {
                        ?>
                                <a href="<?php $item_quy_trinh['link_quy_trinh'] ?>" class="item">
                                    <span><img src="<?php echo $item_quy_trinh['hinh_anh'] ?>" alt=""></span>
                                    <h3><?php echo $item_quy_trinh['tieu_de_quy_trinh'] ?></h3>
                                </a>
                                <?php
                                }
                            } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section> -->



 <!-- <section class="grid__xl frontp8">
        <div class="box">
            <div class="">
                <div class="frontp8__row1">
                    <div class="h2_home__icon"><span><i></i></span></div>
                    <h2 class="h2_home"><span>THƯ VIỆN</span></h2>
                </div>
                <div class="frontp8__row2 d__fl">
                    <div class="frontp8__row2__col frontp8__row2__col__1">
                        <div class="frontp8_1_tab__click frontp8_tab__click">
                            <ul class="d__fl">
                            <?php $tab_thu_vien = get_field('tab_thu_vien');
                                if ($tab_thu_vien) {
                                    $nuner_thu_vien = 1;
                                    $active_thu_vien = 'active';
                                    foreach ($tab_thu_vien as $item_thu_vien) {
                                ?>
                                        <li data-tab="frontp8_1_<?php echo $nuner_thu_vien ?>" class="tab__click <?php echo $active_thu_vien ?>"><span><?php echo $item_thu_vien['title_thu_vien'] ?></span></li>
                                <?php
                                        $nuner_thu_vien++;
                                        $active_thu_vien = '';
                                    }
                                } ?>
                            </ul>
                        </div>
                        <div class="frontp8_1_tab__wrap">

                            <div id="frontp8_1_1" class="tab__wrap active">
                                <div class="frontp8_1_tab__wrap__owl">
                                    <div class="frontp8_1__owl frontp8_1__owl__row1 owl-carousel owl-theme">
                                        <?php $youtube_platy = get_field('youtube_platy_link_1');
                                        if ($youtube_platy) {
                                            foreach ($youtube_platy as $item_play_ytb) {
                                        ?>
                                        <div class="ytb_wrap">
                                                <div class="ytb_lazy" data-embed="<?php echo $item_play_ytb['id_play_video'] ?>" data-thumb="sd">
                                                    <div class="ytb_wrap__play"></div>
                                                </div>
                                         </div>
                                        <?php
                                            }
                                        } ?>
                                    </div>
                                    <div class="frontp8_1__owl frontp8_1__owl__row2 owl-carousel owl-theme">
                                        <?php $youtube_platy = get_field('youtube_platy_link_1');
                                        if ($youtube_platy) {
                                            foreach ($youtube_platy as $item_play_ytb) {
                                        ?>
                                                <div class="ytb__thumb" data-embed="<?php echo $item_play_ytb['id_play_video'] ?>" data-thumb="sd">
                                                    <div class="play-button"></div>
                                                </div>
                                        <?php
                                            }
                                        } ?>

                                    </div>
                                </div>
                            </div>
                            <div id="frontp8_1_2" class="tab__wrap">
                                <div class="frontp8_1_tab__wrap__owl">
                                    <div class="frontp8_1__owl frontp8_1__owl__row3 owl-carousel owl-theme">
                                        <?php $youtube_platy = get_field('youtube_platy_link_2');
                                        if ($youtube_platy) {
                                            foreach ($youtube_platy as $item_play_ytb) {
                                        ?>
                                                <div class="ytb_wrap">
                                                <div class="ytb_lazy" data-embed="<?php echo $item_play_ytb['id_play_video'] ?>" data-thumb="sd">
                                                    <div class="ytb_wrap__play"></div>
                                                </div>
                                         </div>

                                        <?php
                                            }
                                        } ?>
                                    </div>
                                    <div class="frontp8_1__owl frontp8_1__owl__row4 owl-carousel owl-theme">
                                        <?php $youtube_platy = get_field('youtube_platy_link_2');
                                        if ($youtube_platy) {
                                            foreach ($youtube_platy as $item_play_ytb) {
                                        ?>
                                                <div class="ytb__thumb" data-embed="<?php echo $item_play_ytb['id_play_video'] ?>" data-thumb="sd">
                                                    <div class="play-button"></div>
                                                </div>
                                        <?php
                                            }
                                        } ?>

                                    </div>
                                </div>
                            </div>
                            <div id="frontp8_1_3" class="tab__wrap">
                                <div class="frontp8_1_tab__wrap__owl">
                                    <div class="frontp8_1__owl frontp8_1__owl__row5 owl-carousel owl-theme">
                                        <?php $youtube_platy = get_field('youtube_platy_link_3');
                                        if ($youtube_platy) {
                                            foreach ($youtube_platy as $item_play_ytb) {
                                        ?>
                                                <div class="ytb_wrap">
                                                <div class="ytb_lazy" data-embed="<?php echo $item_play_ytb['id_play_video'] ?>" data-thumb="sd">
                                                    <div class="ytb_wrap__play"></div>
                                                </div>
                                         </div>

                                        <?php
                                            }
                                        } ?>
                                    </div>
                                    <div class="frontp8_1__owl frontp8_1__owl__row6 owl-carousel owl-theme">
                                        <?php $youtube_platy = get_field('youtube_platy_link_3');
                                        if ($youtube_platy) {
                                            foreach ($youtube_platy as $item_play_ytb) {
                                        ?>
                                                <div class="ytb__thumb" data-embed="<?php echo $item_play_ytb['id_play_video'] ?>" data-thumb="sd">
                                                    <div class="play-button"></div>
                                                </div>
                                        <?php
                                            }
                                        } ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="frontp8__row2__col frontp8__row2__col__2">
                        <div class="frontp8_2_tab__click frontp8_tab__click">
                            <ul class="d__fl">
                                <?php $tab_thu_vien_2 = get_field('tab_thu_vien_2');
                                if ($tab_thu_vien_2) {
                                    $nuner_thu_vien_2 = 1;
                                    $active_thu_vien_2 = 'active';
                                    foreach ($tab_thu_vien_2 as $item_thu_vien_2) {
                                ?>
                                        <li data-tab="frontp8_2_<?php echo $nuner_thu_vien_2 ?>" class="tab__click <?php echo $active_thu_vien_2 ?>"><span><?php echo $item_thu_vien_2['title_thu_vien_2'] ?></span></li>
                                <?php
                                        $nuner_thu_vien_2++;
                                        $active_thu_vien_2 = '';
                                    }
                                } ?>
                            </ul>
                        </div>
                        <div class="frontp8_2_tab__wrap">
                            <?php $tab_thu_vien_2 = get_field('tab_thu_vien_2');
                            if ($tab_thu_vien_2) {
                                $nuner_thu_vien_2 = 1;
                                $active_thu_vien_2 = 'active';
                                foreach ($tab_thu_vien_2 as $item_thu_vien_2) {
                            ?>
                                    <div id="frontp8_2_<?php echo $nuner_thu_vien_2 ?>" class="tab__wrap <?php echo $active_thu_vien_2 ?>">
                                        <div class="frontp8_2_tab__wrap__owl">
                                            <div id="metaslider-id-17535" style="max-width: 560px;" class="ml-slider-3-24-0 metaslider metaslider-flex metaslider-17535 ml-slider slide-home">
                                                <div id="metaslider_container_17535">
                                                    <div id="metaslider_17535" class="flexslider">
                                                        <ul aria-live="polite" class="slides">
                                                            <?php $thu_cam_on = $item_thu_vien_2['thu_cam_on'];
                                                            if ($thu_cam_on) {
                                                                foreach ($thu_cam_on as $item_cam_on) {
                                                            ?>
                                                                    <li style="display: block; width: 100%;" class="slide-26193 ms-image"><a href="<?php echo $item_cam_on['link_move_thu'] ?>" target="_self"><img src="<?php echo $item_cam_on['hinh_anh'] ?>" height="400" width="560" alt="" class="slider-17535 slide-26193" title="" /></a></li>
                                                            <?php
                                                                }
                                                            } ?>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                    $nuner_thu_vien_2++;
                                    $active_thu_vien_2 = '';
                                }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


 <!-- <div class="header2_col2">
						<p class="_p1"> <?php //echo mona_option('order_note_bacs4'); ?> </p>
						<p class="_p2"><i class="fa fa-phone"></i>  <a href="tel:<?php echo mona_option('order_note_bacs5'); ?>"> <?php echo mona_option('order_note_bacs5'); ?></a> - <a href="tel:<?php echo mona_option('order_note_bacs5_2'); ?>"> <?php echo mona_option('order_note_bacs5_2'); ?></a></p>
					</div> -->


 <!-- <section class="noi-dung-dan-gia" style="background-image: url(http://old.hongduchospital.vn/wp-content/uploads/2022/04/row-bg11.jpg) !important;
        background-position: bottom right !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;">
        <div class="frontp6__row1 custom-display container">
    <h2 class="h2_home --mb-30 color_1"><span>ĐÁNH GIÁ KHÁCH HÀNG</span></h2>
</div>
    <div class="content-danh-gia">
        <div class="container">
            <div class="cols-danh-gia">
                <div class="slider slider-danh-gia">
                <?php $list_danh_gia_khach_hang =get_field('list_danh_gia_khach_hang');
                if($list_danh_gia_khach_hang){
                    foreach($list_danh_gia_khach_hang as $item_danh_gia){
                        ?>
                    <div>
                        <div class="cols">
                            <div class="col col-left-content">
                                <div class="content-hinh-anh">
                                    <div class="hinh-anh-danh-gia">
                                       <img src=" <?php echo $item_danh_gia['hinh_anh_danh_gia'] ?>" alt="">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col col-right-content">
                                <div class="author">
                                    <div class="author-name">
                                        <div class="img-avatar"><img class="attachment-full size-full"
                                                src="<?php echo $item_danh_gia['hinh_anh_khach_hang'] ?>" alt=""
                                                width="70" height="70" /></div>
                                    </div>
                                    <div class="content">
                                        <div class="title-ten"><?php echo $item_danh_gia['ten_nguoi_danh_gia'] ?></div>
                                        <div class="title-nhanvien"><?php echo $item_danh_gia['chuc_vu'] ?></div>
                                        <div class="cusstom"> <?php echo $item_danh_gia['noi_dung_danh_gia'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }
                } ?>
                </div>

            </div>
        </div>
    </div>
</section>


<div class="frontp6__row1 custom-display container">
    <h2 class="h2_home --mb-30 color_5"><span>ĐÁNH GIÁ KHÁCH HÀNG</span></h2>
</div>
<section class="content-danh-gia-khach-hang" id="bg-khach-hang-dk">
    <div class="container">
        <div class="sub-danh-gia-khach-hang">
            <div class="slider slider-danh-gia">
                <?php $list_danh_gia_khach_hang =get_field('list_danh_gia_khach_hang');
                if($list_danh_gia_khach_hang){
                    foreach($list_danh_gia_khach_hang as $item_danh_gia){
                        ?>
                <div class="slider-danh-gi">
                    <div class="author">
                        <div class="author-name">
                            <div class="img-avatar"><img class="attachment-full size-full"
                                    src="<?php echo $item_danh_gia['hinh_anh_khach_hang'] ?>" alt="" width="70"
                                    height="70" /></div>
                        </div>
                        <div class="content">
                            <div class="title-ten"><?php echo $item_danh_gia['ten_nguoi_danh_gia'] ?></div>
                            <div class="title-nhanvien"><?php echo $item_danh_gia['chuc_vu'] ?></div>
                            <div class="cusstom"> <?php echo $item_danh_gia['noi_dung_danh_gia'] ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    }
                } ?>

            </div>
        </div>
    </div>
</section> -->
 <!-- <div class="gallery-module">
                <ul class="gallery-slider popup-gallery">
                <?php 
                        $list_hinh_anh =get_field('list_hinh_anh');
                        $size ='full';
                            if($list_hinh_anh ){
                                foreach($list_hinh_anh as $item_hinh_anh){
                                    if ($item_hinh_anh!='') {
                                        $image_url = wp_get_attachment_image_url($item_hinh_anh,$size);
                                    }?>
                    <li>
                        <a href="<?php echo $image_url ?>">
                            <img src="<?php echo $image_url ?>" alt="">
                        </a>
                    </li>
                    <?php }
                                            }?>
                </ul>
            </div> -->


<!-- 
            <section class="section section-lg section-full-width bg-gray-porce-ligher cu-exp" id="about-us">
        <div class="container">
            <div class="row row-30">
                <div class="col-xl-5">
                    <div class="about-out">
                        <?php  if( !wp_is_mobile()){
                         $list_quy_trinmh = get_field('list_quy_trinmh');
                        if ($list_quy_trinmh) {
                            
                            $count=1;
                            foreach ($list_quy_trinmh as $item_quy_trinh) {
                        ?>

                        <div class="colum-flex-4-col">
                            <article id="post-100"
                                class="sigma_service style-15 sigma-service-wrapper post-100 service type-service status-publish has-post-thumbnail hentry">
                                <div class="sigma_service-thumb">
                                    <img src="<?php echo $item_quy_trinh['hinh_anh'] ?>" alt="">
                                </div>
                                <div class="sigma_service-body">
                                    <h5>
                                        <a
                                            href="<?php if($item_quy_trinh['link_go_quy_trinh'] !=''){ echo $item_quy_trinh['link_go_quy_trinh']; }else{ echo 'javascript:void(0);'; }  ?> ">
                                            <?php echo $item_quy_trinh['tieu_de_quy_trinh'] ?></p></a>
                                    </h5>
                                    <p><?php echo $item_quy_trinh['cac_quy_trinh_lam_viec'] ?></p>
                                    <a href="<?php if($item_quy_trinh['link_go_quy_trinh'] !=''){
                                    
                                    echo $item_quy_trinh['link_go_quy_trinh'];

                                }else{
                                    echo '';
                                    }  ?>" class="btn-link" title="Xem chi tiết hơn">
                                        Xem thêm <i class="fa fa-arrow-right"></i>
                                    </a>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <?php
                  $count++;
                            }
                          
                        } 
                    }else{ ?>
                        <div class="is-slider --loop --auto blog-best__wrap">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php $list_quy_trinmh = get_field('list_quy_trinmh');
                        if ($list_quy_trinmh) {
                            
                            $count=1;
                            foreach ($list_quy_trinmh as $item_quy_trinh) {
                        ?>
                                    <div class="swiper-slide">
                                        <div class="colum-flex-4-col">
                                            <article id="post-100"
                                                class="sigma_service style-15 sigma-service-wrapper post-100 service type-service status-publish has-post-thumbnail hentry">
                                                <div class="sigma_service-thumb">
                                                    <img src="<?php echo $item_quy_trinh['hinh_anh'] ?>" alt="">
                                                </div>
                                                <div class="sigma_service-body">
                                                    <h5>
                                                        <a
                                                            href="<?php if($item_quy_trinh['link_go_quy_trinh'] !=''){ echo $item_quy_trinh['link_go_quy_trinh']; }else{ echo 'javascript:void(0);'; }  ?> ">
                                                            <?php echo $item_quy_trinh['tieu_de_quy_trinh'] ?></p></a>
                                                    </h5>
                                                    <p><?php echo $item_quy_trinh['cac_quy_trinh_lam_viec'] ?></p>
                                                    <a href="<?php if($item_quy_trinh['link_go_quy_trinh'] !=''){echo $item_quy_trinh['link_go_quy_trinh'];}else{echo 'javascript:void(0);';}  ?>"
                                                        class="btn-link" title="Xem chi tiết hơn">
                                                        Xem thêm <i class="fa fa-arrow-right"></i>
                                                    </a>
                                                    </a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <?php
                             $count++;
                            }
                          
                        } ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                        <?php }
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </section> -->