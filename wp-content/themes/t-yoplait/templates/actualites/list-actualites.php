<?php 
    $args = array(
        'post_type'=> 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'order' => 'DESC'
    );
    $loop = new WP_Query( $args );
?>

<section class="kl-section-yop-actus">
    <div class="container kl-container-1140">
        <?php if( $loop->have_posts() ): ?>
            <div class="row kl-gx-lg-30 kl-gy-30">
                <?php while( $loop->have_posts() ): $loop->the_post() ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="<?php the_permalink() ?>" class="kl-card-actus h-100 kl-bg-white mx-auto kl-max-w-331 kl-color-black-fifth">
                            <div class="kl-card-header">
                                <?php the_post_thumbnail( 'post-image', array('class' => 'img-fluid kl-img-header') ) ?>
                            </div>
                            <div class="kl-card-body">
                                <h6 class="kl-date kl-color-red"><?php echo get_the_date('d F Y') ?></h6>
                                <div class="kl-description">
                                    <?php the_title() ?>
                                </div>
                                <div class="kl-arrow-right mt-auto text-end">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/arrow-right-red.svg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile ?>
            </div>
        <?php endif ?>
        <?php wp_reset_postdata() ?>
    </div>
</section>