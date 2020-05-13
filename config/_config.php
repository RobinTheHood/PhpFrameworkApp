<?php
namespace RobinTheHood\PhpFramework;

use RobinTheHood\PhpFramework\App;

App::setConfig([
    'app' => [
        'publicPath' => App::getRootPath() . '/public/',
        'modelsPath' => App::getRootPath() . '/app/Models/',
        'repositoriesPath' => App::getRootPath() . '/app/Repositories/'
    ],

    'database' => [
        'host' => 'localhost',
        'user' => '',
        'password' => '',
        'database' => ''
    ],

    'migration' => [
        'migrationsPath' => App::getRootPath() . '/database/migrations/'
    ],

    'template' => [
        'index' => 'Default/Index.html.twig',
        'show' => 'Default/Show.html.twig',
        'new' => 'Default/NewEdit.html.twig',
        'edit' => 'Default/NewEdit.html.twig',
        'multiEdit' => 'Default/MultiEdit.html.twig',
        'multiEditForm' => 'Default/MultiEditForm.html.twig',
        'flash' => 'Default/Flash.haml.twig'
    ],

    'twig' => [
        'templatesPath' => App::getRootPath() . '/app/Templates/Twig',
        'cachePath' => App::getRootPath() . '/cache/Twig/',
        'debug' => 'true'
    ]
]);
