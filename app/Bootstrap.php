<?php

declare(strict_types=1);

namespace App;

use Drago\Simple\Latte;
use Nette\Loaders\RobotLoader;
use Tracy\Debugger;


class Bootstrap
{
	private string $rootDir;


	public function __construct()
	{
		$this->rootDir = dirname(__DIR__);
	}


	public function initialize(): void
	{
		Debugger::$strictMode = true;

		$mode = getenv('NETTE_DEBUG') === '1' ? true : Debugger::Detect;
		Debugger::enable($mode, $this->rootDir . '/log');

		$loader = new RobotLoader;
		$loader->setTempDirectory($this->rootDir . '/temp/_Nette.RobotLoaderCache')
			->addDirectory(__DIR__)
			->register();
	}


	public function engine(): Latte
	{
		$latte = new Latte;
		$latte->setStrictParsing();
		$latte->setTempDirectory($this->rootDir . '/temp/_Latte.TemplateCache');
		return $latte;
	}
}
