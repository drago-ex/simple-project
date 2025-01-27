<?php

declare(strict_types=1);

namespace App;

use Latte\Engine;


/**
 * Home controller class for rendering the home page.
 */
final readonly class Home
{
	/**
	 * Constructor for the Home controller.
	 * @param Engine $latte The Latte templating engine.
	 */
	public function __construct(
		private Engine $latte,
	) {
	}


	/**
	 * Renders the home template using Latte.
	 */
	public function render(): void
	{
		$this->latte->render(__DIR__ . '/templates/Home.latte');
	}
}
