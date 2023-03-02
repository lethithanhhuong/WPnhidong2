<?php
get_header();
?>

<main class="main main-blog main-thitruong">
    <div class="sec-breadcrumb" data-aos="zoom-out">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo home_url() ?>"><?php echo __('Trang chủ', 'monamedia') ?></a></li>
                <li class="--active"><?php single_term_title() ?></li>
            </ul>
        </div>
    </div>
    <?php
        $obz = get_queried_object();
        $mona_tv = get_queried_object()->term_id;
        $term_id = $mona_tv;
        $taxonomy_name = 'category';
        ?>
    <?php
        if ( !  mona_get_term_children($term_id, $taxonomy_name)){
            get_template_part('patch/post/main','childen');
        }else{
            $chil  = get_term_children(   $term_id,   $taxonomy_name );
            if((is_array( $chil) && count( $chil ) > 0) && $obz->parent != 0 ) {
                get_template_part('patch/post/main','parent_2');
            }else{ 
                get_template_part('patch/post/main','parent') ;
            }
        }
    ?>

  
</main>



<?php
get_footer();
?>