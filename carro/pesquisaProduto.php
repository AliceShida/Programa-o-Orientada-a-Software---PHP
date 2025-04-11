<?php

$servername = "localhost";
$username = "root";
$password = "12345";
$database = "lojaonline";
//conexão
$conn = new mysqli($servername, $username, $password, $database);
$sql = "select descricao, modelo, preco from produto where descricao like ? or modelo like ?";
//recuperando valor do filtro txt filtro
$filtro = $_GET['txtFiltro'];
//puxando o dado que foi filtrado
$filtroParam = "%$filtro%";
//preparando a query que vou executar
$stmt = $conn-> prepare($sql);
$stmt-> bind_param("ss", $filtroParam, $filtroParam);
$stmt-> execute();
//pegando o resultado da query executado
$result = $stmt-> get_result();
//resultado da query: 
if ($result-> num_rows > 0){
    echo "<table border=1>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Modelo</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody> ";
    while ($row = $result-> fetch_assoc()){
        echo "<tr>
                <td>" . $row["descricao"] . "</td>
                <td>" . $row["modelo"] . "</td>
                <td>" . $row["preco"] . "</td>
            </tr> ";
    }
    echo "</tbody></table>" ;
} else {
    echo "Nenhum registro encontrado";
}
$conn -> close();


?>