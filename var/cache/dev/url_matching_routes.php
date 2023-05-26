<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/catalogue' => [[['_route' => 'catalogue', '_controller' => 'App\\Controller\\BaseController::catalogue'], null, null, null, false, false, null]],
        '/mentions-legales' => [[['_route' => 'mentions', '_controller' => 'App\\Controller\\BaseController::mentions'], null, null, null, false, false, null]],
        '/a-propos' => [[['_route' => 'propos', '_controller' => 'App\\Controller\\BaseController::propos'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\BaseController::test'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/ajoutproduit' => [[['_route' => 'ajoutproduit', '_controller' => 'App\\Controller\\ProduitController::AjoutProduits'], null, null, null, false, false, null]],
        '/proshop' => [[['_route' => 'proshop', '_controller' => 'App\\Controller\\ProduitController::proshop'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/favoris/(?'
                    .'|ajouter/([^/]++)(*:35)'
                    .'|supprimer/([^/]++)(*:60)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:96)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'favoris_ajouter', '_controller' => 'App\\Controller\\FavorisController::ajouterAuxFavoris'], ['id'], null, null, false, true, null]],
        60 => [[['_route' => 'favoris_supprimer', '_controller' => 'App\\Controller\\FavorisController::supprimerDesFavoris'], ['id'], null, null, false, true, null]],
        96 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
