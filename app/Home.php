<?php

namespace App;

use Latte\Engine;


final class Home
{
	/** @var Engine */
	private  $latte;


	public function __construct(Engine $latte)
	{
		$this->latte = $latte;
	}


	public function render()
	{
		$this->latte->render(__DIR__ . '/templates/Home.latte');
	}
}
