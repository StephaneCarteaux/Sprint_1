<?php

// Exercici 1
class Employee{
    private string $nombre;
    private float $salario;

    function initialize(string $nombre, int $salario){
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    function print(string $nombre){
        if ($this->salario > 6000){
            echo $this->nombre." tiene que pagar impuestos";
        }else{
            echo $this->nombre." no tiene que pagar impuestos";
        }
    }
}

$employee = new Employee();
$employee->initialize("Jordi", 7000);
$employee->print("Jordi");

?>