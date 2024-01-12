<section class="kl-section-about-fabrication">
    <div class="container kl-container-1140">
        <div class="text-center">
            <?php if( get_field('titre_h2_presentatation') ): ?>
                <div class="kl-text-36 kl-color-black-primary kl-title-500-blue-secondary kl-mb-md-50 kl-mb-30">
                    <?php the_field('titre_h2_presentatation') ?>
                </div>
            <?php endif ?>
            <?php if( get_field('description_presentatation') ): ?>
                <div class="kl-fw-medium kl-color-black-secondary kl-desc-strong-500-blue kl-ff-first mx-auto kl-max-w-1005 kl-mb-30 pb-2">
                    <?php the_field('description_presentatation') ?>
                </div>
            <?php endif ?>
            <?php if( get_field('image_presentatation') ): ?>
                <div class="kl-img-radius-content kl-mb-50 pb-md-3">
                    <img src="<?php the_field('image_presentatation') ?>" class="img-fluid" alt="">
                </div>
            <?php endif ?>
            <?php if( get_field('libelle_du_bouton_presentatation') ): ?>
                <a href="<?php the_field('lien_bouton_presentatation') ?>" class="kl-btn-default kl-btn-blue-secondary d-inline-block kl-btn-xs">
                    <svg class="kl-svg-btn kl-svg-btn-white-primary d-md-none d-block" width="75" height="108" viewBox="0 0 75 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.1557 81.8273C23.1567 25.8072 57.7146 8.70748 72.4934 8.49767C75.2714 5.6652 76.2937 0.000244141 58.1591 0.000244141C40.0245 0.000244141 15.3379 45.9493 10.8225 56.9645C-1.4928 87.0069 -3.38465 140.171 10.1557 81.8273Z" fill="white"></path>
                    </svg>
                    <?php the_field('libelle_du_bouton_presentatation') ?>
                </a>
            <?php endif ?>
        </div>
    </div>
</section>