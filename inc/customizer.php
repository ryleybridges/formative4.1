<?php

    function mytheme_customize_register($wp_customize){

        $wp_customize->add_setting('embrace_backgroundColour', array(
            'default' => '#e6e6e6',
            'transport' => 'refresh'
        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'embrace_backgroundColourControl', array(
	           'label'      => __( 'Background Colour', 'EmbraceCustom' ),
               'description' => 'Change the background colour',
	           'section'    => 'colors',
	           'settings'   => 'embrace_backgroundColour',
           ) ) );

    }

add_action( 'customize_register', 'mytheme_customize_register' );

    function mytheme_customize_css(){
        ?>
            <style type="text/css">
                body { background-color: <?php echo get_theme_mod('embrace_backgroundColour', '#e6e6e6'); ?>;}
            </style>
        <?php
    }

add_action('wp_head', 'mytheme_customize_css');
