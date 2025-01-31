<?php

declare(strict_types=1);

use App\Bootstrap;
use App\Home;

require __DIR__ . '/../vendor/autoload.php';

$app = new Bootstrap;
$app->initialize();

$home = new Home($app->engine());
$home->render();
