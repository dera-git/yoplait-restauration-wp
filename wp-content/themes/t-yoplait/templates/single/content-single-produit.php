<?php
  session_start();
  $echo_url_gamme = '';
  $echo_title_gamme = '';
  $echo_title_marque = '';
  $echo_url_marque = '';
  
  if (isset($_SESSION['urlGamme'])) {
    $echo_url_gamme = $_SESSION['urlGamme'];
  }
  if (isset($_SESSION['TitleGamme'])) {
    $echo_title_gamme = $_SESSION['TitleGamme'];
  }
  if (isset($_SESSION['titleMarque'])) {
    $echo_title_marque = $_SESSION['titleMarque'];
  }
  if (isset($_SESSION['urlMarque'])) {
    $echo_url_marque = $_SESSION['urlMarque'];
  }

?>

<section class="kl-section-details-produit">

  <div class="kl-sect-gamme-panier kl-bg-transparent kl-decor-none kl-lg-mb-28">
    <div class="container kl-container-1140 position-relative">
      <div class="kl-content-link-back">
        <a href="<?= $echo_url_gamme ?>" class="kl-link-back"><img src="<?php bloginfo('template_directory'); ?>/assets/img/gamme_pannier/arrowLeft.svg" />
            Gamme <?php echo $echo_title_gamme ?>
        </a>
        <span class="d-inline-block mx-1"> - </span>
        <a href="<?= $echo_url_marque ?>" class="kl-link-back">
            <?php echo $echo_title_marque ?>
        </a>
      </div>
    </div>
  </div>

  <div class="container kl-container-1140">
    <div class="row">
      <div class="col-lg-6 kl-max-w-lg-422 kl-max-w-xl-496 kl-lg-mb-60">
        <div class="kl-title-section kl-title-48 d-lg-none kl-color-black-primary text-center kl-lg-mb-64 kl-title-page-modif">
          <?php if (get_field('titre_product_gamme')) : ?>
            <h1><?php the_field('titre_product_gamme'); ?></h1>
          <?php else : ?>
            <h1><?php the_title() ?></h1>
          <?php endif ?>
        </div>
        <div class="kl-wrapper-img-product">
          <div class="kl-content-img-product">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid')) ?>
          </div>
        </div>
      </div>
      <div class="col-lg">
        <div class="kl-title-36 d-none d-lg-block kl-color-black-primary kl-svg-fleur-title mb-4 pb-3 kl-title-page-modif">
          <?php if (get_field('titre_product_gamme')) : ?>
            <h1><?php the_field('titre_product_gamme'); ?></h1>
          <?php else : ?>
            <h1><?php the_title() ?></h1>
          <?php endif ?>
        </div>

        <?php get_template_part("templates/produits/composant-produit"); ?>

      </div>
    </div>
  </div>
</section>

<?php get_template_part("templates/produits/produit-gamme"); ?>