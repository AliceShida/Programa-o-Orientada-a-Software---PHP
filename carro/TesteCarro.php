<?php
//require_once cria os objetos
require_once 'Carro.php';
require_once 'CarroEsportivo.php';
require_once 'Cliente.php';
require_once 'Compra.php';

echo "<strong>Carro de Passeio</strong><br>";
$meuCarro = new Carro("Toyota", "Corolla", 2022);

//chamando o método para  imprimir 
$meuCarro-> imprimirPropriedades();

echo "<strong>Carro Esportivo</strong><br>";
$meuCarroEsportivo = new CarroEsportivo("Ferrari", "F8 Exclusivo", 2023, 710);
$meuCarroEsportivo -> imprimirPropriedades();

$cliente = new Cliente("Warlisson", 500000.0);
//parâmetros passados: número da compra e cliente
$minhaCompra = new Compra(1, $cliente);
$minhaCompra -> adicionarCarro($meuCarro);
$minhaCompra -> adicionarCarro($meuCarroEsportivo);
$minhaCompra -> listarCarros();

?>