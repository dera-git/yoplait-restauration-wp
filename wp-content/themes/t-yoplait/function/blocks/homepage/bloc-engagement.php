<section class="kl-sect-cooperative">
    <div class="container kl-container-1112">
        <div class="row">
            <div class="col-md-6">
                <div class="kl-title-cooperative">
                    <?php if( get_field('titre_engagement') ): ?>
                        <div class="kl-second-title kl-color-green-secondary kl-mb-15 kl-md-mb-34">
                            <h2><?php the_field('titre_engagement') ?></h2>
                        </div>
                    <?php endif ?>
                    <?php if( get_field('sous_titre_engagement') ): ?>
                        <div class="kl-second-title kl-color-black-tertiary">
                            <h3><?php the_field('sous_titre_engagement') ?></h3>
                        </div>
                    <?php endif ?>
                </div>
                <div class="kl-content-text kl-strong-green-secondary">
                    <?php if( get_field('description_engagement') ): ?>
                        <?php the_field('description_engagement') ?>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="kl-right-cooperation">
                    <div class="kl-content-img-cooperation">
                        <?php if( get_field('image_engagement') ): ?>
                            <img src="<?php the_field('image_engagement') ?>" alt="" class="img-fluid kl-img-cooperation">
                        <?php endif ?>
                        <svg class="kl-svg-cooperation" width="469" height="466" viewBox="0 0 469 466" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M250.595 47.2389C310.79 2.20463 368.974 -1.64384 390.541 2.06121C504.316 43.6535 467.24 169.506 445.066 242.292C422.893 315.078 346.558 449.894 214.972 464.237C83.3853 478.579 -28.9357 379.259 6.68717 283.526C42.31 187.792 175.35 103.532 250.595 47.2389Z" fill="#6DBFED"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>