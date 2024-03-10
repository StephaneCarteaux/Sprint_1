<?php

 // Exercici 1
 abstract class Animal {

    public string $name;

    function __construct(string $name){
        $this->name = $name;
    }

    abstract public function makeSound();
}

class Gos extends Animal {
    public function makeSound(){
        return "Bup, bup!";
    }
}

class Gat extends Animal {
    public function makeSound(){
        return "Meu!";
    }
}

$gos = new Gos('Wendy');
echo $gos->name." dice: ".$gos->makeSound() . PHP_EOL;

$gat = new Gat('Félix');
echo $gat->name." dice: ".$gat->makeSound() . PHP_EOL;

?>