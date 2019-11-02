<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>)"></div>
        <!-- <img class="headerImage img-fluid" src="<?php echo get_header_image(); ?>" alt=""> -->
    </div>
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-3"><?php echo get_bloginfo('name'); ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="container" id="mainBody">
    <div class="">

    </div>
</div>

<?php get_footer(); ?>
