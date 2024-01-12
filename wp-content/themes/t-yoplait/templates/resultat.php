<?php
/*
    Template Name: Résultats
*/
get_header(); ?>
<?php
if (isset($_GET['recherche']) && $_GET['recherche'] != "") {
    $recherche = $_GET['recherche'];
    $articles  = new WP_Query(array('post_type' => array('post', 'gamme', 'produit' , 'page', 'recette'), 's' => $recherche, 'orderby' => 'date', 'posts_per_page' => '1000'));
}
?>
<div class="newspage wf-section">
    <div class="newspage-container">
        <div class="container">
            <div class="row">
                <div class="page-title">
                    <section class="search">
                        <div class="img-bg-search"></div>
                        <div class="container">
                            <div class="row">
                                <form id="email-form" name="email-form" action="<?php the_permalink(get_page_by_path('resultat')); ?>" method="get" data-name="Email Form"><label for="Recherche" class="search-label"></label>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-9 col-9"><input type="text" class="form-field input w-input" maxlength="256" name="recherche" data-name="Recherche" placeholder="<?php echo $recherche ?>" id="Recherche" required=""><span class="underline"></span></input>
                                        </div>
                                        <div class="col-md-4 col-sm-3 col-3"> <input type="submit" class="submit" value="Rechercher" data-wait="Please wait..." class="form-submit-btn w-button"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        <?php if ($recherche && $articles->have_posts()) : ?>
            <div class="articles-list">
                <div class="article-list_2items">
                    <div class="row">
                    <?php
                    $p = 1;
                    while ($articles->have_posts()) : $articles->the_post(); ?>
                        <?php if (get_post_type() == "post" || get_post_type() == "produit" || get_post_type() == "gamme" || get_post_type() == "recette") : ?>
                            <div class="col-lg-4 mt-5">
                                <a href="<?php the_permalink(); ?>/" class="news-list_item-content <?php echo ($p == 0) ? 'left' : ''; ?> w-inline-block">
                                    <div class="slt">
                                        <div class="news-list_item-thumbnail">
                                            <div class="article-item_thumbnail-wrapper img-fluid">
                                            <?php if (get_post_type() == "post" || get_post_type() == "produit" || get_post_type() == "gamme" || get_post_type() == "recette") : ?>
                                                    <?php
                                                    if (has_post_thumbnail()) {
                                                        the_post_thumbnail('large', array('class' => 'item-thumbnail_img img-fluid'));
                                                    }
                                                    ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="news-list_item-summary">
                                            <div class="search-item">
                                            <div class="article-list_item-date">
                                                <?php if (get_post_type() == "post") : ?>
                                                    <div class="item-date_txt">
                                                        <p>Publié le <?php echo get_the_date('d/m/Y'); ?></p>
                                                    </div>
                                                <?php elseif (get_post_type() == "post") : ?>
                                                    
                                                    <p><?php echo get_the_title(); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <h2 class="article-list_item-title">
                                                <?php the_title(); ?>
                                            </h2>
                                            <?php if (get_post_type() == "post") : ?>
                                                <div class="article-list_item-p">
                                                    <?php echo get_the_excerpt(); ?>
                                                </div>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php $p++;
                    endwhile; ?>
                    </div>
                </div>
            </div>

        <?php else : ?>

            <div class="no-result">
                <h4>
                    Pas de resultat.
                </h4>
            </div>

        <?php endif; ?>

        <div class="color-bloc">
            <div class="color-bloc_object"></div>
        </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>