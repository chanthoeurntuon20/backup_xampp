<?php
// Social Icons
function satrah_customize_register_social( $wp_customize ) {
$wp_customize->add_section('satrah_social_section', array(
    'title' => __('Social Icons','satrah'),
    'priority' => 44 ,
));

$social_networks = array( //Redefinied in Sanitization Function.
    'none' => __('-','satrah'),
    'facebook' => __('Facebook','satrah'),
    'twitter' => __('Twitter','satrah'),
    'google-plus' => __('Google Plus','satrah'),
    'instagram' => __('Instagram','satrah'),
    'rss' => __('RSS Feeds','satrah'),
    'vine' => __('Vine','satrah'),
    'vimeo-square' => __('Vimeo','satrah'),
    'youtube' => __('Youtube','satrah'),
    'flickr' => __('Flickr','satrah'),
);

$social_count = count($social_networks);

for ($x = 1 ; $x <= ($social_count - 3) ; $x++) :

    $wp_customize->add_setting(
        'satrah_social_'.$x, array(
        'sanitize_callback' => 'satrah_sanitize_social',
        'default' => 'none'
    ));

    $wp_customize->add_control( 'satrah_social_'.$x, array(
        'settings' => 'satrah_social_'.$x,
        'label' => __('Icon ','satrah').$x,
        'section' => 'satrah_social_section',
        'type' => 'select',
        'choices' => $social_networks,
    ));

    $wp_customize->add_setting(
        'satrah_social_url'.$x, array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( 'satrah_social_url'.$x, array(
        'settings' => 'satrah_social_url'.$x,
        'description' => __('Icon ','satrah').$x.__(' Url','satrah'),
        'section' => 'satrah_social_section',
        'type' => 'url',
        'choices' => $social_networks,
    ));

endfor;

function satrah_sanitize_social( $input ) {
    $social_networks = array(
        'none' ,
        'facebook',
        'twitter',
        'google-plus',
        'instagram',
        'rss',
        'vine',
        'vimeo-square',
        'youtube',
        'flickr'
    );
    if ( in_array($input, $social_networks) )
        return $input;
    else
        return '';
}
}
add_action( 'customize_register', 'satrah_customize_register_social' );