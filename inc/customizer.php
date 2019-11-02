<?php

    function mytheme_customize_register($wp_customize){

        // Adding settings
        $wp_customize->add_setting('embrace_mainBodyColour', array(
            'default' => '#e6e6e6',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('embrace_headerFooterColour', array(
            'default' => '#4d4d4d',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('embrace_sidebarSwitch', array(
            'default' => 'left',
            'transport' => 'refresh'
        ));

        // Adding sections
        $wp_customize->add_section('layout', array(
            'title' => __('Layout', 'EmbraceCustom'),
            'priority' => 50
        ));

        // Adding controls
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'embrace_mainBodyColour', array(
	           'label'      => __( 'Main Body Colour', 'EmbraceCustom' ),
               'description' => 'Change the main body colour',
	           'section'    => 'colors',
	           'settings'   => 'embrace_mainBodyColour'
           ) ) );

         $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'embrace_headerFooterColour', array(
             'label' => __('Header & Footer Navigation Colour', 'EmbraceCustom'),
             'description' => 'Change the header & footer navigation colour',
             'section' => 'colors',
             'settings' => 'embrace_headerFooterColour'
         )));

         $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'embrace_sidebarSwitch', array(
             'label' => __('Switch sidebar from left to right', 'EmbraceCustom'),
             'section' => 'layout',
             'settings' => 'embrace_sidebarSwitch',
             'type' => 'radio',
             'choices' => array(
                 'left' => 'Left',
                 'right' => 'Right'
             )
         )));

    }

add_action( 'customize_register', 'mytheme_customize_register' );

    function mytheme_customize_css(){
        ?>
            <style type="text/css">
                .mainBody { background-color: <?php echo get_theme_mod('embrace_backgroundColour', '#e6e6e6'); ?>;}
                nav { background-color: <?php echo get_theme_mod('embrace_headerFooterColour', '#4d4d4d'); ?>; }
            </style>
        <?php
    }

add_action('wp_head', 'mytheme_customize_css');
