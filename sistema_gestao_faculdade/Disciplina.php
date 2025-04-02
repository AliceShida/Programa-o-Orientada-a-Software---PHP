<?php
class Disciplina{
    private $nome;
    private $professor;
    private $alunos;
    //construtor para inicializar os atributos
    public function __construct($nome, $professor, $alunos = []){
        $this-> nome = $nome;
        $this-> professor = $professor;
        $this-> alunos = $alunos;
    }

    public function getNome(){
        return $this-> nome;
    }
    public function setNome($nome){
        $this-> nome = $nome;
    }
    public function getProfessor(){
        return $this-> professor;
    }
    public function setProfessor($professor){
        $this-> professor = $professor;
    }
    public function getAlunos(){
        return $this-> alunos;
    }
    public function setAlunos($alunos){
        $this-> alunos = $alunos;
    }
    

    //Adiciona um aluno na disciplina
    public function adicionarAluno($aluno){
        $this-> alunos[] = $aluno;
    }

    //lista alunos matriculados na disciplina
    public function listarAlunos(){
        echo "Alunos Matriculados: <br>";
        foreach($this-> alunos as $alunos){
            echo "-" . $alunos -> getNome() . "<br>";
        }
    }
    //exibe as informações da disciplina
    public function exibirInformacoes(){
        echo "Disciplina: " . $this-> getNome() . "<br>";
        echo "Professor: " . $this-> getProfessor() . "<br>";
    }
}

?>