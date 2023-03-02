<?php
get_header();
while (have_posts()) :
    the_post();
?>
    <main class="main main-cart">
        <div class="sec-breadcrumb" data-aos="fade">
            <div class="container">
                <ul class="breadcrumb">
                    <li data-aos="fade-left">
                        <a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monameida') ?></a>
                    </li>
                    <li class="--active" data-aos="fade-left" data-aos-delay="100">
                        <a href="javascript:;"><?php the_title() ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="cart sec-60" data-aos="fade" data-aos-delay="100">
            <div class="container">
                <div class="cart-main">
                    <h2 class="main-title tt-22 t-capitalize t-center --mb-30" data-aos="fade-down" data-aos-delay="100">
                        <?php the_title() ?>
                    </h2>
                </div>
                <?php the_content(); ?>
            </div>
        </section>

    </main>
<?php
endwhile;
get_footer();
?>