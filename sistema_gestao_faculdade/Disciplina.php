<?php


private $nome;
private $professor;
private $alunos;
//construtor para inicializar os atributos
public function __construct($nome, $professor, $alunos){
    $this-> nome = $nome;
    $this-> professor = $professor;
    $this-> alunos = [];
}
//Adiciona um aluno na disciplina
public function adicionarAluno($alunos){
    $this-> alunos[] = $alunos;
}

//lista alunos matriculados na disciplina
public function listarAlunos(){
    echo "Alunos Matriculados: <br>";
    foreach($this-> alunos as $alunos){
        echo "-" . $alunos -> getDisciplina() . "<br>";
    }
}
//exibe as informações da disciplina
public function exibirInformacoes(){
    echo "Disciplina: " . $this-> getDiscipina() . "<br>";
    echo "Professor: " . $this-> getProfessor() . "<br>";
}

?>