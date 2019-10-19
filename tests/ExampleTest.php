<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use PHPUnit\Framework\TestCase;
use Kaythinks\Worldtime\Worldtime;

class ExampleTest extends TestCase
{
	public function testgetTime()
	{
		$time = Worldtime::getTime('Lagos');
		$this->assertStringMatchesFormat(date("h:i:sA"),$time);
	}

	public function testgetFullTime()
	{
		$time = Worldtime::getFullTime('Lagos');
		$this->assertStringMatchesFormat(date("H:i:sA"),$time);
	}

	public function testgetTimeString()
	{
		$time = Worldtime::getTimeString('Lagos');
		$this->assertStringMatchesFormat(date("l, d-M-y h:i:sA T"),$time);
	}

	public function testgetFullTimeString()
	{
		$time = Worldtime::getFullTimeString('Lagos');
		$this->assertStringMatchesFormat(date("l, d-M-y H:i:sA T"),$time);
	}
}