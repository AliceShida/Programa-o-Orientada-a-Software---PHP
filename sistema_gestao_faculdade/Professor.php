<?php

class Professor extends Pessoa {
    private $especialidade;
    private $salario;
//contrutor
    public function __construct($nome, $idade, $cpf){
        parent::__construct($nome, $idade, $cpf);
        $this-> especialidade = $especialidade;
        $this-> salario = $salario;
    }

}

?>