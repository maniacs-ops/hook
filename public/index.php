<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require(__DIR__ . '/../src/bootstrap.php');
Hook\Http\Router::mount('/', 'Hook\\Application\\Routes')->run();
