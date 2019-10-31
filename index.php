<?php get_header(); ?>

<div class="container" id="mainBody">
    <?php if (have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
