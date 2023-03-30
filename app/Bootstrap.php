<?php

declare(strict_types=1);

namespace App;

use Drago\Simple\Latte;
use Nette\Loaders\RobotLoader;
use Tracy\Debugger;


class Bootstrap
{
	public static function boot(): void
	{
		Debugger::$strictMode = true;
		$mode = getenv('NETTE_DEBUG') == 1 ? false : Debugger::DETECT;
		Debugger::enable($mode, __DIR__ . '/../log');

		$loader = new RobotLoader;
		$loader->setTempDirectory(__DIR__ . '/../var/_Nette.RobotLoaderCache')
			->addDirectory(__DIR__)
			->register();
	}


	public static function latte(): Latte
	{
		$latte = new Latte;
		$latte->setTempDirectory(__DIR__ . '/../var/_Latte.TemplateCache');
		return $latte;
	}
}
