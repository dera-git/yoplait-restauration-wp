<section class="kl-section-contact">
    <div class="container kl-container-1140">
        <div class="row kl-contact-form-row kl-bg-white gx-0">
            <div class="col-lg-7 kl-col-lg-57-perc">
                <div class="kl-contact-form-left kl-bg-pink">
                    <div class="kl-max-w-lg-430">
                        <?php if( get_field('titre_form_contact') ): ?>
                            <div class="kl-title-section kl-custom kl-text-36 kl-svg-fleur-title d-inline-block ps-0 pb-0 text-start kl-title-page-modif">
                                <?php the_field('titre_form_contact') ?>
                            </div>
                        <?php endif ?>
                        <?php if( get_field('description_form_contact') ): ?>
                            <div class="kl-color-gray-secondary kl-mb-30">
                                <?php the_field('description_form_contact') ?>
                            </div>
                        <?php endif ?>

                        <?php if( get_field('formulaire_contact') ): ?>
                            <?php the_field('formulaire_contact') ?>
                        <?php endif ?>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-5 kl-col-lg-43-perc">
                <div class="d-flex flex-column h-100">
                    <div class="kl-contact-form-right">
                        <ul class="list-unstyled kl-list-icon mb-0">
                            <?php if( get_field('adresse_contact_rue') ): ?>
                                <li class="kl-mb-30">
                                    <div class="kl-list-link kl-color-gray-secondary">
                                        <span class="kl-icon me-3"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/MapPinLine.svg" class="img-fluid" alt=""></span>
                                        <span><?php the_field('adresse_contact_rue') ?></span>
                                    </div>
                                </li>
                            <?php endif ?>
                            <?php if( get_field('adresse_email') ): ?>
                                <li class="kl-mb-30">
                                    <a href="mailto:<?php the_field('adresse_email') ?>" class="kl-list-link kl-color-gray-secondary">
                                        <span class="kl-icon me-3"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/Envelope.svg" class="img-fluid" alt=""></span>
                                        <span><?php the_field('adresse_email') ?></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if( get_field('telephone_contact') ): ?>
                                <li>
                                    <a href="tel:<?php the_field('telephone_contact') ?>" class="kl-list-link kl-color-gray-secondary">
                                        <span class="kl-icon me-3"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-phone.svg" class="img-fluid" alt=""></span>
                                        <span><?php the_field('telephone_contact') ?></span>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                    <?php if( get_field('image_de_contact') ): ?>
                        <div class="flex-grow-1">
                            <img src="<?php the_field('image_de_contact') ?>" class="img-fluid kl-img-contact" alt="">
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>