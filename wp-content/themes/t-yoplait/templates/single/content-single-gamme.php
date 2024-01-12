<?php
    session_start();
    $url_gamme = get_the_permalink();
    $title_gamme = get_the_title();

    $_SESSION['urlGamme'] = $url_gamme;
    $_SESSION['TitleGamme'] = $title_gamme;
?>

<?php if(get_the_ID(180)): ?>
    <section class="kl-sect-gamme-panier">
    <div class="container kl-container-1140 position-relative">
        <!-- <div class="kl-content-link-back">
            <a href="<?php echo get_permalink(151) ?>" class="kl-link-back"><img src="<?php bloginfo('template_directory'); ?>/assets/img/gamme_pannier/arrowLeft.svg" />
                <?php the_title() ?>
            </a>
        </div> -->
        <div class="kl-title-section kl-title-40 kl-svg-fleur-title kl-mb-8">
            <h1><?php the_title() ?></h1>
        </div>
        <div class="kl-content-text text-center kl-desc-page-color">
            <?php the_content(); ?>
        </div>
        <div class="kl-flower-gamme-panier">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/flower.svg" alt="" class="img-fluid">
        </div>

        <div class="kl-sect-gamme-panier kl-bg-transparent kl-decor-none kl-navigation-in-gamme">
            <div class="container kl-container-1140 position-relative">
                <div class="kl-content-link-back">
                    <a href="<?php echo get_permalink(151); ?>" class="kl-link-back"><img src="<?php bloginfo('template_directory'); ?>/assets/img/gamme_pannier/arrowLeft.svg" />
                        <?php echo get_the_title( 151 ) ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<section>
    <div class="container kl-container-1112">
        <div class="row pt-5 mt-5 pt-lg-5">
            <?php $choix_des_marques = get_field('choix_des_marques');
                if( $choix_des_marques ): ?>
                    <?php $i = 1; foreach( $choix_des_marques as $post ): 
                        setup_postdata($post); ?>
                        <div class="col-md-6 col-lg-4 col-xl-4 mb-5">
                            <a href="<?php the_permalink(); ?>" class="kl-card-gamme kl-card-transition kl-card-colore-<?= $i < 5 ? $i : $i = 1 ; ?>">
                                <div class="kl-content-img-gamme">
                                    <?php the_post_thumbnail( 'full', array('class' => 'img-fluid kl-img-gamme') ); ?>
                                    <svg class="kl-svg-gamme" width="282" height="209" viewBox="0 0 282 209" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M263.065 108.935C315.549 10.687 241.197 -3.60418 197.461 1.53124C120.849 12.2422 -25.1549 54.4407 3.72878 137.546C39.8334 241.429 197.461 231.745 263.065 108.935Z" fill="#CF000C"/>
                                    </svg>
                                </div>
                                <div class="kl-card-gamme-title">
                                    <?php the_field('titre_de_la_marque'); ?>
                                </div>
                            </a>
                        </div>
                    <?php  $i++ ;endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>