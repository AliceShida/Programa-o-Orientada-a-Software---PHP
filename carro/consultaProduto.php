<?php

$servername = "localhost";
$username = "root";
$password = "12345";
$database = "lojaonline";
//conexão
$conn = new mysqli($servername, $username, $password, $database);
$sql = "select descricao, modelo, preco from produto";
$result = $conn-> query($sql);

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