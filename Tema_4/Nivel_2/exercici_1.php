<?php

// Exercici 1
class PokerDice {

    public $ultimaTirada;
    // Necesitamos que $total_Tiradas esté atada a la clase y no a las instancias
    public static $totalTiradas = 0;
    public static array $figures = ['As', 'K', 'Q', 'J', '8', '7'];

    public function throw(){

        $tirada = array_rand(self::$figures, 1);
        $this->ultimaTirada = self::$figures[$tirada];
        self::$totalTiradas++;
    }

    public function shapeName(){
        return $this->ultimaTirada;
    }
    
    public static function getTotalThrows(){
        return self::$totalTiradas;
    }
}

for ($i = 0; $i < 5; $i++){
    $myPokerDice[$i] = new PokerDice();
    $myPokerDice[$i]->throw();
    echo "Dice " . ($i + 1) . ": " . $myPokerDice[$i]->shapeName() . PHP_EOL;
}

echo "Total tiradas: " . PokerDice::getTotalThrows() . PHP_EOL;

?>