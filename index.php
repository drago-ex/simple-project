<?php

declare(strict_types = 1);

use App\Bootstrap;
use App\Home;

require __DIR__ . '/vendor/autoload.php';

$app = new Bootstrap;
$app::boot();

$home = new Home($app::latte());
$home->render();
