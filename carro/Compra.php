<?php

class Compra{
    private $numero;
    private $cliente;
    private $carros;

    public function __construct($numero, $cliente){
        $this-> numero = $numero;
        $this-> cliente = $cliente;
        $this-> carros = [];
    }

    public function adicionarCarro($carro){
        $this-> carros[] = $carro;
    }
//método "for" automático que lista os carros
    public function listarCarros(){
        echo "Carros para comprar <br>";
        foreach($this->carros as $carro){
            echo "-" . $carro -> getModelo() . "<br>";
        }
    }
}

?>