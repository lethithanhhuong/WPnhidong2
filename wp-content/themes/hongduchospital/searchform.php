
<?php $cate = @$_GET['cate']; ?>
<form method="get" id="searchform" class="searchform" action="<?php echo get_the_permalink(MONA_SEARCH); ?>" >
<div class="hd-right">
  <div class="hd-search">
      <div class="hd-search-form" id="hd-search-form">
          <!-- <select class="f-control" name="cate">
          <option value=""><?php _e('Đội ngũ bác sĩ', 'monamedia'); ?> </option>
              <?php
              $terms = get_terms(array('taxonomy' => 'product_cat'));
              if ($terms && !is_wp_error($terms)) {
                foreach ($terms as $item) {
                  $selected = '';
                  if ($cate == $item->slug) {
                    $selected = 'selected';
                  }
                  echo '<option ' . $selected . ' value="' . $item->slug . '">' . $item->name . '</option>';
                }
              }
              ?>
          </select> -->
          <input type="text" class="f-control" name="key" value="<?php echo esc_html(@$_GET['key']); ?>" id="key" placeholder="<?php echo esc_attr_x('Nhập tên bác sĩ bạn cần tìm', 'placeholder', 'monamedia'); ?>" />
              <button type="submit" class="main-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</form>

