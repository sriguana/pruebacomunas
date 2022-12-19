<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/localidad' => [[['_route' => 'app_api_localidad', '_controller' => 'App\\Controller\\ApiController::index'], null, ['POST' => 0], null, false, false, null]],
        '/api/localidad/all' => [[['_route' => 'app_api_localidad_all', '_controller' => 'App\\Controller\\ApiController::all'], null, ['GET' => 0], null, false, false, null]],
        '/commune' => [[['_route' => 'app_commune_index', '_controller' => 'App\\Controller\\CommuneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commune/new' => [[['_route' => 'app_commune_new', '_controller' => 'App\\Controller\\CommuneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/main' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/api/localidad/([^/]++)(*:34)'
                .'|/commune/([^/]++)(?'
                    .'|(*:61)'
                    .'|/edit(*:73)'
                    .'|(*:80)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:116)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_api_localidad_ids', '_controller' => 'App\\Controller\\ApiController::add'], ['ids'], ['POST' => 0], null, true, true, null]],
        61 => [[['_route' => 'app_commune_show', '_controller' => 'App\\Controller\\CommuneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        73 => [[['_route' => 'app_commune_edit', '_controller' => 'App\\Controller\\CommuneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        80 => [[['_route' => 'app_commune_delete', '_controller' => 'App\\Controller\\CommuneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        116 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
