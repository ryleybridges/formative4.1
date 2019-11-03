<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>)">
            <?php if (get_theme_mod('embrace_overlayHeaderText') === 'yes'): ?>
                <h1 class="display-3 mainHeader"><?php echo get_bloginfo('name'); ?></h1>
            <?php endif; ?>
        </div>
    </div>
    <div class="container" id="mainBody">
        <div class="row">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <div class="text-center px-3 mt-4">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php else: ?>
    <div class="container" id="mainBody">
        <div class="row">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <div class="col mt-1">
                        <h1 class="display-4 text-center"><?php echo get_bloginfo('name'); ?></h1>
                        <div class="text-center px-3 mt-3"><?php the_content(); ?></div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
