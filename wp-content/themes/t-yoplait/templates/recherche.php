<?php
    /*
        Template Name: Recherche
    */
?>

<?php get_header(); ?>
    
<div class="container">
    <div class="row">
        <form id="email-form" name="email-form" action="<?php the_permalink(get_page_by_path('resultat')); ?>" method="get" data-name="Email Form"><label for="Recherche" class="search-label"></label>
            <div class="row">
                <div class="col-md-8 col-sm-9 col-9"><input type="text" class="form-field input w-input" maxlength="256" name="recherche" data-name="Recherche" placeholder="Que recherchez-vous ?" id="Recherche" required=""><span class="underline"></span></input>
                </div>
                <div class="col-md-4 col-sm-3 col-3"> <input type="submit" class="submit" value="Rechercher" data-wait="Please wait..." class="form-submit-btn w-button"></div>
            </div>
        </form>
    </div>
</div>
    
<?php get_footer(); ?>