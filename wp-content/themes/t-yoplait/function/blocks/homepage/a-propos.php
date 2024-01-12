<section class="kl-sect-appointment">
    <div class="container kl-container-1140">
        <div class="row">
            <div class="col-md-4">
                <div class="kl-appointment-img">
                    <?php if( get_field('image_a_propos_home') ): ?>
                        <img src="<?php the_field('image_a_propos_home') ?>" alt="" class="img-fluid">
                    <?php endif ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="kl-content-appointement">
                    <div class="kl-desc-appointment">
                        <?php if( get_field('description_a_propos_home') ): ?>
                            <?php the_field('description_a_propos_home') ?>
                        <?php endif ?>
                        <?php if( get_field('libelle_du_bouton_a_propos_home') ): ?>
                            <div class="kl-btn-sect-appointment">
                                <a href="<?php the_field('lien_a_propos_home') ?>" class="kl-btn-default kl-btn-red">
                                    <svg class="kl-svg-btn kl-svg-btn-white-primary" width="75" height="108" viewBox="0 0 75 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.1557 81.8273C23.1567 25.8072 57.7146 8.70748 72.4934 8.49767C75.2714 5.6652 76.2937 0.000244141 58.1591 0.000244141C40.0245 0.000244141 15.3379 45.9493 10.8225 56.9645C-1.4928 87.0069 -3.38465 140.171 10.1557 81.8273Z" fill="white"/>
                                    </svg>
                                    <?php the_field('libelle_du_bouton_a_propos_home') ?>
                                </a>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>