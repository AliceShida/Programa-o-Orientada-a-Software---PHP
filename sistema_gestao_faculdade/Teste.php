<?php

$professor = new Professor("Carlos Silva", 40, "12345678901", "Matemática", 3500.00);

$aluno1 = new Aluno("João Pereira", 20, "123456", "Matemática");
$aluno2 = new Aluno("Maria Santos", 22, "654321", "Matemática");

$disciplina = new Disciplina("Matemática", $professor, [$aluno1, $aluno2]);

echo "<h2>Informações do Professor:</h2>";
$professor->exibirInformacoes();
echo "<br>";

echo "Informações do Aluno 1: ";
$aluno1->exibirInformacoes();
echo "<br>";
echo "Informações do Aluno 2: ";
$aluno2->exibirInformacoes();
echo "<br>";

echo "<h2>Informações da Disciplina:</h2>";
$disciplina->exibirInformacoes();
echo "<br>";

$disciplina->listarAlunos();

?>
