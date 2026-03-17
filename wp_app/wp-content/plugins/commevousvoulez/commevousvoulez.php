<?php

/**
* Plugin Name: Comme Vous Voulez
* description: test test
* Version: 1.0.1
*/

/**
 * Affiche un lien vers l'édition de l'article si l'utilisateur est ADMIN
 */

function mde_afficher_lien_modif_si_admin($content) {
    // Est ce que l'utilisateur connecté est ADMIN ?
    // Si oui : afficher le lien vers l'édition de l'article
    if(current_user_can('edit_posts')) {
       $url = get_edit_post_link();
        

        $lien = '<p><a href="' . $url . '">Modifier cet article</a></p>';


        return $content . $lien;
    }


    return $content;
}

add_filter('the_content', 'mde_afficher_lien_modif_si_admin');