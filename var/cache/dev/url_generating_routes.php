<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'proshop' => [[], ['_controller' => 'App\\Controller\\BaseController::proshop'], [], [['text', '/proshop']], [], [], []],
    'mentions' => [[], ['_controller' => 'App\\Controller\\BaseController::mentions'], [], [['text', '/mentions-legales']], [], [], []],
    'propos' => [[], ['_controller' => 'App\\Controller\\BaseController::propos'], [], [['text', '/a-propos']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\BaseController::index'], [], [['text', '/']], [], [], []],
];
