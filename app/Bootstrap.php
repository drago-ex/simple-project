<?php

declare(strict_types = 1);

namespace App;

use Drago;
use Latte;
use Nette;
use Tracy\Debugger;


class Bootstrap
{
	public static function boot(): void
	{
		Debugger::$strictMode = true;
		Debugger::enable(Debugger::DETECT, __DIR__ . '/../log');

		$loader = new Nette\Loaders\RobotLoader;
		$loader->setTempDirectory(__DIR__ . '/../storage/_Nette.RobotLoaderCache')
			->addDirectory(__DIR__)
			->register();
	}


	public static function latte(): Latte\Engine
	{
		$latte = new Drago\Simple\Latte;
		$latte->setTempDirectory(__DIR__ . '/../storage/_Latte.TemplateCache');
		return $latte;
	}
}
