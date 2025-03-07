<?php
$nome = "Ana Alice";
echo "Olá Mundo $nome";
$cor = "azul";
switch ($cor){
    case "vermelho":
        echo "<br>Você escolheu vermelho";
        break;
    case "azul":
        echo "<br>Você escolheu azul";
        break;    
    default:
            echo "<br>Cor não reconhecida";
            break;
}

for ($i = 1; $i <=5; $i++){
    echo "<br> Número: $i";
}

$contador = 1;
while ($contador<=5){
    echo "<br> contador $contador";
    $contador++;
}

$nomes = ["Ana", "Alice", "Shida", "Philipe"];
foreach ($nomes as $nome){
    echo "<br> $nome";
}
?>