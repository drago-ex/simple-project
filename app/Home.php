<?php

declare(strict_types=1);

namespace App;

use Latte\Engine;


final class Home
{
	public function __construct(
		private Engine $latte,
	) {
	}


	public function render(): void
	{
		$this->latte->render(__DIR__ . '/templates/Home.latte');
	}
}
