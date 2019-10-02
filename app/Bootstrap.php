<?php

declare(strict_types = 1);

namespace App;

use Drago\Simple\Latte;
use Latte\Engine;
use Nette\Bridges\FormsLatte\FormMacros;
use Nette\Loaders\RobotLoader;
use Tracy\Debugger;


class Bootstrap
{
	public static function boot(): void
	{
		Debugger::$strictMode = true;
		Debugger::enable(Debugger::DETECT, __DIR__ . '/../log');

		$loader = new RobotLoader;
		$loader->setTempDirectory(__DIR__ . '/../storage/_Nette.RobotLoaderCache')
			->addDirectory(__DIR__)
			->register();
	}


	public static function latte(): Engine
	{
		$latte = new Latte;
		$latte->setTempDirectory(__DIR__ . '/../storage/_Latte.TemplateCache');
		$latte->onCompile[] = function () use ($latte) {
			FormMacros::install($latte->getCompiler());
		};
		return $latte;
	}
}
