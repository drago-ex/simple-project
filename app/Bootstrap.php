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
	/**
	 * Bootstraps the application by enabling Debugger and setting up RobotLoader.
	 */
	public static function boot(): void
	{
		// Enable strict mode for Tracy Debugger
		Debugger::$strictMode = true;

		// Set debug mode based on environment variable
		$mode = getenv('NETTE_DEBUG') == 1 ? false : Debugger::DETECT;
		Debugger::enable($mode, __DIR__ . '/../log');

		// Set up RobotLoader for autoload
		$loader = new RobotLoader;
		$loader->setTempDirectory(__DIR__ . '/../var/_Nette.RobotLoaderCache')
			->addDirectory(__DIR__)  // Add current directory to the autoloader
			->register();
	}


	/**
	 * Creates and configures the Latte templating engine.
	 */
	public static function latte(): Latte
	{
		$latte = new Latte;
		$latte->setStrictParsing();  // Enable strict parsing for templates
		$latte->setTempDirectory(__DIR__ . '/../var/_Latte.TemplateCache');  // Set cache directory for templates
		return $latte;
	}
}
