<?php 
    session_start();

    $url_marque = get_the_permalink();
    $title_marque = get_the_title();
    $id_marque = get_the_ID();

    $_SESSION['urlMarque'] = $url_marque;
    $_SESSION['titleMarque'] = $title_marque;
    $_SESSION['idMarque'] = $id_marque;

    $echo_url_gamme = '';
    $echo_title_gamme = '';

    if (isset($_SESSION['urlGamme'])) {
        $echo_url_gamme = $_SESSION['urlGamme'];
    }
    if (isset($_SESSION['TitleGamme'])) {
        $echo_title_gamme = $_SESSION['TitleGamme'];
    }

    $product_gamme = get_posts(array(
        'post_type' => 'produit',
        'posts_per_page' =>  -1,
        'meta_query' => array(
            array(
                'key' => 'liaison',
                'value' => '"' . get_the_ID() . '"',
                'compare' => 'LIKE'
            )
        )
    ));
?>
<section class="kl-sect-gamme-panier">
    <div class="container kl-container-1140 position-relative">
        <!-- <div class="kl-content-link-back">
            <a href="<?php echo get_permalink(151) ?>" class="kl-link-back"><img src="<?php bloginfo('template_directory'); ?>/assets/img/gamme_pannier/arrowLeft.svg" />
                <?php the_title() ?>
            </a>
        </div> -->
        <div class="kl-title-section kl-title-40 kl-svg-fleur-title kl-mb-8">
            <h1><?php the_title() ?></h1>
        </div>
        <div class="kl-content-text text-center kl-desc-page-color">
            <?php if(get_the_excerpt()): ?>
                <p>
                    <?php echo get_the_excerpt(); ?>
                </p>
            <?php else: ?>
                <p>Découvrez tous les produits de <strong>notre gamme <?php the_title() ?></strong> , vous allez vous régaler !</p>
            <?php endif; ?>
        </div>
        <div class="kl-flower-gamme-panier">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/flower.svg" alt="" class="img-fluid">
        </div>

        <div class="kl-sect-gamme-panier kl-bg-transparent kl-decor-none kl-navigation-in-gamme">
            <div class="container kl-container-1140 position-relative">
                <div class="kl-content-link-back">
                    <a href="<?php echo get_permalink(151); ?>" class="kl-link-back"><img src="<?php bloginfo('template_directory'); ?>/assets/img/gamme_pannier/arrowLeft.svg" />
                        <?php echo get_the_title( 151 ) ?>
                    </a>
                    <span class="d-inline-block mx-1"> - </span>
                    <a href="<?= $echo_url_gamme ?>" class="kl-link-back">
                        <?php echo $echo_title_gamme ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kl-sect-list-product">
    <div class="container kl-container-1140">
        <?php $i = 1;
            if( $product_gamme ): ?>
            <div class="row">
            <?php foreach( $product_gamme as $product ): ?>
                <?php 
                    $class_decor = $i == 1 ? 'kl-decor-flower-1' : '';
                    $class_order = $i % 2 == 0 ? 'order-md-2 order-1' : '';
                    $class_order2 = $i % 2 == 0 ? 'order-md-1 order-2' : '';
                ?>
                <div class="col-md-4">
                    <div class="kl-wrapper-item">
                        <?php
                            $post_id = get_the_ID(); // Get the current post ID
                            if ( $post_id == 573 ) {
                              $color_class = 'kl-right-product-skyr'; // Replace 'your-custom-class' with the desired class name
                            }else{
                                $color_class = '';
                            }
                        ?> 
                        <div class="kl-right-product <?php echo $color_class; ?>">
                            <div class="kl-content-img-product">
                                <?php if( is_user_logged_in() ): ?>
                                    <a href="<?php the_permalink( $product->ID ); ?>">
                                <?php else: ?>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#id-moncompte">
                                <?php endif ?>
                                <?php echo get_the_post_thumbnail( $product->ID, 'full', array('class' => 'img-fluid') ); ?>
                                    </a>
                            </div>
                        </div>
                        <div class="kl-content-btn-product d-md-nones d-flexs kl-btn-red-v2">
                            <?php if( is_user_logged_in() ): ?>
                                <a href="<?php the_permalink( $product->ID ); ?>" class="kl-btn-default kl-btn-red" data-mh="titre-produit">
                            <?php else: ?>
                                <a href="#" class="kl-btn-default kl-btn-red" data-bs-toggle="modal" data-bs-target="#id-moncompte" data-mh="titre-produit">
                            <?php endif ?>
                                <svg class="kl-svg-btn kl-svg-btn-white" width="75" height="108" viewBox="0 0 75 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.1557 81.8273C23.1567 25.8072 57.7146 8.70748 72.4934 8.49767C75.2714 5.6652 76.2937 0.000244141 58.1591 0.000244141C40.0245 0.000244141 15.3379 45.9493 10.8225 56.9645C-1.4928 87.0069 -3.38465 140.171 10.1557 81.8273Z" fill="white"/>
                                </svg>
                                <?php echo $product->post_title; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php $i++ ?>
            <?php endforeach ?>
        <?php endif ?>
        </div>
        <?php  wp_reset_postdata(); ?>
    </div>
</section>