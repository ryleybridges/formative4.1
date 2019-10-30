<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo get_bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>

        <?php if(has_nav_menu('top_navigation')): ?>
            <nav class="navbar navbar-expand-md navbar-dark" role="navigation">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        <?php endif; ?>
