<?php

// CPT Produits
function codex_custom_init(){

    $labels_produits = array(
        'singular_name'      => __('Produit', 'yoplait_lvx'),
        'add_new_item'       => __('Ajouter une nouvelle produit', 'yoplait_lvx'),
        'new_item'           => __('Ajouter une produit', 'yoplait_lvx'),
        'view_item'          => __('Voir produit', 'yoplait_lvx'),
        'not_found'          => __('Aucune produit trouvée', 'yoplait_lvx'),
        'not_found_in_trash' => __('Aucune produit trouvée dans la corbeille', 'yoplait_lvx'),
        'all_items'          => __('Tous les produits', 'yoplait_lvx'),
        'insert_into_item'   => __('Insérer dans le produit', 'yoplait_lvx')
    );
    register_post_type('produit', [
		'label'         => __('Produits', 'yoplait_lvx'),
		'public'        => true,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-products',
		'supports'      => ['title', 'editor', 'thumbnail', 'revisions', 'excerpt'],
		'show_in_rest'  => true,
		'rewrite'       => ['slug' => 'produit'],
		'labels' => $labels_produits,		
	]);

    $labels_gamme = array(
        'singular_name'      => __('Gamme', 'yoplait_lvx'),
        'add_new_item'       => __('Ajouter une nouvelle gamme', 'yoplait_lvx'),
        'new_item'           => __('Ajouter une gamme', 'yoplait_lvx'),
        'view_item'          => __('Voir gamme', 'yoplait_lvx'),
        'not_found'          => __('Aucune gamme trouvée', 'yoplait_lvx'),
        'not_found_in_trash' => __('Aucune gamme trouvée dans la corbeille', 'yoplait_lvx'),
        'all_items'          => __('Tous les gammes', 'yoplait_lvx'),
        'insert_into_item'   => __('Insérer dans le gamme', 'yoplait_lvx')
    );
    register_post_type('gamme', [
		'label'         => __('Gammes', 'yoplait_lvx'),
		'public'        => true,
		'menu_position' => 5,
		'menu_icon'     => 'dashicons-star-filled',
		'supports'      => ['title', 'editor', 'thumbnail', 'revisions', 'excerpt'],
		'show_in_rest'  => true,
		'rewrite'       => ['slug' => 'gamme'],
		'labels' => $labels_gamme,		
	]);

    $labels_recette = array(
        'singular_name'      => __('Recette', 'yoplait_lvx'),
        'add_new_item'       => __('Ajouter une nouvelle recette', 'yoplait_lvx'),
        'new_item'           => __('Ajouter une recette', 'yoplait_lvx'),
        'view_item'          => __('Voir recette', 'yoplait_lvx'),
        'not_found'          => __('Aucune recette trouvée', 'yoplait_lvx'),
        'not_found_in_trash' => __('Aucune recette trouvée dans la corbeille', 'yoplait_lvx'),
        'all_items'          => __('Tous les recettes', 'yoplait_lvx'),
        'insert_into_item'   => __('Insérer dans le recette', 'yoplait_lvx')
    );
    register_post_type('recette', [
		'label'         => __('Recettes', 'yoplait_lvx'),
		'public'        => true,
		'menu_position' => 5,
        'has_archive' => true,
		'menu_icon'     => 'dashicons-food',
		'supports'      => ['title', 'editor', 'thumbnail', 'revisions', 'excerpt'],
		'show_in_rest'  => true,
		'rewrite'       => ['slug' => 'recette'],
        'taxonomies'    => ['tax_ingredient', 'tax_temps', 'tax_modele'],
		'labels' => $labels_recette,		
	]);

    $labels_marque = array(
        'singular_name'      => __('Marque', 'yoplait_lvx'),
        'add_new_item'       => __('Ajouter une nouvelle marque', 'yoplait_lvx'),
        'new_item'           => __('Ajouter une marque', 'yoplait_lvx'),
        'view_item'          => __('Voir marque', 'yoplait_lvx'),
        'not_found'          => __('Aucune marque trouvée', 'yoplait_lvx'),
        'not_found_in_trash' => __('Aucune marque trouvée dans la corbeille', 'yoplait_lvx'),
        'all_items'          => __('Toutes les marques', 'yoplait_lvx'),
        'insert_into_item'   => __('Insérer dans la marque', 'yoplait_lvx')
    );
    register_post_type('marque', [
		'label'         => __('Marques', 'yoplait_lvx'),
		'public'        => true,
		'menu_position' => 5,
        'has_archive' => true,
		'menu_icon'     => 'dashicons-admin-page',
		'supports'      => ['title', 'editor', 'thumbnail', 'revisions', 'excerpt'],
		'show_in_rest'  => true,
		'rewrite'       => ['slug' => 'marque'],
		'labels' => $labels_marque,		
	]);
 
	tax_init();
}
add_action('init', 'codex_custom_init');