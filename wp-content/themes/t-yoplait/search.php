<?php get_header(); ?>

<section class="kl-section-ripped-bg kl-bg-white-primary">
    <span class="kl-bg-ripped top"></span>
    <span class="kl-bg-ripped bottom"></span>
    <div class="container kl-container-1140 position-relative">
        <?php if( get_field('titre_recette_page', 'options') ): ?>
        <div class="kl-title-section kl-title-48 kl-svg-fleur-title kl-mb-8">
            <h1><?php the_field('titre_recette_page', 'options') ?></h1>
        </div>
        <?php endif ?>
        <?php if( get_field('description_recette_page', 'options') ): ?>
        <div class="text-center kl-color-black-secondary kl-fw-medium kl-text-18 kl-desc-strong-500">
            <?php the_field('description_recette_page', 'options') ?>
        </div>
        <?php endif ?>
    </div>
</section>
<section class="container kl-max-w-xl-1038">
    <header class="page-header">
        <h1 class="page-title title-result">
            <?php printf( esc_html__( 'Résultats de la recherche: %s', 'textdomain' ), '<span>' . get_search_query() . '</span>' ); ?>
        </h1>
    </header>
    <section class="container">
        <?php if ( have_posts() ) :?>
        <div class="js-row-recette row kl-gx-xl-30 kl-gy-24 kl-gy-xl-30 pb-md-3 mb-5">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-md-6 col-lg-4 js-bloc-recette noemie ingredient1">
                <?php if( is_user_logged_in() ): ?>
                <a href="<?php the_permalink() ?>" class="text-decoration-none">
                    <?php else: ?>
                    <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#id-moncompte">
                        <?php endif ?>
                        <div class="kl-card-recette h-100">
                            <div class="kl-card-recette-img">
                                <?php the_post_thumbnail( 'large', array('class' => 'img-fluid') ); ?>
                            </div>
                            <div class="kl-card-recette-body">
                                <h5><?php echo get_the_title( ); ?></h5>
                                <!-- <div class="kl-card-recette-infos">
                                            <?php // if( get_field('temps_de_preparation_recette', get_the_ID()) ): ?>
                                                <div class="kl-recette-info">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9998 26.6667C21.1545 26.6667 25.3332 22.488 25.3332 17.3333C25.3332 14.7765 24.3052 12.46 22.6398 10.7743L24.2494 9.16471L22.8352 7.75049L21.082 9.50371C19.8832 8.72397 18.4942 8.21211 16.9997 8.05293V6H19.9998V4H11.9998V6H14.9997V8.05295C13.5054 8.21213 12.1165 8.72397 10.9178 9.50364L9.16453 7.75041L7.75032 9.16463L9.35989 10.7742C7.69458 12.4599 6.6665 14.7765 6.6665 17.3333C6.6665 22.488 10.8452 26.6667 15.9998 26.6667ZM15.9998 10C11.9497 10 8.6665 13.2832 8.6665 17.3333C8.6665 21.3835 11.9497 24.6667 15.9998 24.6667C20.05 24.6667 23.3332 21.3835 23.3332 17.3333C23.3332 13.2832 20.05 10 15.9998 10Z" fill="#CF000C"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6665 16.6666V11.9998H14.6665V18.6666H19.9998V16.6666H16.6665Z" fill="#CF000C"/>
                                                    </svg>
                                                    <span><?php // the_field('temps_de_preparation_recette', get_the_ID()) ?></span>                                        
                                                </div>
                                            <?php // endif ?>
                                            <?php // if( get_field('nombre_de_presonne', get_the_ID()) ): ?>
                                                <div class="kl-recette-info">
                                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M24.375 22.75C24.375 22.75 26 22.75 26 21.125C26 19.5 24.375 14.625 17.875 14.625C11.375 14.625 9.75 19.5 9.75 21.125C9.75 22.75 11.375 22.75 11.375 22.75H24.375ZM11.4107 21.125C11.3987 21.1233 11.3868 21.1212 11.375 21.1185C11.3766 20.6895 11.6464 19.4447 12.61 18.3235C13.507 17.2721 15.0833 16.25 17.875 16.25C20.6651 16.25 22.2414 17.2738 23.14 18.3235C24.1036 19.4447 24.3717 20.6911 24.375 21.1185L24.362 21.1217C24.3544 21.123 24.3469 21.1241 24.3392 21.125H11.4107ZM17.875 11.375C18.737 11.375 19.5636 11.0326 20.1731 10.4231C20.7826 9.8136 21.125 8.98695 21.125 8.125C21.125 7.26305 20.7826 6.4364 20.1731 5.8269C19.5636 5.21741 18.737 4.875 17.875 4.875C17.013 4.875 16.1864 5.21741 15.5769 5.8269C14.9674 6.4364 14.625 7.26305 14.625 8.125C14.625 8.98695 14.9674 9.8136 15.5769 10.4231C16.1864 11.0326 17.013 11.375 17.875 11.375ZM22.75 8.125C22.75 8.76519 22.6239 9.39912 22.3789 9.99058C22.1339 10.582 21.7748 11.1195 21.3221 11.5721C20.8695 12.0248 20.332 12.3839 19.7406 12.6289C19.1491 12.8739 18.5152 13 17.875 13C17.2348 13 16.6009 12.8739 16.0094 12.6289C15.418 12.3839 14.8805 12.0248 14.4279 11.5721C13.9752 11.1195 13.6161 10.582 13.3711 9.99058C13.1261 9.39912 13 8.76519 13 8.125C13 6.83207 13.5136 5.59209 14.4279 4.67785C15.3421 3.76361 16.5821 3.25 17.875 3.25C19.1679 3.25 20.4079 3.76361 21.3221 4.67785C22.2364 5.59209 22.75 6.83207 22.75 8.125ZM11.271 15.08C10.621 14.8753 9.95091 14.7408 9.27225 14.6786C8.89091 14.6424 8.50806 14.6245 8.125 14.625C1.625 14.625 0 19.5 0 21.125C0 22.2089 0.541125 22.75 1.625 22.75H8.476C8.2351 22.2427 8.11496 21.6865 8.125 21.125C8.125 19.4837 8.73763 17.8067 9.89625 16.406C10.2911 15.9282 10.751 15.4814 11.271 15.08ZM7.995 16.25C7.03325 17.6951 6.51372 19.3892 6.5 21.125H1.625C1.625 20.7025 1.8915 19.4513 2.86 18.3235C3.74563 17.29 5.2845 16.2825 7.995 16.2516V16.25ZM2.4375 8.9375C2.4375 7.64457 2.95111 6.40459 3.86535 5.49035C4.77959 4.57611 6.01957 4.0625 7.3125 4.0625C8.60543 4.0625 9.84541 4.57611 10.7596 5.49035C11.6739 6.40459 12.1875 7.64457 12.1875 8.9375C12.1875 10.2304 11.6739 11.4704 10.7596 12.3846C9.84541 13.2989 8.60543 13.8125 7.3125 13.8125C6.01957 13.8125 4.77959 13.2989 3.86535 12.3846C2.95111 11.4704 2.4375 10.2304 2.4375 8.9375ZM7.3125 5.6875C6.45055 5.6875 5.6239 6.02991 5.0144 6.6394C4.40491 7.2489 4.0625 8.07555 4.0625 8.9375C4.0625 9.79945 4.40491 10.6261 5.0144 11.2356C5.6239 11.8451 6.45055 12.1875 7.3125 12.1875C8.17445 12.1875 9.0011 11.8451 9.6106 11.2356C10.2201 10.6261 10.5625 9.79945 10.5625 8.9375C10.5625 8.07555 10.2201 7.2489 9.6106 6.6394C9.0011 6.02991 8.17445 5.6875 7.3125 5.6875Z" fill="#CF000C"/>
                                                    </svg>
                                                    <span><?php // the_field('nombre_de_presonne', get_the_ID()) ?></span>
                                                </div>
                                            <?php // endif ?>
                                        </div> -->
                            </div>
                            <?php if( !is_user_logged_in() ): ?>
                            <div class="kl-card-recette-footer">
                                <div class="flex-shrink-0 me-2">
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17 17.8013C15.6471 17.8013 14.5464 18.902 14.5464 20.2549C14.5464 21.2317 15.1203 22.0768 15.9484 22.4713V26.2265H18.0515V22.4712C18.8797 22.0766 19.4536 21.2316 19.4536 20.2548C19.4536 18.902 18.3529 17.8013 17 17.8013Z"
                                            fill="#F4F4F4" />
                                        <path
                                            d="M24.1856 12.187V7.18557C24.1856 3.22341 20.9622 0 17 0C13.0379 0 9.81444 3.22341 9.81444 7.18557V12.187C6.83941 14.3921 4.90723 17.9281 4.90723 21.9072C4.90723 28.5752 10.332 34 17 34C23.668 34 29.0928 28.5752 29.0928 21.9072C29.0928 17.9281 27.1606 14.3921 24.1856 12.187ZM11.9175 7.18557C11.9175 4.38306 14.1975 2.10309 17 2.10309C19.8025 2.10309 22.0825 4.38306 22.0825 7.18557V10.9359C20.5364 10.2169 18.8144 9.81443 17 9.81443C15.1856 9.81443 13.4636 10.2169 11.9175 10.936V7.18557ZM17 31.8969C11.4917 31.8969 7.01032 27.4156 7.01032 21.9072C7.01032 16.3989 11.4917 11.9175 17 11.9175C22.5084 11.9175 26.9897 16.3989 26.9897 21.9072C26.9897 27.4156 22.5084 31.8969 17 31.8969Z"
                                            fill="#F4F4F4" />
                                    </svg>
                                </div>
                                <div>Inscrivez-vous pour accéder à cet outil</div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </a>
            </div>
            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?></p>
            <?php endif; ?>
    </section>
</section>

<?php get_footer(); ?>