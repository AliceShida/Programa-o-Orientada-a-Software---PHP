<?php
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    //consrtutor
    public function __construct($nome, $idade, $matricula, $curso){
        parent::__construct($nome, $idade); //chama o contrutor da classe Pai
        $this-> matricula = $matricula;
        $this-> curso = $curso;
    }

    public function getMatricula(){
        return $this-> matricula;
    }
    public function setMatricula($matricula){
        $this-> matricula = $matricula;
    }
    public function getCurso(){
        return $this-> curso;
    }
    public function setCurso($curso){
        $this-> curso = $curso;
    }

    //exibe as informações
    public function exibirInformacoes(){
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Idade: " . $this->getIdade() . "<br>";
        echo "Matricula: " . $this-> getMatricula() . "<br>";
        echo "Curso: " . $this-> getCurso() . "<br>";
    }
}
?>