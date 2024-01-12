<?php 
    $title_tab01 = get_field('titre_zoom', 'option');
    $title_tab02 = get_field('titre_formats', 'option');
    $title_tab03 = get_field('titre_valeurs', 'option');
    $title_tab04 = get_field('titre_varietes', 'option');
?>
<ul class="nav nav-pills d-none d-md-flex kl-mb-40 kl-nav-pills-product" id="pills-tab" role="tablist">
    <?php if($title_tab01): ?>
        <li class="nav-item" role="presentation">
            <button class="nav-link kl-btn-tabs-product active" id="id-tabs-01" data-bs-toggle="pill" data-bs-target="#id-content-01"
                type="button" role="tab" aria-controls="id-content-01" aria-selected="true">
                <span><?= $title_tab01 ?></span>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/product/icon-zoom.svg" class="img-fluid" alt="">
            </button>
        </li>
    <?php endif ?>
    <?php if($title_tab02): ?>
        <li class="nav-item" role="presentation">
            <button class="nav-link kl-btn-tabs-product" id="id-tabs-02" data-bs-toggle="pill" data-bs-target="#id-content-02"
                type="button" role="tab" aria-controls="id-content-02" aria-selected="true">
                <span><?= $title_tab02 ?></span>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/product/icon-formats.svg" class="img-fluid" alt="">
            </button>
        </li>
    <?php endif ?>
    <?php if($title_tab03): ?>
        <li class="nav-item" role="presentation">
            <button class="nav-link kl-btn-tabs-product" id="id-tabs-03" data-bs-toggle="pill" data-bs-target="#id-content-03"
                type="button" role="tab" aria-controls="id-content-03" aria-selected="true">
                <span><?= $title_tab03 ?></span>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/product/icon-valeur.svg" class="img-fluid" alt="">
            </button>
        </li>
    <?php endif ?>
    <?php if($title_tab04): ?>
        <li class="nav-item" role="presentation">
            <button class="nav-link kl-btn-tabs-product" id="id-tabs-04" data-bs-toggle="pill" data-bs-target="#id-content-04"
                type="button" role="tab" aria-controls="id-content-04" aria-selected="true">
                <span><?= $title_tab04 ?></span>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/product/icon-variete.svg" class="img-fluid" alt="">
            </button>
        </li>
    <?php endif ?>
</ul>
<div class="tab-content accordion kl-tab-content-product" id="pills-tabContent">
    <div class="tab-pane accordion-item fade show active" id="id-content-01" role="tabpanel" aria-labelledby="id-tabs-01">
        <div class="accordion-header d-md-none" id="headingOne">
            <button class="accordion-button kl-btn-tabs-product" type="button" data-bs-toggle="collapse" data-bs-target="#id-collapseOne" aria-expanded="true" aria-controls="id-collapseOne">
                <span><?= $title_tab01 ?></span>
                <div class="kl-icon-tabs">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/product/icon-zoom.svg" class="img-fluid" alt="">
                </div>
            </button>
        </div>
        <div id="id-collapseOne" class="accordion-collapse collapse show d-lg-block" aria-labelledby="headingOne" data-bs-parent="#pills-tabContent">
            <div class="kl-accordion-body">
                <div class="kl-ff-first kl-fw-medium kl-lh-1_2 kl-strong-red kl-strong-500">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade accordion-item" id="id-content-02" role="tabpanel" aria-labelledby="id-tabs-02">
        <div class="accordion-header d-md-none" id="headingTwo">
            <button class="accordion-button kl-btn-tabs-product" type="button" data-bs-toggle="collapse" data-bs-target="#id-collapseTwo" aria-expanded="false" aria-controls="id-collapseTwo">
                <span><?= $title_tab02 ?></span>
                <div class="kl-icon-tabs">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/product/icon-formats.svg" class="img-fluid" alt="">
                </div>
            </button>
        </div>
        <div id="id-collapseTwo" class="accordion-collapse collapse d-md-block" aria-labelledby="headingTwo" data-bs-parent="#pills-tabContent">
            <div class="kl-accordion-body">        
                <?php if( get_field('titre_formats') ): ?>
                    <div class="kl-mb-10 kl-fw-semi-bold">
                        <h6><?php the_field('titre_formats') ?></h6>
                    </div>
                    <?php if( get_field('valeur_formats') ): ?>
                        <div class="kl-ff-first">
                            <?php the_field('valeur_formats') ?>
                        </div>
                    <?php endif ?>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="tab-pane fade accordion-item" id="id-content-03" role="tabpanel" aria-labelledby="id-tabs-03">
        <div class="accordion-header d-md-none" id="headingThree">
            <button class="accordion-button kl-btn-tabs-product" type="button" data-bs-toggle="collapse" data-bs-target="#id-collapseThree" aria-expanded="false" aria-controls="id-collapseThree">
                <span><?= $title_tab03 ?></span>
                <div class="kl-icon-tabs">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/product/icon-valeur.svg" class="img-fluid" alt="">
                </div>
            </button>
        </div>
        <div id="id-collapseThree" class="accordion-collapse collapse d-md-block" aria-labelledby="headingThree" data-bs-parent="#pills-tabContent">
            <div class="kl-accordion-body">
                <?php if( get_field('titre_list_ingredients') ): ?>
                    <div class="kl-mb-10 kl-fw-semi-bold">
                        <h6><?php the_field('titre_list_ingredients') ?></h6>
                    </div>
                    <div class="kl-mb-40">
                        <?php if( get_field('list_ingredients') ): ?>
                            <div class="kl-lh-1_25 kl-ff-first">
                                <?php the_field('list_ingredients') ?>
                            </div>
                        <?php endif ?>
                    </div>
                <?php endif ?>
                <?php if( get_field('titre_allergenes') ): ?>
                    <div class="kl-mb-10 kl-fw-semi-bold">
                        <h6><?php the_field('titre_allergenes') ?></h6>
                    </div>
                    <div class="kl-mb-40">
                        <?php if( get_field('produits_allergenes') ): ?>
                            <div class="kl-lh-1_25">
                                <?php the_field('produits_allergenes') ?>
                            </div>
                        <?php endif ?>
                    </div>
                <?php endif ?>
                <?php if( get_field('titre_valeur_nutritionelle') ): ?>
                    <div class="kl-mb-10 kl-fw-semi-bold">
                        <h6><?php the_field('titre_valeur_nutritionelle') ?></h6>
                    </div>
                    <div class="kl-ff-first">
                        <div class="kl-lh-1_25">
                            <table class="table">
                            <?php if( get_field('titre_de_valeur_nutritionelle') ): ?>
                                <thead>
                                    <tr>
                                        <th colspan="2" class="kl-fw-semi-bold"><?php the_field('titre_de_valeur_nutritionelle') ?></th>
                                    </tr>
                                </thead>
                            <?php endif ?>
                            <tbody>
                                <?php if( have_rows('liste_de_valeur_nutritionelle') ): ?>
                                    <?php while( have_rows('liste_de_valeur_nutritionelle') ): the_row() ?>
                                        <?php if( get_sub_field('nom_valeur_nutritionelle') ): ?>
                                            <tr>
                                                <td><?php the_sub_field('nom_valeur_nutritionelle') ?></td>
                                                <td><span class="kl-color-red"><?php the_sub_field('valeur_nutritionelle') ?><span></td>
                                            </tr>
                                        <?php endif ?>
                                    <?php endwhile ?>
                                <?php endif ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="tab-pane fade accordion-item" id="id-content-04" role="tabpanel" aria-labelledby="id-tabs-04">
        <div class="accordion-header d-md-none" id="headingForth">
            <button class="accordion-button kl-btn-tabs-product" type="button" data-bs-toggle="collapse" data-bs-target="#id-collapseForth" aria-expanded="false" aria-controls="id-collapseForth">
                <span><?= $title_tab04 ?></span>
                <div class="kl-icon-tabs">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/product/icon-variete.svg" class="img-fluid" alt="">
                </div>
            </button>
        </div>
        <div id="id-collapseForth" class="accordion-collapse collapse d-md-block" aria-labelledby="headingForth" data-bs-parent="#pills-tabContent">
            <div class="kl-accordion-body">
                <?php if( get_field('titre_variete') ): ?>
                    <div class="kl-mb-30 kl-fw-semi-bold">
                        <h6><?php the_field('titre_variete') ?></h6>
                    </div>
                <?php endif ?>
                <?php if(have_rows('parfums')): ?>
                    <div class="row">
                        <?php while(have_rows('parfums')): the_row() ?>
                            <div class="col-6 col-md-3">
                                <?php if( get_sub_field('nom_du_parfum') ): ?>
                                    <div class="mb-2">
                                        <?php the_sub_field('nom_du_parfum') ?>
                                    </div>
                                <?php endif ?>
                                <?php if( get_sub_field('img_parfum') ): ?>
                                    <div>
                                        <img src="<?php the_sub_field('img_parfum') ?>" class="img-fluid" alt="">
                                    </div>
                                <?php endif ?>
                            </div>
                        <?php endwhile ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>