<?php

/**
 * Template name: Search  Page
 * @author :duc
 */

function search_by_title_only($search, $wp_query)
{
    if (!empty($search) && !empty($wp_query->query_vars['search_terms'])) {
        global $wpdb;
        $q = $wp_query->query_vars;
        $n = !empty($q['exact']) ? '' : '%';
        $search = array();
        foreach ((array) $q['search_terms'] as $term){
            $search[] = $wpdb->prepare("$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like($term) . $n);
        }
        $search = ' AND ' . implode(' AND ', $search);
    }
    return $search;
}
add_filter('posts_search', 'search_by_title_only', 999, 2);
get_header();
while (have_posts()) :
    the_post();
    $obz = get_queried_object();
?>
    <main class="main main-noibat">
        <div class="sec-breadcrumb" >
            <div class="container">
                <ul class="breadcrumb">
                    <li> <a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
                    <li class="--active"><?php echo __('Kết Quả Tìm Kiếm : ', 'monamedia') ?><?php global $wp_query;
                                                                                                echo $_GET['key']; ?></li>
                </ul>
            </div>
        </div>
        <div class="pd sec-3">
            <div class="container">
                <div class="pd__wrap">
                    <div class="pd__sell" >
                        <div class="pd__tabs-content data-return shop-container">
                            <div class="tab-content --active">
                                <div class="pd__list">
                                    <div class="cols">
                                        <?php
                                        global $wp_query;
                                        $cate = @$_GET['cate'];
                                        $page = max(1, get_query_var('paged'));
                                        $ofset = ($page - 1) * 12;
                                        $args = array(
                                            'post_type' => 'service',
                                            'posts_per_page' => 12,
                                            'paged' => $page,
                                            'offset' => $ofset,
                                            'tax_query' => array(
                                                'relation' => 'AND',
                                            )
                                        );
                                        if ($cate != '') {
                                            $args['tax_query'][] = array(
                                                'taxonomy' => 'doi_ngu_bs',
                                                'field' => 'slug',
                                                'terms' => $cate,
                                            );
                                        }
                                        if (@$_GET['key'] != '') {
                                            $args['s'] = $_GET['key'];
                                        }
                                        $my_query = new WP_Query($args);
                                        while ($my_query->have_posts()) {
                                            $my_query->the_post();
                                        ?>
                                            <div class="col" >

                                                <div class="c-pd__item">
                                                    <div class="c-pd__img">
                                                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('384x284') ?></a>
                                                    </div>
                                                    <div class="c-pd__content">
                                                        <a href="<?php the_permalink() ?>" class="title">
                                                            <?php the_title() ?>
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
                                <div class="pagination">
                                    <nav>
                                        <?php mona_page_navi($my_query) ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('pactch/tintuc', 'page') ?>
    </main>


<?php
endwhile;
get_footer();
?>