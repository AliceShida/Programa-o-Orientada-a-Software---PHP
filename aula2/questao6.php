<?php
function verificarSenha($senha , $tentativaUsuario){
    $posicaoCorreta = 0;
    $quaseCerto = 0;
    for ($i=0; $i <4; $i++){
        if ($senha[$i] == $tentativaUsuario[$i]){
            $posicaoCorreta++;
        } else if (strpos($tentativaUsuario, $senha[$i]) != false) {
            $quaseCerto++;
        }
    }
    echo " $posicaoCorreta número(s) na posicao correta ";
    echo "<br>$quaseCerto número(s) na encontrados na posicao errada ";
}

$senha = "1234";
$tentativa = "1359";
verificarSenha($senha, $tentativa);

?>