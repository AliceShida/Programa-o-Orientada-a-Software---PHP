<?php
//serve para "importar" as informações da classe
require_once 'Carro.php';

class CarroEsportivo extends Carro{
    private $potencia;

    public function __connstruct($marca, $modelo, $ano){
        parent::__construct($marca, $modelo, $ano);
        $this-> potencia = $potencia;
    }

    public function getPotencia(){
        return  $this-> potencia;
    }

    public function setPotencia($potencia){
        $this-> $potencia;
    }
//"parent" é usado para referenciar as características da classe Pai
    public function imprimirPropriedades(){
        parent:: imprimirPropriedades();
        echo "Potência: " . $this-> getPotencia() . "<br>";
    }
}
?>