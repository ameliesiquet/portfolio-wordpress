<?php

// Désactiver l'éditeur de texte Gutenberg de Wordpress :
add_filter('use_block_editor_for_post', '__return_false');

// Enregistrer des menus de navigation :
register_nav_menu('main', 'Navigation principale, en-tête du site');
register_nav_menu('footer', 'Navigation de pied de page');

// Enregistrer un "type de contenu" personnalisé
register_post_type('project', [
    'label' => 'Projects',
    'description' => 'My projects displayed on the website',
    'public' => true,
    'menu_position' => 21,
    'menu_icon' => 'dashicons-portfolio',
    'has_archive' => true,
    'rewrite' => [
        'slug' => 'projects',
    ],
    'supports' => ['title', 'editor', 'thumbnail'],
]);
register_post_type('skill', [
    'label' => 'Skills',
    'description' => 'Skills displayed on the website',
    'public' => true,
    'menu_position' => 22,
    'menu_icon' => 'dashicons-html',
    'has_archive' => true,
    'rewrite' => [
        'slug' => 'skills',
    ],
    'supports' => ['title', 'editor', 'thumbnail'],
]);
register_post_type('formation', [
    'label' => 'Formation',
    'description' => 'My formation displayed on the website',
    'public' => true,
    'menu_position' => 23,
    'menu_icon' => 'dashicons-book',
    'has_archive' => true,
    'rewrite' => [
        'slug' => 'formation',
    ],
    'supports' => ['title', 'editor', 'thumbnail'],
]);
register_post_type('navigation-list', [
    'label' => 'Navigation List',
    'description' => 'My formation displayed on the website',
    'public' => true,
    'menu_position' => 24,
    'menu_icon' => 'dashicons-book',
    'has_archive' => true,
    'rewrite' => [
        'slug' => 'navigation',
    ],
    'supports' => ['title', 'editor', 'thumbnail'],
]);


// Fonctions propres au thème :
function dw_asset(string $file): string
{
    return get_template_directory_uri() . '/public/' . $file;
}

function portfolio_enqueue_styles(): void
{
    wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/public/css/site.css');
}

add_action('wp_enqueue_scripts', 'portfolio_enqueue_styles');


// 2. Retrouver les éléments d'un menu pour une location donnée
function dw_get_navigation_links(string $location): array
{
    // Pour $location, retrouver le menu.
    $locations = get_nav_menu_locations();
    $menuId = $locations[$location] ?? null;

    // Au cas où il n'y a pas de menu assignés à $location, renvoyer un tableau de liens vide.
    if (is_null($menuId)) {
        return [];
    }

    // Pour ce menu, récupérer les liens
    $items = wp_get_nav_menu_items($menuId);

    // Formater les liens en objets pour ne garder que "URL" et "label" comme propriétés
    foreach ($items as $key => $item) {
        $items[$key] = new stdClass();
        $items[$key]->url = $item->url;
        $items[$key]->label = $item->title;
    }

    // Retourner le tableau de liens formatés
    return $items;
}

// Ajout d'image sous format SVG et WEBP
add_filter('upload_mimes', 'capitaine_mime_types');
add_filter('wp_check_filetype_and_ext', 'capitaine_file_types', 10, 4);

// Autoriser l'import des fichiers du type SVG et WEBP
function capitaine_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

// Contrôle de l'import d'un WEBP
function capitaine_file_types($types, $file, $filename, $mimes)
{
    if (str_contains($filename, '.webp')) {
        $types['ext'] = 'webp';
        $types['type'] = 'image/webp';
    }
    return $types;
}

function dw_is_active(string $path): string
{
    return wp_get_canonical_url() === $path ? 'active' : '';
}



