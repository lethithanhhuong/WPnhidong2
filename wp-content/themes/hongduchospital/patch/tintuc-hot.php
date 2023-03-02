<div class="aside-mail" data-aos="fade-up">
    <div class="icon">
        <img src="<?php echo site_url(); ?>/template/images/contact-icon-3.png" alt="" />
    </div>
    <?php echo do_shortcode('[contact-form-7 id="2443" title="nhan tin"]') ?>

</div>
<div class="gio_lam_viec">
    <div class="gio-lam-hanh-chinh">
        <h3 class="h_3">Thời gian làm việc</h3>
        <ul>
            <li>Hành chính: 7h00 - 16h30 (thứ 2 - 6)</li>
            <li>Khám &amp; Cấp cứu: <b>24/24</b></li>
        </ul>
    </div>
</div>
<!-- <section class="content-the-tag-bai-viet dahh-sach-tu-khoa margin-top-css  gradient_model8" style="padding-bottom: 30px;">
    <div class="container">
        <div class="blog-best__wrap ">
            <div class="contentbox">
            <h2 class="h4">Danh sách từ khoá</h2>
                <ul class="col-2-list content">
                    <?php
                        $tags = get_tags();
                        foreach ($tags as $tag) {
                            echo '<li class="li-the-tag"><a href="' . get_category_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                        }
                        ?>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<div class="aside-box" data-aos="fade-up">
    <p class="title"><?php echo __('tin tức Xem nhiều nhất', 'monamedia') ?></p>
    <div>
        <?php

        $args = array(
            'posts_per_page' => 4,
            'post_type' => 'post',
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',

        );

        $popularpost = new WP_Query($args);
        if ($popularpost->have_posts()) {
            while ($popularpost->have_posts()) {
                $popularpost->the_post();
        ?>
        <div class="c-blog__ver" data-aos="fade-up">
            <div class="img">
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('100x77') ?>
                </a>
            </div>
            <div class="content">
                <p class="date"><?php echo  get_the_date('d/m/Y') ?></p>
                <a href="<?php the_permalink() ?>" class="title">
                    <?php the_title() ?>
                </a>
            </div>
        </div>
        <?php
            }
            wp_reset_query();
        } else {
            echo ' chưa có bài viết hot trong tuần';
        }
        ?>
    </div>
</div>
