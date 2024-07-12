<?php
require_once 'controllers/HomeController.php';
require_once 'controllers/GreenhouseController.php';
require_once 'controllers/SensorController.php';
require_once 'controllers/ReadingController.php';

    return [
        'defaultRoute' => ['GET', 'HomeController', 'index'],
        'home' => [
            'index' => ['GET', 'HomeController', 'index'],
        ],
        'greenhouse' => [
            'index' => ['GET', 'GreenhouseController', 'index'],
            'show' => ['GET', 'GreenhouseController', 'show'],
            'create' => ['GET', 'GreenhouseController', 'create'],
            'store' => ['POST', 'GreenhouseController', 'store'],
            'edit' => ['GET', 'GreenhouseController', 'edit'],
            'delete' => ['GET', 'GreenhouseController', 'delete'],
        ],
        'sensor' => [
            'index' => ['GET', 'SensorController', 'index'],
            'create' => ['GET', 'SensorController', 'create'],
            'store' => ['POST', 'SensorController', 'store'],
        ],
        'reading' => [
            'index' => ['GET', 'ReadingController', 'index'],
            'create' => ['GET', 'ReadingController', 'create'],
            'store' => ['POST', 'ReadingController', 'store'],
            'delete' => ['GET', 'ReadingController', 'delete'],
        ]
    ];