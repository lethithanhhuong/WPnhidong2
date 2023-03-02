<?php

if (class_exists('Kirki')) {

    /**
     * Add sections
     */
    function kirki_demo_scripts() {
        wp_enqueue_style('kirki-demo', get_stylesheet_uri(), array(), time());
    }

    add_action('wp_enqueue_scripts', 'kirki_demo_scripts');
    $priority = 1;
    Kirki::add_section('general', array(
        'title' => esc_attr__('General Option', 'monamedia'),
        'priority' => $priority++,
        'capability' => 'edit_theme_options',
    ));
    Kirki::add_section('header', array(
        'title' => esc_attr__('Header Option', 'monamedia'),
        'priority' => $priority++,
        'capability' => 'edit_theme_options',
    ));
    Kirki::add_section('social', array(
        'title' => esc_attr__('Social Link', 'monamedia'),
        'priority' => $priority++,
        'capability' => 'edit_theme_options',
    ));
    Kirki::add_section('footer', array(
        'title' => esc_attr__('Footer Option', 'monamedia'),
        'priority' => $priority++,
        'capability' => 'edit_theme_options',
    ));
    /**
     * Add fields
     */
    // Header

   
    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'order_note_bacs4',
        'label' => esc_attr__('Câu chủ chốt', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your text', 'monamedia'),
        'section' => 'header',
        'default' => '',
        'priority' => $priority++,
    ));
    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'order_note_bacs5',
        'label' => esc_attr__('Số điện thoại', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your text', 'monamedia'),
        'section' => 'header',
        'default' => '',
        'priority' => $priority++,
    ));
    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'order_note_bacs5_2',
        'label' => esc_attr__('Số điện thoại 2', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your text', 'monamedia'),
        'section' => 'header',
        'default' => '',
        'priority' => $priority++,
    ));
    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'order_note_bacs6',
        'label' => esc_attr__('FACEBOOK', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your text', 'monamedia'),
        'section' => 'header',
        'default' => '',
        'priority' => $priority++,
    ));
    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'order_note_youtbe',
        'label' => esc_attr__('Youtube', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your text', 'monamedia'),
        'section' => 'header',
        'default' => '',
        'priority' => $priority++,
    ));
// Footer Tab
    Kirki::add_field('mona_setting', array(
        'type' => 'image',
        'settings' => 'mona_footer_logo',
        'label' => esc_attr__('Footer Logo', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your Logo', 'monamedia'),
        'section' => 'footer',
        'default' => '',
        'priority' => $priority++,
    ));
    Kirki::add_field('mona_setting', array(
        'type' => 'textarea',
        'settings' => 'mona_coppyright',
        'label' => esc_attr__('Coppyright', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your Coppyright', 'monamedia'),
        'section' => 'footer',
        'default' => '',
        'priority' => $priority++,
    ));
    
    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'dia_chi_footer',
        'label' => esc_attr__('Liên hệ footer', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your Liên hệ footer', 'monamedia'),
        'section' => 'footer',
        'default' => '',
        'priority' => $priority++,
    ));
    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'phone_footer',
        'label' => esc_attr__('Phone footer', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your Phone footer', 'monamedia'),
        'section' => 'footer',
        'default' => '',
        'priority' => $priority++,
    ));

    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'phone_footer_fax',
        'label' => esc_attr__('MESS', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your MESS', 'monamedia'),
        'section' => 'footer',
        'default' => '',
        'priority' => $priority++,
    ));
  

// Social Tab    
    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'mona_sticky_header_facebook',
        'label' => esc_attr__('Facebook', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your Facebook Link', 'monamedia'),
        'section' => 'social',
        'default' => '',
        'priority' => $priority++,
    ));
    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'mona_sticky_header_instagram',
        'label' => esc_attr__('Instagram', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your Instagram Link', 'monamedia'),
        'section' => 'social',
        'default' => '',
        'priority' => $priority++,
    ));
    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'mona_sticky_header_twitter',
        'label' => esc_attr__('Twitter', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your Twitter Link', 'monamedia'),
        'section' => 'social',
        'default' => '',
        'priority' => $priority++,
    ));
    Kirki::add_field('mona_setting', array(
        'type' => 'text',
        'settings' => 'mona_sticky_header_youtube',
        'label' => esc_attr__('Youtube', 'monamedia'),
        'description' => esc_attr__('', 'monamedia'),
        'help' => esc_attr__('Enter your Youtube Link', 'monamedia'),
        'section' => 'social',
        'default' => '',
        'priority' => $priority++,
    ));
}
if (!function_exists('mona_option')) {

    function mona_option($setting, $default = '') {
        echo mona_get_option($setting, $default);
    }

    function mona_get_option($setting, $default = '') {
        if (class_exists('Kirki')) {
            $value = $default;
            $options = get_option('option_name', array());
            $options = get_theme_mod($setting, $default);
            if (isset($options)) {
                $value = $options;
            }
            return $value;
        }
        return $default;
    }

}