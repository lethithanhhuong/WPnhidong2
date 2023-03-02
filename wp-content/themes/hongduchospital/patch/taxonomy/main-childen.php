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

$obz = get_queried_object();
$term = get_queried_object()->term_id;
$termid = get_term($term, 'cac_chuyen_khoa');
if ($termid) {
$args = array(
'orderby'       => 'slug',
'order'         => 'ASC',
'hide_empty'    => false,
'child_of'      => $termid->parent,
'parent' => $termid->parent,

);
$siblingproducts = get_terms('cac_chuyen_khoa', $args);
foreach ($siblingproducts as $siblingproduct) {
    ?>
<div class="swiper-slide  item 1">
    <div class="mina">
        <a href="<?php echo get_category_link($siblingproduct->term_id); ?>">
            <?php echo  $siblingproduct->name ?></a>
    </div>
</div>
<?php
  
}}?>

<?php 
}

?>