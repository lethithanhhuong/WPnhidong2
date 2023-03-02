<?php

/**
 * Template name: Liên hệ pAGE
 * @author : Hy Hý
 */
get_header();
while (have_posts()) :
	the_post();
?>
	<main class="main main-noibat">
		<div class="sec-breadcrumb" data-aos="zoom-out">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
					<li class="--active"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
				</ul>
			</div>
		</div>
        <div class="contact-sec sec">
            <div class="container">
                <div class="contact-white-box" data-aos="fade-up">
                    <div class="sec-title mb-50 text-center">
                        <h1 class="fz-46 fw-bold" data-aos="fade-left"><?php echo get_field('lien_he_voi_chung_toi') ?></h1>
                    </div>
                    <div class="contact-wrap">
                        <div class="columns">
                            <div class="column contact-left" data-aos="fade-up">
                                <h2 class="contact-title"><?php echo get_field('ten_cong_ty') ?></h2>
                                <div class="contact-desc"><?php echo get_field('content_cong_ty') ?>
                                </div>
                                <div class="contact-info-wrap">
                                    <?php $list_dia_chi_contact =get_field('list_dia_chi_contact');
                                    if($list_dia_chi_contact){
                                        foreach($list_dia_chi_contact as $item){
                                            ?>
                                            <div class="contact-info">
                                                <div class="contact-info-icon">
                                                     <?php $image = $item['image_icon_location'];
                                                     
                                                     $size ='full';
                                                     echo wp_get_attachment_image($image,$size) ?>
                                                </div>
                                                <h3 class="contact-info-title"><?php echo $item['title_location'] ?></h3>
                                                <div class="contact-info-desc"><?php echo $item['content_location'] ?></div>
                                            </div>
                                            <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                            <div class="column contact-right" data-aos="fade-up">
                                <div class="contact-form">
                                    <?php  echo do_shortcode(get_field('form_contact')) ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-sec">
            <?php if( get_field('xem_chi_dan')!=''){
                ?>
                 <div class="container">
                    <a href="<?php  echo get_field('xem_chi_dan') ?>" class="readmore-btn"><?php echo __('Xem Chỉ Dẫn','mmonamedia') ?></a>
                </div>

                <?php
            } ?>
           
           <?php echo get_field('map_lien_he') ?>
        </div>
		
	</main>
<?php
endwhile;
get_footer();
?>