<?php
namespace Tema_7\scr\nivel_2;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
// require (__DIR__ .'/../../src/nivel_2/numberChecker.php');

// Nivel_2 Exercici 1
class NumberCheckerTest extends TestCase
{
	public static function isEvenProvider(): array
    {
        return array(
          array(10, 5)
        );
	}

	#[DataProvider('isEvenProvider')]
	public function testIsEven(int $a, int $b)
	{
		$evenNumberChecker = new NumberChecker($a);
		$this->assertTrue($evenNumberChecker->isEven());

		$oddNumberChecker = new NumberChecker($b);
		$this->assertFalse($oddNumberChecker->isEven());
	}

	public static function isPositiveProvider(): array
    {
        return array(
          array(5, -5)
        );
	}

	#[DataProvider('isPositiveProvider')]
	public function testIsPositive(int $a, int $b)
	{
		$positiveNumberChecker = new NumberChecker($a);
		$this->assertTrue($positiveNumberChecker->isPositive());

		$negativeNumberChecker = new NumberChecker($b);
		$this->assertFalse($negativeNumberChecker->isPositive());

	}
}
?>