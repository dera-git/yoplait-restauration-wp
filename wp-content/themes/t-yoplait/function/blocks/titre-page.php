<?php 
    $top = '';
    $bottom = '';
    $sec_class = '';
    $container_class = '';
    $mb0_class = '';
    $mb8_class = '';
    $class_fs = '';
    if ( is_page_template( 'templates/nos_gammes.php' ) ) {
        $sec_class = 'pt-5';
        $container_class = 'pt-lg-3';
    }elseif ( is_page_template(array( 'templates/tpl-outils.php', 'templates/actualites.php', 'templates/about.php', 'templates/engagement.php' )) ) {
        $sec_class = 'kl-section-ripped-bg kl-bg-white-primary';
        $top = '<span class="kl-bg-ripped top"></span>';
        $bottom = '<span class="kl-bg-ripped bottom"></span>';
        $mb0_class = 'kl-mb-0';
        $mb8_class = 'kl-mb-8';
    }
    if( is_page_template( array(
        'templates/nos_gammes.php',
        'templates/tpl-outils.php',
        'templates/actualites.php'
        ) ) ){
        $class_fs = 'kl-text-18';
    }
?>
<section class="<?= $sec_class ?>">
    <?= $top ?>
    <?= $bottom; ?>
    <div class="container kl-container-1140 position-relative <?= $container_class ?>">
        <div class="kl-title-section kl-title-48 kl-svg-fleur-title mb-4 <?= $mb8_class ?>">
            <?php if(get_field('titre_page')): ?>
                <h1><?php the_field('titre_page') ?></h1>
            <?php else: ?>
                <h1><?php the_title() ?></h1>
            <?php endif ?>
        </div>
        <?php if(get_field('description_page')): ?>
            <div class="kl-content-text text-center kl-fw-semi-bold mb-5 kl-desc-page-color <?= $mb0_class . ' ' . $class_fs ?>">
                <?php the_field('description_page') ?>
            </div>
        <?php endif ?>
    </div>
</section>