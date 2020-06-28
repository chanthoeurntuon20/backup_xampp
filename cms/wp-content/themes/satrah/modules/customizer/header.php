<?php
//Settings for Header Image
function satrah_customize_register_header( $wp_customize ) {
$wp_customize->add_setting( 'satrah_himg_style' , array(
    'default'     => 'cover',
    'sanitize_callback' => 'satrah_sanitize_himg_style'
) );

/* Sanitization Function */
function satrah_sanitize_himg_style( $input ) {
    if (in_array( $input, array('contain','cover') ) )
        return $input;
    else
        return '';
}

$wp_customize->add_control(
    'satrah_himg_style', array(
    'label' => __('Header Image Arrangement','satrah'),
    'section' => 'header_image',
    'settings' => 'satrah_himg_style',
    'type' => 'select',
    'choices' => array(
        'contain' => __('Contain','satrah'),
        'cover' => __('Cover Completely (Recommended)','satrah'),
    )
) );

$wp_customize->add_setting( 'satrah_himg_align' , array(
    'default'     => 'center',
    'sanitize_callback' => 'satrah_sanitize_himg_align'
) );

/* Sanitization Function */
function satrah_sanitize_himg_align( $input ) {
    if (in_array( $input, array('center','left','right') ) )
        return $input;
    else
        return '';
}

$wp_customize->add_control(
    'satrah_himg_align', array(
    'label' => __('Header Image Alignment','satrah'),
    'section' => 'header_image',
    'settings' => 'satrah_himg_align',
    'type' => 'select',
    'choices' => array(
        'center' => __('Center','satrah'),
        'left' => __('Left','satrah'),
        'right' => __('Right','satrah'),
    )
) );

$wp_customize->add_setting( 'satrah_himg_repeat' , array(
    'default'     => true,
    'sanitize_callback' => 'satrah_sanitize_checkbox'
) );

$wp_customize->add_control(
    'satrah_himg_repeat', array(
    'label' => __('Repeat Header Image','satrah'),
    'section' => 'header_image',
    'settings' => 'satrah_himg_repeat',
    'type' => 'checkbox',
) );
}
add_action( 'customize_register', 'satrah_customize_register_header' );