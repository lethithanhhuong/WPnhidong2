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