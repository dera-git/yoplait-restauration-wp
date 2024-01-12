<section class="kl-sect-extract-gamme">
    <div class="container kl-container-1140">
        <?php if( get_field('titre_gamme_2_column') ): ?>
            <div class="kl-title-section kl-title-40 kl-mw-950">
                <h3><?php the_field('titre_gamme_2_column') ?></h3>
            </div>
        <?php endif ?>
        <div class="kl-list-extract-gamme">
            <?php $i = 1; $gammes = get_field('bloc_produit_gamme'); ?>
            <?php if( $gammes ): ?>
                <div class="row">
                    <?php foreach( $gammes as $gamme ): ?>
                        <div class="col-md-6">
                            <div class="kl-card-extract-gamme">
                                <div class="kl-card-extract-gamme-img kl-bg-img-<?= $i ?>"> 
                                    <?php echo get_the_post_thumbnail( $gamme->ID, 'full', array('class' => 'img-fluid') ) ?>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="<?php the_permalink( $gamme->ID ); ?>" class="kl-btn-default kl-btn-red">
                                    <svg class="kl-svg-btn kl-svg-btn-white" width="75" height="108" viewBox="0 0 75 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.1557 81.8273C23.1567 25.8072 57.7146 8.70748 72.4934 8.49767C75.2714 5.6652 76.2937 0.000244141 58.1591 0.000244141C40.0245 0.000244141 15.3379 45.9493 10.8225 56.9645C-1.4928 87.0069 -3.38465 140.171 10.1557 81.8273Z" fill="white"/>
                                    </svg>
                                        Gamme <?php echo $gamme->post_title ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php $i++ ?>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>