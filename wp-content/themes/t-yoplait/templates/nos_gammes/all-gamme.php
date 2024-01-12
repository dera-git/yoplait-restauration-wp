<section>
    <div class="container kl-container-1112">
        <div class="row pt-3 pt-lg-5">
            <?php $choix_gamme = get_field('choix_gamme');
                if( $choix_gamme ): ?>
                    <?php $i = 1; foreach( $choix_gamme as $post ): 
                        setup_postdata($post); ?>
                        <div class="col-md-6 col-lg-4 col-xl-4 mb-5">
                            <a href="<?php the_permalink(); ?>" class="kl-card-gamme kl-card-transition kl-card-colore-<?= $i < 5 ? $i : $i = 1 ; ?>">
                                <div class="kl-card-gamme-title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="kl-content-img-gamme">
                                    <?php the_post_thumbnail( 'full', array('class' => 'img-fluid kl-img-gamme') ); ?>
                                    <svg class="kl-svg-gamme" width="282" height="209" viewBox="0 0 282 209" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M263.065 108.935C315.549 10.687 241.197 -3.60418 197.461 1.53124C120.849 12.2422 -25.1549 54.4407 3.72878 137.546C39.8334 241.429 197.461 231.745 263.065 108.935Z" fill="#CF000C"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    <?php  $i++ ;endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>