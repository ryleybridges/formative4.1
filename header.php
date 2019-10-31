<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo get_bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>

        <?php if(has_nav_menu('top_navigation')): ?>
            <nav class="navbar navbar-expand-md navbar-dark navColour" role="navigation">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                        <?php if(!the_custom_logo()): ?>
                            <a class="navbar-brand" href="#"><?php echo get_bloginfo('name'); ?></a>
                        <?php else: ?>
                            <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
                        <?php endif; ?>

                    <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'top_navigation',
                            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav mr-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ));
                     ?>
                </div>
            </nav>
        <?php endif; ?>
