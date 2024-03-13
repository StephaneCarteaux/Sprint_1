<?php
namespace Tema_7\scr\nivel_2;
// Nivel_2 Exercici 1
class NumberChecker  {

	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

}
?>