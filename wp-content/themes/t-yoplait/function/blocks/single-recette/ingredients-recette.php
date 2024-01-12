<section class="kl-section-single-recette-description">
        <div class="container kl-container-1140">
            <div class="text-center">
                <div class="kl-title-24-custom kl-color-red kl-title-24 text-uppercase">
                    <h6><?php the_field('type_de_la_recette');?></h6>
                </div>
                <div class="kl-title-section kl-custom kl-title-48 kl-svg-fleur-title kl-mb-xl-100 kl-mb-50 pt-0">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="text-md-start text-center kl-mb-30">
                <div class="kl-title-24-not-resp kl-fw-semi-bold kl-color-red">
                    <h6>Ingrédients</h6>
                </div>
            </div>
            <div class="row kl-gx-xl-125 kl-gx-lg-50 kl-gy-40 kl-mb-50 kl-equal-prt">
                <?php 
                if( have_rows('recette_ingredients') ):
                    while( have_rows('recette_ingredients') ): the_row();
                        if( get_sub_field('recette_nom_ingredient') ):
                ?>
                <div class="col-md-4 kl-col-lg-32-perc col-sm-6 kl-list-ingredients">
                    <div class="kl-text-20-not-resp kl-fw-medium kl-mb-30">
                        <h6 data-mh="data-title-ingredient"><?php the_sub_field('recette_nom_ingredient'); ?>:</h6>
                    </div>
                    <?php if( have_rows('recette_liste_des_besoins') ): ?>
                    <ul class="list-unstyled kl-list-ingredient mb-0">
                        <?php while( have_rows('recette_liste_des_besoins') ): the_row(); ?>
                        <li><strong class="kl-color-red"><?php the_sub_field('recette_qte_ingredient'); ?></strong> <?php the_sub_field('recette_matiere'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <?php 
                        endif;   
                    endwhile;
                endif; 
                ?>
            </div>
        </div>
        <div class="kl-single-recette-content-step">
            <span class="kl-decor-petal-right d-md-block d-none"><img src="<?php bloginfo('template_directory'); ?>/assets/img/single_recette/decor-petale.png" class="img-fluid" alt=""></span>
            <div class="container kl-container-1140">
                <div class="row align-items-center kl-row-step-single-recette kl-gx-xl-125 kl-gx-lg-50 kl-gy-50">
                    <div class="col-lg-7">
                        <?php 
                        if( have_rows('recette_liste_etapes') ):
                            $i=0;
                            while( have_rows('recette_liste_etapes') ): the_row();
                            $i++;
                        ?>
                        <div class="kl-mb-30">
                            <div class="kl-title-icon-step mb-3">
                                <i class="kl-icon"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon/icon-flowers.svg" class="img-fluid" alt=""></i> 
                                <span class="kl-title-24-not-resp kl-fw-semi-bold">Étape <?php echo $i; ?></span>
                            </div>
                            <div class="kl-ff-first kl-color-black-primary kl-fw-medium">
                                <?php the_sub_field('description_etape'); ?>
                            </div>
                        </div>
                        <?php  
                            endwhile;
                        endif; 
                        ?>
                    </div>
                    <div class="col-lg-5 d-lg-block d-none">
                        <img src="<?php the_field('recette_vignette_visualisation'); ?>" class="img-fluid kl-img-right" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>