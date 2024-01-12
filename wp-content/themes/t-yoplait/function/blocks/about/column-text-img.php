<section class="kl-section-about-territory overflow-hidden">
  <div class="container kl-container-1140">
    <div class="row align-items-center kl-gy-50 kl-gx-xl-125 kl-gx-md-50">
      <div class="col-md-6 kl-col-lg-54-perc order-md-1 order-2">
        <?php if (get_field('titre_h2_column_text_about')) : ?>
          <div class="kl-text-36 kl-color-black-primary kl-mb-md-50 kl-mb-30 kl-title-page-modif">
            <h2><?php the_field('titre_h2_column_text_about') ?></h2>
          </div>
        <?php endif ?>
        <?php if (get_field('description_column_text_about')) : ?>
          <div class="kl-fw-medium kl-color-black-secondary kl-desc-strong-500 kl-ff-first">
            <?php the_field('description_column_text_about') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="col-md-6 kl-col-lg-46-perc order-md-2 order-1">
        <div class="text-md-start text-center">
          <div class="kl-bloc-mask-img">
            <?php if (get_field('image_column_img_about')) : ?>
              <img src="<?php the_field('image_column_img_about') ?>" class="img-fluid kl-img-mask" alt="">
            <?php endif ?>
            <span class="kl-decor-bg">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/about/decor-mask-bg.png" class="img-fluid" alt="">
            </span>
            <span class="kl-decor-petal"><img src="<?php bloginfo('template_directory'); ?>/assets/img/about/petale.svg" class="img-fluid" alt=""></span>
            <span class="kl-decor-arc"><img src="<?php bloginfo('template_directory'); ?>/assets/img/about/arc-yellow.svg" class="img-fluid" alt=""></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>