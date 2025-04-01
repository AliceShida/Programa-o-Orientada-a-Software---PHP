<?php
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    //consrtutor
    public function __construct($matricula, $curso){
        $this-> matricula = $matricula;
        $this-> curso = $curso;
    }
    //exibe as informações
    public function exibirInformacoes(){
        echo "Matricula: " . $this-> getMatricula() . "<br>";
        echo "Curso: " . $this-> getCurso() . "<br>";
    }
}
?>