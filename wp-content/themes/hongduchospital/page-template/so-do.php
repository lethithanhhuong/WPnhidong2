<?php

/**
 * Template name: sow ddo to chuc Page
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
                    <div class="content-so-do">
                        <div class="so-do-to-chu">
                            <div class="doi-ngu-so-do">
                                <?php $danh_sach_khoa_so_do =get_field('danh_sach_khoa_so_do');
                                if($danh_sach_khoa_so_do){
                                    foreach($danh_sach_khoa_so_do as $item_khoa){
                                        ?>
                                            <div class="title-khoa"> 
                                                <h4 class="ten-cac-chuyen-khoa"><?php echo $item_khoa['cac_ten_chuyen_khoa'] ?></h4>
                                        </div>
                                         <div class="list-so-do">
                                            <?php $list_so_do =$item_khoa['danh_sach_con'];
                                            if($list_so_do ){
                                                foreach($list_so_do as $item_so_do ){
                                                    $danh_sach_con = $item_so_do['danh_sach_so_do'];
                                                    if($danh_sach_con){
                                                        foreach($danh_sach_con as $iten_ds_con){
                                                            if(wp_is_mobile()){
                                                            if($iten_ds_con['image_icon_location'] !=''){
                                                            ?>
                                                              <div class="hinh-anh-so-do">
                                                                <?php $image = $iten_ds_con['image_icon_location'];
                                                                        $size ='full';
                                                                        echo wp_get_attachment_image($image,$size) ?>
                                                                </div>
                                                            <?php 
                                                            }
                                                            }else{
                                                                
                                                                    ?>
                                                                      <div class="hinh-anh-so-do">
                                                                            <?php $image = $iten_ds_con['image_icon_location'];
                                                                                $size ='full';
                                                                                echo wp_get_attachment_image($image,$size) ?>
                                                                        </div>
                                                                    <?php 
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                    <?php 
                                                }
                                            } ?>
                                        </div>
                                        <?php 
                                        
                                    }
                                } ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
endwhile;
get_footer();
?>