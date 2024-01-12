<section class="kl-sect-stats js-section-key">
    <div class="container kl-container-1140">
        <?php if( have_rows('contenu_chiffre_cles') ): ?>
            <div class="row g-0">
                <?php while( have_rows('contenu_chiffre_cles') ): the_row() ?>
                    <div class="col-md-4">
                        <div class="kl-card-stats">
                            <?php if( get_sub_field('image_chiffre_cles') ): ?>
                                <div class="kl-img-stats">
                                    <img src="<?php the_sub_field('image_chiffre_cles') ?>" alt="" class="img-fluid">
                                </div>
                            <?php endif ?>
                            <?php if( get_sub_field('chiffre_cles') ): ?>
                                <div class="kl-card-stats-title">
                                    <h2>
                                        <?php if( get_sub_field('libelle_avant_chiffre') ): ?>
                                            <span><?php the_sub_field('libelle_avant_chiffre') ?></span>
                                        <?php endif ?>
                                        <?php $number = get_sub_field('chiffre_cles');
                                        $echoNumber =  str_replace(' ', '', $number); ?>
                                        <span class="js-counter"><?php echo $echoNumber ?></span>
                                    </h2>
                                </div>
                            <?php endif ?>
                            <?php if( get_sub_field('titre_chiffre_cles') ): ?>
                                <h3 class="kl-link-stats"><?php the_sub_field('titre_chiffre_cles') ?></h3>
                            <?php endif ?>
                            <?php if( get_sub_field('description_chiffre_cles') ): ?>
                                <div class="kl-content-text">
                                    <?php the_sub_field('description_chiffre_cles') ?>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        <?php endif ?>
        <?php if( get_field('bouton_en_savoir_plus_chiffre_cles') ): ?>
            <div class="kl-btn-sect-stats">
                <a href="<?php the_field('lien_bouton_chiffre_cles') ?>" class="kl-btn-default kl-btn-blue-secondary">
                <svg class="kl-svg-btn kl-svg-btn-white-primary d-md-none d-block" width="75" height="108" viewBox="0 0 75 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.1557 81.8273C23.1567 25.8072 57.7146 8.70748 72.4934 8.49767C75.2714 5.6652 76.2937 0.000244141 58.1591 0.000244141C40.0245 0.000244141 15.3379 45.9493 10.8225 56.9645C-1.4928 87.0069 -3.38465 140.171 10.1557 81.8273Z" fill="white"/>
                </svg>
                    <?php the_field('bouton_en_savoir_plus_chiffre_cles') ?>
                </a>
            </div>
        <?php endif ?>
    </div>
</section>