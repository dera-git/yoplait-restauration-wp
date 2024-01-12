<?php
    /* 
        Template Name: Mentions légales
        ID Page: 19
    */

    get_header()
?>
 
    <section class="kl-sect-mentions-legales">
        <div class="container kl-container-1140 kl-decor-after-none pt-lg-3">
            <div class="kl-title-section kl-title-48 kl-svg-fleur-title kl-mb-55 kl-lg-mb-28">
              <h1><?php the_title() ?></h1>
            </div>
            <div class="kl-content-text-montions kl-mb-45">
                <?php the_content() ?>
            </div>
            <?php if( get_field('libelle_du_bouton_contact_mentions') ): ?>
                <div class="kl-content-text-montions">
                    <a href="<?php the_field('lien_contact_mentions') ?>" class="kl-btn-default kl-btn-yellow kl-mw-305 mt-5">
                        <svg class="kl-svg-btn kl-svg-btn-white" width="75" height="108" viewBox="0 0 75 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.1557 81.8273C23.1567 25.8072 57.7146 8.70748 72.4934 8.49767C75.2714 5.6652 76.2937 0.000244141 58.1591 0.000244141C40.0245 0.000244141 15.3379 45.9493 10.8225 56.9645C-1.4928 87.0069 -3.38465 140.171 10.1557 81.8273Z" fill="white"></path>
                        </svg>
                        <?php the_field('libelle_du_bouton_contact_mentions') ?>
                    </a>
                </div>
            <?php endif ?>
        </div>
    </section>

<?php get_footer() ?>