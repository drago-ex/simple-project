<?php

declare(strict_types=1);

namespace App;

use Drago\Simple\Latte;
use Nette\Loaders\RobotLoader;
use Tracy\Debugger;


/**
 * Bootstrap class for application initialization.
 */
class Bootstrap
{
	private string $rootDir;


	public function __construct()
	{
		// Root directory of the project.
		$this->rootDir = dirname(__DIR__);
	}


	/**
	 * Bootstraps the application by enabling Debugger and setting up RobotLoader.
	 */
	public function initialize(): void
	{
		// Enable strict mode for Tracy Debugger
		Debugger::$strictMode = true;

		// Set debug mode based on environment variable
		$mode = getenv('NETTE_DEBUG') == 1 ? false : Debugger::Detect;
		Debugger::enable($mode, $this->rootDir . '/var/log');

		// Set up RobotLoader for autoload
		$loader = new RobotLoader;
		$loader->setTempDirectory($this->rootDir . '/var/_Nette.RobotLoaderCache')
			->addDirectory(__DIR__)
			->register();
	}


	/**
	 * Creates and configures the Latte templating engine.
	 */
	public function engine(): Latte
	{
		$latte = new Latte;
		$latte->setStrictParsing();
		$latte->setTempDirectory($this->rootDir . '/var/_Latte.TemplateCache');
		return $latte;
	}
}
