<?php

class PrintName
{

    private string $name = "Joan";

    public function printName()
    {
        echo $this->name . PHP_EOL;
    }

    public function __get($property)
    {
        echo "Esta propriedad no es accesible" . PHP_EOL;
    }
}

$myPrintName = new PrintName;
echo $myPrintName->name;
