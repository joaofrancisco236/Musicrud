<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include("includes/conexao.php");

$nome = $_POST['nome'];
$artista = $_POST['artista'];
$album = $_POST['album'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];

$sql = "INSERT INTO musicas 
(nome, artista, album, genero, ano) 
VALUES 
(:nome, :artista, :album, :genero, :ano)";

$stmt = $conexao->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':artista', $artista);
$stmt->bindParam(':album', $album);
$stmt->bindParam(':genero', $genero);
$stmt->bindParam(':ano', $ano);

$stmt->execute();

header("Location: listar.php");
exit;

?>