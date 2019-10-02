<?php
declare(strict_types = 1);

// Autoload composer.
require __DIR__ . '/vendor/autoload.php';

$app = new App\Bootstrap();
$app::boot();

// Drawing a template.
$home = new App\Home($app::latte());
$home->render();
