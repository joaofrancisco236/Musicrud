<?php

include("includes/conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM musicas WHERE id = :id";

$stmt = $conexao->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();

header("Location: listar.php");
exit;

?>