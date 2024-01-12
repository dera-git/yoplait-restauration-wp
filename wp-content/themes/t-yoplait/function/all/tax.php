<?php

$custom_taxonomy = array(
    'ingrédient' => 'Ingrédient',
    'modele' => 'Modele',
  );

function tax_init(){
    global $custom_taxonomy;
    foreach ( $custom_taxonomy as $key => $custom_tax ) :
        $labels = array(
            'singular_name' => __($custom_tax, ' yoplait_lvx'),
            'all_items' => __('Tous', 'yoplait_lvx'),
            'edit_item' => __('Modifier', 'yoplait_lvx'),
            'view_item' => __('Voir', 'yoplait_lvx'),
            'update_item' => __('Mettre à jour', 'yoplait_lvx'),
            'add_new_item' => __('Ajouter une nouvelle ' . $custom_tax, 'yoplait_lvx'),
            'new_item_name' => __('Nouveau nom de ' . $custom_tax, 'yoplait_lvx'),
            'search_items' => __('Rechercher', 'yoplait_lvx'),
            'parent_item' => __($custom_tax . ' parent', 'yoplait_lvx'),
            'parent_item_colon' => __($custom_tax . ' parent:', 'yoplait_lvx'),
            'not_found' => __('Pas trouvé', 'yoplait_lvx'),
        );

        if( $key == 'ingrédient' ):

            register_taxonomy('tax_ingredient', ['recette'], [
                'label' => __('Ingrédients', 'yoplait_lvx'),
                'hierarchical' => false,
                'rewrite' => ['slug' => 'ingredient'],
                'show_admin_column' => true,
                'show_in_rest' => true,
                'labels' => $labels,
            ]);

        elseif ($key == 'modele') :    
            register_taxonomy('tax_modele', ['recette'], [
                'label' => __('Modeles', 'yoplait_lvx'),
                'hierarchical' => true,
                'rewrite' => ['slug' => 'modeles'],
                'show_admin_column' => true,
                'show_in_rest' => true,
                'labels' => $labels,
            ]);
        endif;
    endforeach;

	register_taxonomy_for_object_type('tax_ingredient', 'recette');
	register_taxonomy_for_object_type('tax_modele', 'recette');
 
}