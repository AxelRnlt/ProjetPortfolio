<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_back_admin', '_controller' => 'App\\Controller\\Back\\AdminController::menu'], null, null, null, false, false, null]],
        '/admin/project' => [[['_route' => 'app_back_admin_project', '_controller' => 'App\\Controller\\Back\\ProjectController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/project/new' => [[['_route' => 'app_back_admin_project_new', '_controller' => 'App\\Controller\\Back\\ProjectController::newProject'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_back_login', '_controller' => 'App\\Controller\\Back\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Back\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/skill' => [[['_route' => 'app_back_admin_skill', '_controller' => 'App\\Controller\\Back\\SkillController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/skill/create' => [[['_route' => 'app_back_admin_skill_create', '_controller' => 'App\\Controller\\Back\\SkillController::newSkill'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_front_home_home', '_controller' => 'App\\Controller\\Front\\HomeController::home'], null, null, null, false, false, null]],
        '/projets' => [[['_route' => 'app_front_project_projects', '_controller' => 'App\\Controller\\Front\\ProjectController::projects'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|project/([^/]++)(?'
                        .'|(*:198)'
                        .'|/(?'
                            .'|edit(*:214)'
                            .'|delete(?'
                                .'|(*:231)'
                                .'|Image(*:244)'
                            .')'
                        .')'
                    .')'
                    .'|skill/([^/]++)(?'
                        .'|(*:272)'
                        .'|/(?'
                            .'|delete(*:290)'
                            .'|edit(*:302)'
                        .')'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'app_back_admin_project_print', '_controller' => 'App\\Controller\\Back\\ProjectController::printProject'], ['id'], ['GET' => 0], null, false, true, null]],
        214 => [[['_route' => 'app_back_admin_project_edit', '_controller' => 'App\\Controller\\Back\\ProjectController::editProject'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        231 => [[['_route' => 'app_back_admin_project_delete', '_controller' => 'App\\Controller\\Back\\ProjectController::deleteProject'], ['id'], ['GET' => 0], null, false, false, null]],
        244 => [[['_route' => 'app_back_admin_project_deleteImage', '_controller' => 'App\\Controller\\Back\\ProjectController::deleteImage'], ['id'], ['GET' => 0], null, true, false, null]],
        272 => [[['_route' => 'app_back_admin_skill_print', '_controller' => 'App\\Controller\\Back\\SkillController::printSkill'], ['id'], ['GET' => 0], null, false, true, null]],
        290 => [[['_route' => 'app_back_admin_skill_delete', '_controller' => 'App\\Controller\\Back\\SkillController::deleteSkill'], ['id'], ['GET' => 0], null, false, false, null]],
        302 => [
            [['_route' => 'app_back_admin_skill_edit', '_controller' => 'App\\Controller\\Back\\SkillController::editSkill'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
