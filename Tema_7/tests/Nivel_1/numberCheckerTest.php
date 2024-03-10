<?php
use PHPUnit\Framework\TestCase;
require (__DIR__ .'/../../src/nivel_1/numberChecker.php');

// Nivel_1 Exercici 1
class NumberCheckerTest extends TestCase
{
	public function testIsEven()
	{
		$evenNumberChecker = new NumberChecker(10);
		$this->assertTrue($evenNumberChecker->isEven());

		$oddNumberChecker = new NumberChecker(5);
		$this->assertFalse($oddNumberChecker->isEven());
	}

	public function testIsPositive()
	{
		$positiveNumberChecker = new NumberChecker(5);
		$this->assertTrue($positiveNumberChecker->isPositive());

		$negativeNumberChecker = new NumberChecker(-5);
		$this->assertFalse($negativeNumberChecker->isPositive());

	}
}
?>