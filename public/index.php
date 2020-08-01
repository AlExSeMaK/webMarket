<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

$request = new Aleksei\WebShop\Base\Request();

$config = __DIR__ . '/../config.json';

$app = new Aleksei\WebShop\Base\Application($config);
$response = $app->handleRequest($request);
$response->send();

