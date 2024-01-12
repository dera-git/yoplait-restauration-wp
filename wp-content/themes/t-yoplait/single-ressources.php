<?php get_header() ?>

<?php while ( have_posts() ) : the_post(); ?>

<main class="kl-main">
    <?php get_template_part("templates/single/content-single-ressources"); ?>
</main>

<?php endwhile; ?>
<?php get_footer() ?>