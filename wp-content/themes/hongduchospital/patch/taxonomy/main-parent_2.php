<?php 

$obz = get_queried_object();
$childs = mona_get_term_children($obz->term_id, $obz->taxonomy);
if (count($childs) > 0) {
$custom_term = get_terms(array('taxonomy' => $obz->taxonomy, 'term_taxonomy_id' => $childs));
foreach ($custom_term as $item) {

?>
<div class="swiper-slide  item 1-csstom">
    <div class="mina">
        <a href="<?php echo get_category_link($item->term_id); ?>">
            <?php echo  $item->name ?></a>
    </div>
</div>
<?php
?>
<?php }
}else{
    $term = get_queried_object()->term_id;
    $obz = get_queried_object();
    $termid = get_term($term, 'cac_chuyen_khoa');
    if ($termid) {
        $args = array(
            'orderby'       => 'slug',
            'order'         => 'ASC',
            // 'number' => 1,
            'hide_empty'    => false,
            'child_of'      => $termid->parent,
            'parent' => $termid->parent,
    
        );
        $siblingproducts = get_terms('cac_chuyen_khoa', $args);
        foreach ($siblingproducts as $siblingproductsss) {
    ?>  <div class="swiper-slide  item 2">
            <div class="mina">
                <a href="<?php echo get_category_link($siblingproductsss->term_id); ?>">
                    <?php echo  $siblingproductsss->name ?></a>
            </div>
        </div>
    <?php
        }
    }
    ?>

<?php 
}

?>