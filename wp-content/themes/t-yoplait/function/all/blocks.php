<?php
function my_acf_init_block_types(){

    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(
            array(
                'name'              => 'hero',
                'title'             => 'Hero image',
                'description'       => '',
                'render_template'   => 'function/blocks/homepage/hero.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('hero_image', 'hero'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'bloc-gamme',
                'title'             => 'Gamme en 2 colonnes',
                'description'       => '',
                'render_template'   => 'function/blocks/homepage/bloc-gamme.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('bloc_gamme', 'bloc-gamme'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'bloc-engagement',
                'title'             => 'Bloc engagement',
                'description'       => '',
                'render_template'   => 'function/blocks/homepage/bloc-engagement.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('bloc_engagement', 'bloc-engagement'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'chiffre-cles',
                'title'             => 'Chiffre clés',
                'description'       => '',
                'render_template'   => 'function/blocks/homepage/chiffre-cles.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('chiffre_cles', 'chiffre-cles'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'gamme',
                'title'             => 'Gamme',
                'description'       => '',
                'render_template'   => 'function/blocks/homepage/gamme-list.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('gamme', 'gamme'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'a-propos',
                'title'             => 'A propos(accueil)',
                'description'       => '',
                'render_template'   => 'function/blocks/homepage/a-propos.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('a_propos', 'a-propos'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'titre-page',
                'title'             => 'Titre des pages',
                'description'       => '',
                'render_template'   => 'function/blocks/titre-page.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('titre_page', 'titre-page'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'fichiers-pdf',
                'title'             => 'Fichiers PDF',
                'description'       => '',
                'render_template'   => 'function/blocks/outils/fichiers-pdf.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('fichiers_pdf', 'fichiers-pdf'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'column-txt-img',
                'title'             => 'Bloc texte et image(about)',
                'description'       => '',
                'render_template'   => 'function/blocks/about/column-text-img.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('column_txt_img', 'column-txt-img'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'about-presentation',
                'title'             => 'Bloc présentation(about)',
                'description'       => '',
                'render_template'   => 'function/blocks/about/about-presentation.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('about_presentation', 'about-presentation'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'site-map',
                'title'             => 'Site map(about)',
                'description'       => '',
                'render_template'   => 'function/blocks/about/site-map.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('site_map', 'site-map'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'contact',
                'title'             => 'Contact',
                'description'       => '',
                'render_template'   => 'function/blocks/contact/contact.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('contact', 'contact'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'ingredients-recette',
                'title'             => 'Ingredients pour la recette',
                'description'       => '',
                'render_template'   => 'function/blocks/single-recette/ingredients-recette.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('ingredients-recette', 'ingredients-recette'),
            )
        );

    }

}
add_action('acf/init', 'my_acf_init_block_types');
