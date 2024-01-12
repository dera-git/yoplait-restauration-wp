<?php 
    $ID_marque = '';

    if (isset($_SESSION['idMarque'])) {
        $ID_marque = $_SESSION['idMarque'];
    }

	$liaison = get_post_meta(get_the_ID(), 'liaison', true);

    if($liaison):
        $args = array(

            'post_type'      =>  'produit',    
            'posts_per_page' =>  -1,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'post__not_in'   => [get_the_ID()],
            "meta_query" => array(
                array(
                    "key" => "liaison",
                    'value' => $ID_marque,
                    'compare' => 'LIKE'
                )
                
            )
        );
    
        $custom_query = new WP_Query($args);
  
?>

    <?php if( $custom_query->have_posts() ): ?>
        <section class="kl-vieaw-other-product">
            <div class="container kl-container-1140">
                <?php if( get_field('titre_single_page', 'options') ): ?>
                    <div class="kl-title-28 kl-color-black-primary kl-svg-fleur-title lait kl-fw-semi-bold kl-mb-65 text-md-start text-center kl-title-page-h3">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/lait.png" class="img-fluid" alt="">
                        <?php the_field('titre_single_page', 'options') ?>
                    </div>
                <?php endif ?>
                <div class="row">
                    <?php while ( $custom_query->have_posts() ): $custom_query->the_post(); ?>
                        <div class="col-md-4 kl-lg-mb-64">
                            <a href="<?php the_permalink() ?>" class="kl-product-gamme">
                                <div class="kl-wapper-product-gamme">
                                    <div class="kl-content-product-gamme">
                                        <?php echo get_the_post_thumbnail( get_the_ID(), 'product-image', array('class' => 'img-fluid') ) ?>
                                    </div>
                                </div>
                                <div class="kl-text-product-gamme">
                                    <h4><?php echo get_the_title(  ) ?></h4>
                                    <?php if( get_field('valeur_formats') ): ?>
                                        <p><?php the_field('valeur_formats') ?></p>
                                    <?php endif ?>
                                </div>
                            </a>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
        </section>
    <?php endif ?>
<?php endif ?>