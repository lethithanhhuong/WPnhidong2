<?php 
$obz = get_queried_object();
$childs = mona_get_term_children($obz->term_id, $obz->taxonomy);
if (count($childs) > 0) {
$term = get_queried_object();
$children = get_terms( $term->taxonomy, array(
'parent'    => $term->term_id,
'hide_empty' => false,
'term_taxonomy_id' => $childs,
) );
foreach ($children as $term) { 
?> 
    <div class="swiper-slide  item 2">
    <div class="mina">
        <a href="<?php echo get_category_link($term->term_id); ?>">
            <?php echo  $term->name ?></a>
    </div>
</div>
    <?php
    }
}