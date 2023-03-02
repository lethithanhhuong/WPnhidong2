<?php

class Mona_hook {

    public function __construct() {
        add_filter('pre_get_posts', [$this, 'prefix_limit_post_types_in_search']);
        add_filter('wpcf7_autop_or_not', '__return_false');
    }

    public function prefix_limit_post_types_in_search($query) {
        if (!is_admin()) {
            $query->set('ignore_sticky_posts', true);
            $ptype = $query->get('post_type', true);
            $ptype = (array) $ptype;
            if ($query->is_main_query() && $query->is_tax('services')) {
                $ptype[] = 'dich_vu';
                $query->set('post_type', $ptype);
                $query->set( 'posts_per_page' , 13 );
            }     
            if ($query->is_main_query() && $query->is_tax('doi_ngu_bs')) {
                $ptype[] = 'service';
                $query->set('post_type', $ptype);
                $query->set( 'posts_per_page' , 12 );
            }    
            if ($query->is_main_query() && $query->is_tax('cac_chuyen_khoa')) {
                $ptype[] = 'chuyen_khoa';
                $query->set('post_type', $ptype);
                $query->set( 'posts_per_page' , 13 );
            }     
            if ($query->is_search()) {
                $ptype[] = 'post';
                $query->set('post_type', $ptype);
                $query->set('posts_per_page',8);
              }         
        }

        return $query;
    }

}

new Mona_hook();
