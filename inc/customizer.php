<?php

function rdty_customizer($wp_customize)
{

    $wp_customize->add_section('rdty_hdset',array(
        'title' => __('Header Settigns','rdty'),
        'description' => ''
    ));
    $wp_customize->add_setting('rdty_name',array(
        'default' => '',
    ));
    $wp_customize->add_setting('rdty_surname',array(
        'default' => '',
    ));
    $wp_customize->add_control('rdty_name', array(
        'label' => __('Name','rdty'),
        'section' => 'rdty_hdset',
        'settings' => 'rdty_name'
    ));
    $wp_customize->add_control('rdty_surname', array(
        'label' => __('Surname','rdty'),
        'section' => 'rdty_hdset',
        'settings' => 'rdty_surname'
    ));

	
    $wp_customize->add_section('rdty_cpset',array(
        'title' => __('Copyright Settigns','rdty'),
        'description' => ''
    ));
    $wp_customize->add_setting('rdty_cptext',array(
        'default' => '© Raditian. All rights reserved.',
    ));
    $wp_customize->add_control('rdty_cptext', array(
        'label' => __('Copyright Text','rdty'),
        'section' => 'rdty_cpset',
        'settings' => 'rdty_cptext'
    ));
    
    
}
add_action('customize_register','rdty_customizer');
?>