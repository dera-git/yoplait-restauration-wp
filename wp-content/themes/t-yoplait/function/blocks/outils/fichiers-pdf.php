<section class="kl-section-yop-plan overflow-hidden">
    <div class="container kl-container-1140">
        <div class="row justify-content-start kl-gy-50 kl-gx-xl-117 kl-equal-prt">
            <?php if( have_rows('contenu_fichiers_pdf') ): ?>
                <?php while( have_rows('contenu_fichiers_pdf') ): the_row() ?>
                    <?php if( get_sub_field('fichiers_a_telecharger') ): ?>
                        <div class="col-md-6 col-lg-4">
                        <?php if( is_user_logged_in() ): ?>
                            <?php $file = get_sub_field('fichiers_a_telecharger');
                            if( $file ): $url = wp_get_attachment_url( $file );?>
                                <a href="<?php echo esc_html($url);?>" target="_blank" class="text-decoration-none">
                            <?php endif;?>
                        <?php else: ?>
                            <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#id-moncompte">
                        <?php endif ?>    
                                <div class="kl-card-plan text-center kl-max-w-331 mx-auto">
                                    <?php if( get_sub_field('icone_fichiers_pdf') ): ?>
                                        <div class="kl-icon" data-mh="data-icon">
                                            <img src="<?php the_sub_field('icone_fichiers_pdf'); ?>" class="img-fluid" alt="">
                                        </div>
                                    <?php endif ?>
                                    <?php if( get_sub_field('titre_fichiers_pdf') ): ?>
                                        <h6 class="kl-title kl-color-black-primary" data-mh="data-title"><?php the_sub_field('titre_fichiers_pdf'); ?></h6>
                                    <?php endif ?>
                                    <?php if( get_sub_field('description_fichiers_pdf') ): ?>
                                        <div class="kl-description kl-ff-first kl-color-gray" data-mh="data-description">
                                            <p><?php the_sub_field('description_fichiers_pdf'); ?></p>
                                        </div>
                                    <?php endif ?>
                                    <?php if( !is_user_logged_in() ): ?>
                                        <div class="kl-card-recette-footer">
                                            <div class="flex-shrink-0 me-2">
                                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17 17.8013C15.6471 17.8013 14.5464 18.902 14.5464 20.2549C14.5464 21.2317 15.1203 22.0768 15.9484 22.4713V26.2265H18.0515V22.4712C18.8797 22.0766 19.4536 21.2316 19.4536 20.2548C19.4536 18.902 18.3529 17.8013 17 17.8013Z" fill="#F4F4F4"/>
                                                    <path d="M24.1856 12.187V7.18557C24.1856 3.22341 20.9622 0 17 0C13.0379 0 9.81444 3.22341 9.81444 7.18557V12.187C6.83941 14.3921 4.90723 17.9281 4.90723 21.9072C4.90723 28.5752 10.332 34 17 34C23.668 34 29.0928 28.5752 29.0928 21.9072C29.0928 17.9281 27.1606 14.3921 24.1856 12.187ZM11.9175 7.18557C11.9175 4.38306 14.1975 2.10309 17 2.10309C19.8025 2.10309 22.0825 4.38306 22.0825 7.18557V10.9359C20.5364 10.2169 18.8144 9.81443 17 9.81443C15.1856 9.81443 13.4636 10.2169 11.9175 10.936V7.18557ZM17 31.8969C11.4917 31.8969 7.01032 27.4156 7.01032 21.9072C7.01032 16.3989 11.4917 11.9175 17 11.9175C22.5084 11.9175 26.9897 16.3989 26.9897 21.9072C26.9897 27.4156 22.5084 31.8969 17 31.8969Z" fill="#F4F4F4"/>
                                                </svg>
                                            </div>
                                            <div>Inscrivez-vous pour accéder à cet outil</div>
                                        </div>
                                        <?php else: ?>
                                            <button target="_blank" download class="kl-btn-default kl-btn-red d-inline-block kl-btn-sm kl-fw-medium">
                                                <svg class="kl-svg-btn kl-svg-btn-white" width="75" height="108" viewBox="0 0 75 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.1557 81.8273C23.1567 25.8072 57.7146 8.70748 72.4934 8.49767C75.2714 5.6652 76.2937 0.000244141 58.1591 0.000244141C40.0245 0.000244141 15.3379 45.9493 10.8225 56.9645C-1.4928 87.0069 -3.38465 140.171 10.1557 81.8273Z" fill="white"></path>
                                                        </svg>
                                                Télécharger en PDF
                                            </button>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                    <?php endif ?> 
                <?php endwhile ?>
            <?php endif ?>
        </div>
    </div>
</section>