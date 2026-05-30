<?php

include("includes/conexao.php");

$id = $_POST['id'];

$nome = $_POST['nome'];
$artista = $_POST['artista'];
$album = $_POST['album'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];

$sql = "UPDATE musicas SET
nome = :nome,
artista = :artista,
album = :album,
genero = :genero,
ano = :ano
WHERE id = :id";

$stmt = $conexao->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':artista', $artista);
$stmt->bindParam(':album', $album);
$stmt->bindParam(':genero', $genero);
$stmt->bindParam(':ano', $ano);
$stmt->bindParam(':id', $id);

$stmt->execute();

header("Location: listar.php");
exit;

?>