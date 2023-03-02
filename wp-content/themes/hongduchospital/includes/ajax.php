<?php 

function mona_ajax_add_buy_now() { 
    $qtt = @$_POST['quantity'];
    $id_attr = @$_POST['data_id'];
    $id_pro = @$_POST['id_pro'];
      $cart = wc()->cart->add_to_cart($id_pro,$qtt,$id_attr);
    if ($cart) {
        echo json_encode(array('status' => 'success', 'message' => wc_get_checkout_url()));
        die();
    }
    echo json_encode(array('status' => 'error', 'message' => $cart));
    wp_die();
}

add_action('wp_ajax_mona_ajax_add_buy_now', 'mona_ajax_add_buy_now');
add_action('wp_ajax_nopriv_mona_ajax_add_buy_now', 'mona_ajax_add_buy_now');


// AJAX ADD TO CART
function mona_ajax_remove_cart_item() {
    if( !class_exists('woocommerce') || !WC()->cart ) {
        return;
    }
    global $woocommece, $product;
    $data_item = $_POST['data_item'];
    if(empty($data_item)) {
        return;
    } else {
        $call_remove = WC()->cart->remove_cart_item($data_item);
        $cart_empty = false;
        if(WC()->cart->is_empty()) {
            $cart_empty = true;
        }
        if($call_remove) {
            echo json_encode( array( 
                'status' => 'success', 
                'message' => 'Remove cart success' ,
                'is_cart_empty' => $cart_empty,
                'shop_url'  => get_permalink( woocommerce_get_page_id( 'shop' ) ).'?cart_empty',
            ) );
            wp_die();
        }
    }
}
add_action('wp_ajax_mona_ajax_remove_cart_item', 'mona_ajax_remove_cart_item');
add_action('wp_ajax_nopriv_mona_ajax_remove_cart_item', 'mona_ajax_remove_cart_item');


