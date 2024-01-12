        <footer class="kl-footer kl-bg-red">
          <div class="container kl-container-1140">
            <div class="row">
              <div class="col-md-4">
                <a href="<?php bloginfo( 'url' ) ?>" class="kl-link-footer">
                  <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo_footer.svg" alt="">
                </a>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-6 pe-md-5 pe-3">
                    <div class="kl-title-footer">
                        <?php if( get_field('libellle_numbre_phone', 'options') ): ?>
                          <h3><?php the_field('libellle_numbre_phone', 'options') ?></h3>
                        <?php endif ?>
                    </div>
                    <div class="kl-content-footer">
                        <?php if( get_field('numero_phone_contact', 'options') ): ?>
                            <a href="tel:<?php the_field('numero_phone_contact', 'options') ?>" class="kl-phone-number">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/mssg1.svg" alt="" class="img-fluid">
                                <?php the_field('numero_phone_contact', 'options') ?>
                            </a>
                        <?php endif ?>
                        <?php if( get_field('heure_douverture', 'options') ): ?>
                            <?php the_field('heure_douverture', 'options') ?>
                        <?php endif ?>

                    </div>
                  </div>
                  <div class="col-md-6 ps-md-5 ps-3">
                    <div class="kl-title-footer text-md-start text-center">
                      <h3>Liens <span class="kl-d-md-none">utiles</span></h3>
                    </div>
                    <div class="kl-content-footer">
                        <?php if( get_field('libelle_du_bouton_contact_footer', 'options') ): ?>
                          <a href="<?php the_field('lien_contact_footer', 'options') ?>" class="kl-btn-default kl-btn-yellow">
                            <svg class="kl-svg-btn kl-svg-btn-red" width="75" height="108" viewBox="0 0 75 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10.1557 81.8273C23.1567 25.8072 57.7146 8.70748 72.4934 8.49767C75.2714 5.6652 76.2937 0.000244141 58.1591 0.000244141C40.0245 0.000244141 15.3379 45.9493 10.8225 56.9645C-1.4928 87.0069 -3.38465 140.171 10.1557 81.8273Z" fill="white"/>
                            </svg>
                            <?php the_field('libelle_du_bouton_contact_footer', 'options') ?>
                          </a>
                        <?php endif ?>
                    </div>
                    <div class="kl-menu-footer row mt-5">
                      <div class="col-12">
                          <?php
                            wp_nav_menu(
                              array (
                                  'theme_location' => 'secondaire',
                                  'container' => 'div',
                                  'container_class' => 'row',
                                  'depth' => 1,
                                  'items_wrap' => '%3$s',
                                  'fallback_cb'     => false,
                                  'walker' => new Description_Walker
                              )
                            );
                          ?>
                      </div>
                      <div class="col-12">
                          <?php
                            wp_nav_menu(
                              array (
                                  'theme_location' => 'menu_pied_de_page',
                                  'container' => 'div',
                                  'container_class' => 'row',
                                  'depth' => 1,
                                  'items_wrap' => '%3$s',
                                  'fallback_cb'     => false,
                                  'walker' => new Description_Walker
                              )
                            );
                          ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- Modal login -->
        <div class="kl-modal-login modal fade" id="id-moncompte" tabindex="-1" aria-labelledby="MonCompte" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content overflow-hidden">
              <div class="container-fluid">
                <div class="row align-items-lg-center">
                  <div class="col-lg-6 px-4 py-4 py-md-5">
                      <div class="kl-max-w-422 mx-auto mt-2">
                        <div class="kl-title-section kl-title-24 text-start kl-color-black-primary p-0 mb-2 <?php addClassUserLogged(); ?>">
                          <h4>Pour accéder à ce contenu vous devez avoir un compte</h4>
                        </div>
                        <div class="kl-title-section kl-title-24 text-start kl-color-black-primary p-0 mb-2 <?php addClassUserLogout(); ?>">
                          <h4>Accéder à votre compte <a href="<?php echo get_permalink(475); ?>" class="kl-color-yellow">ici</a> </h4>
                        </div>
                        <div class="kl-color-gray-secondary pt-1 pb-2 <?php addClassUserLogged(); ?>">
                          <p>Veuillez vous connecter à votre compte</p>
                        </div>
                        <div class="kl-form-control-login">
                          <?= do_shortcode('[wppb-login]');?>
                          <div class="d-none kl-lost-pass">
                            <a class="lost" class="kl-color-gray-secondary kl-link-hover-red" href="<?php echo wp_lostpassword_url(); ?>">Mot de passe oublié ?</a>
                          </div>
                        </div>
                        <div class="kl-color-gray-secondary text-center <?php addClassUserLogged(); ?>">
                          <p class="mb-1">Vous n’avez pas de compte ? <a href="javascript:void(0)" class="kl-register-link kl-color-red text-decoration-none kl-link-hover-underline" data-bs-toggle="modal" data-bs-target="#id-moncompte-1">Inscrivez-vous ici.</a></p>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-6 px-0 align-self-lg-stretch">
                    <?php if( get_field('image_login', 'options') ): ?>
                      <img class="kl-img-cover" src="<?php the_field('image_login', 'options') ?>" alt="illustration">
                    <?php else: ?>
                      <img class="kl-img-cover" src="<?php bloginfo('template_directory'); ?>/assets/img/mon_compte/illustration.jpg" alt="illustration">
                    <?php endif ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Modal register-->
        <div class="kl-modal-register modal fade" id="id-moncompte-1" tabindex="-1" aria-labelledby="MonCompte-1" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content overflow-hidden">
              <div class="container-fluid kl-container-register">
                <div class="row align-items-lg-center">
                  <div class="col-lg-6 px-4 py-4 py-md-5">
                    <div class="kl-form-control-register kl-scrollbar kl-max-w-438 mx-auto mt-2">
                        <?= do_shortcode('[wppb-register form_name="register-form"]'); ?>
                    </div>
                  </div>
                  <div class="col-lg-6 px-0 align-self-lg-stretch">
                    <?php if( get_field('image_login', 'options') ): ?>
                      <img class="kl-img-cover" src="<?php the_field('image_login', 'options') ?>" alt="illustration">
                    <?php else: ?>
                      <img class="kl-img-cover" src="<?php bloginfo('template_directory'); ?>/assets/img/mon_compte/illustration.jpg" alt="illustration">
                    <?php endif ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
    <?php wp_footer(); ?>
</body>
</html>