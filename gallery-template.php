<?php
/*
    Template Name: Gallery
    Template Post Type: page, post
*/
 ?>

<?php get_header(); ?>

<div class="container-fluid">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <div class="row">
                <div class="col-12">
                    <h2 class="display-3 text-center"><?php the_title(); ?></h2>
                </div>
            </div>
            <div class="card mb-3 mt-3">
                <div class="card-body">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
