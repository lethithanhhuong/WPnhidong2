<?php $post_lien_quan = wp_get_object_terms($post->ID, ['doi_ngu_bs','services'], array('fields' => 'ids'));
        $args = array(
            'post_type' => 'service',
            'post_status' => 'publish',
            'posts_per_page' => 7,
            'tax_query' => [
				'relation' => 'OR',
				 [
					  'taxonomy' => 'doi_ngu_bs',               
					  'field' => 'id',                    
					  'terms' => $post_lien_quan,
					  'include_children' => true, 
					  'operator' => 'IN'    
				 ],
				 [
					   'taxonomy' => 'services',               
					   'field' => 'id',                    
						'terms' => $post_lien_quan,     
						'include_children' => true, 
						'operator' => 'IN'
				 ]
			 ],
            'post__not_in' => array($post->ID),
        );
        $post_bai_viet = new WP_Query($args);
        if ($post_bai_viet->have_posts() != '') {
        ?>


<section class="blog-best sec-2">
    <div class="container">
        <div class="blog-best__wrap">
            <h2 class="main-title --uppercase --mb-30" data-aos="fade-down">
                <?php echo __('Các Bác Sĩ Khác', 'monamedia') ?>
            </h2>
            <div class="is-slider --loop --auto" data-aos="fade-up">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <?php
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
<?php  }?>