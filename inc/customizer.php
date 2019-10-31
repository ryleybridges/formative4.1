<?php

    function mytheme_customize_register($wp_customize){

        $wp_customize->add_setting('embrace_backgroundColour', array(
            'default' => '#e6e6e6',
            'transport' => 'refresh'
        ));

        $wp_customize->add_setting('embrace_headerFooterColour', array(
            'default' => '#4d4d4d',
            'transport' => 'refresh'
        ));


        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'embrace_backgroundColour', array(
	           'label'      => __( 'Background Colour', 'EmbraceCustom' ),
               'description' => 'Change the background colour',
	           'section'    => 'colors',
	           'settings'   => 'embrace_backgroundColour'
           ) ) );

         $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'embrace_headerFooterColour', array(
             'label' => __('Header & Footer Navigation Colour', 'EmbraceCustom'),
             'description' => 'Change the header & footer navigation colour',
             'section' => 'colors',
             'settings' => 'embrace_headerFooterColour'
         )));

    }

add_action( 'customize_register', 'mytheme_customize_register' );

    function mytheme_customize_css(){
        ?>
            <style type="text/css">
                body { background-color: <?php echo get_theme_mod('embrace_backgroundColour', '#e6e6e6'); ?>;}
                nav { background-color: <?php echo get_theme_mod('embrace_headerFooterColour', '#4d4d4d'); ?>; }
            </style>
        <?php
    }

add_action('wp_head', 'mytheme_customize_css');
