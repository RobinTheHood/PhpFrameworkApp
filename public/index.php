<?php

require '../vendor/autoload.php';

use RobinTheHood\PhpFramework\App;
use RobinTheHood\ExceptionMonitor\ExceptionMonitor;

ExceptionMonitor::register([
    'ip' => '127.0.0.1',
    'domain' => 'phpframeworkapp.localhost',
    'mail' => ''
]);

// Init App and set root-paths
App::init([
    'rootPath' => __DIR__ . '/../',
    'configPath' => __DIR__ . '/../config/config.php'
]);

App::start();
