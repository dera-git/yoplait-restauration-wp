<section class="kl-sect-gamme kl-bg-white-primary">
    <div class="container kl-container-1112">
        <div class="kl-title-gamme">
            <?php if( get_field('titre_liste_gamme') ): ?>
                <div class="kl-second-title text-center kl-color-red kl-md-mb-34">
                    <h2><?php the_field('titre_liste_gamme') ?></h2>
                </div>
            <?php endif ?>
            <?php if( get_field('sous_titre_liste_gamme') ): ?>
                <div class="kl-second-title text-center kl-color-black-tertiary">
                    <h3><?php the_field('sous_titre_liste_gamme') ?></h3>
                </div>
            <?php endif ?>
        </div>
        <?php
            $args = array(
                'post_type' => 'gamme',
                'post_status' => 'publish',
                'posts_per_page' => 9,
                'order' => 'DESC'
              );
        
            $query = new WP_Query($args);
        ?>
        <?php $i = 1; if ( $query->have_posts() ) : ?>
            <div class="row">
                <?php while( $query->have_posts() ): $query->the_post(); ?>
                    <div class="col-md-6 col-lg-4 col-xl-4 mb-5">
                        <a href="<?php the_permalink(); ?>" class="kl-card-gamme kl-card-transition kl-card-colore-<?= $i < 5 ? $i : $i = 1 ; ?>">
                            <div class="kl-card-gamme-title">
                                <?php the_title(); ?>
                            </div>
                            <div class="kl-content-img-gamme <?php if(get_the_ID() === 164): ?>chefs<?php endif; ?> <?php if(get_the_ID() === 180): ?>convives<?php endif; ?>">
                                <?php the_post_thumbnail( 'full', array('class' => 'img-fluid kl-img-gamme') ); ?>
                                <svg class="kl-svg-gamme" width="282" height="209" viewBox="0 0 282 209" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M263.065 108.935C315.549 10.687 241.197 -3.60418 197.461 1.53124C120.849 12.2422 -25.1549 54.4407 3.72878 137.546C39.8334 241.429 197.461 231.745 263.065 108.935Z" fill="#CF000C"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <?php $i++ ?>
                <?php endwhile ?>
            </div>
        <?php endif ?>
        
        <?php if( get_field('libelle_du_bouton_liste_gamme') ): ?>
            <div class="kl-btn-sect-gamme">
                <a href="<?php the_field('lien_bouton_liste_gamme') ?>" class="kl-btn-default kl-btn-red">
                <svg class="kl-svg-btn kl-svg-btn-white" width="75" height="108" viewBox="0 0 75 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.1557 81.8273C23.1567 25.8072 57.7146 8.70748 72.4934 8.49767C75.2714 5.6652 76.2937 0.000244141 58.1591 0.000244141C40.0245 0.000244141 15.3379 45.9493 10.8225 56.9645C-1.4928 87.0069 -3.38465 140.171 10.1557 81.8273Z" fill="white"/>
                </svg>
                    <?php the_field('libelle_du_bouton_liste_gamme') ?>
                </a>
            </div>
        <?php endif ?>

    </div>
</section>