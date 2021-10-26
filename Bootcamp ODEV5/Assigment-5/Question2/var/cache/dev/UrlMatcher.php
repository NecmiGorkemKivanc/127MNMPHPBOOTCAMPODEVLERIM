<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/products/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, null, null, false, false, null]],
        '/task/new' => [[['_route' => 'app_task_new', '_controller' => 'App\\Controller\\TaskController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/product/([^/]++)(*:59)'
                .'|/lucky/number/([^/]++)(*:88)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null]],
        88 => [
            [['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], ['param'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
