<?php
class Carro{
    private $marca;
    private $modelo;
    private $ano;

    public function __construct($marca, $modelo, $ano){
        $this-> marca = $marca;
        $this-> modelo = $modelo;
        $this-> ano = $ano;
    }

    public function getMarca(){
        return  $this-> marca;
    }

    public function setMarca($marca){
        $this-> $marca;
    }

    public function getModelo(){
        return  $this-> modelo;
    }

    public function setModelo($modelo){
        $this-> $modelo;
    }

    public function getAno(){
        return  $this-> ano;
    }

    public function setAno($ano){
        $this-> $ano;
    }
// "." = concatenação em php
    public function imprimirPropriedades(){
        echo "Marca: " . $this-> getMarca() . "<br>";
        echo "Modelo: " . $this-> getModelo() . "<br>";
        echo "Ano: " . $this-> getAno() . "<br>";
    }

}
?>