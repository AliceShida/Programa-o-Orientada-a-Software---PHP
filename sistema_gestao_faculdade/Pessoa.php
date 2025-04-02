<?php
class Pessoa{
    private $nome;
    private $idade;
    private $cpf;
    //construtor para inicializar os atributos
    public function __construct($nome, $idade, $cpf){
        $this-> nome = $nome;
        $this-> idade = $idade;
        $this-> cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function exibirInformacoes(){
        echo "Nome: " . $this-> getNome() . "<br>";
        echo "Idade: " . $this-> getIdade() . "<br>";
        echo "CPF: " . $this-> getCpf() . "<br>";
    }
}
?>