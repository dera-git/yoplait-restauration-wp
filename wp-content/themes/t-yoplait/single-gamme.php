<?php
    get_header()
?>

    <?php while ( have_posts() ) : the_post(); ?>
    
        <?php get_template_part("templates/single/content-single-gamme"); ?>

    <?php endwhile; ?>

<?php get_footer() ?>