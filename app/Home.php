<?php

declare(strict_types = 1);

namespace App;

use Latte\Engine;


final class Home
{
	private Engine $latte;


	public function __construct(Engine $latte)
	{
		$this->latte = $latte;
	}


	public function render(): void
	{
		$this->latte->render(__DIR__ . '/templates/Home.latte');
	}
}
