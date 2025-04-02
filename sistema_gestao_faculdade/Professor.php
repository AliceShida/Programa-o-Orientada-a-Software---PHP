<?php

class Professor extends Pessoa {
    private $especialidade;
    private $salario;
//contrutor
    public function __construct($nome, $idade, $cpf, $especialidade, $salario){
        parent::__construct($nome, $idade, $cpf);
        $this-> especialidade = $especialidade;
        $this-> salario = $salario;
    }

    public function getEspecialidade(){
        return $this-> especialidade;
    }
    public function setEspecialidade($especialidade){
        $this-> especialidade = $especialidade;
    }

    public function exibirInformacoes(){
        parent:: exibirInformacoes();
        echo "Especialidade: " . $this-> getEspecialidade() . "<br>";
    }

}

?>