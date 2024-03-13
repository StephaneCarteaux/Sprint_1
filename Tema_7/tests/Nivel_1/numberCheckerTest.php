<?php
namespace Tema_7\scr\nivel_1;
use PHPUnit\Framework\TestCase;

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