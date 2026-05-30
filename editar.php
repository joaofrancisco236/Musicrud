<?php

include("includes/conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM musicas WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$musica = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar música</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">

        <h2>Editar música</h2>

        <form action="atualizar.php" method="POST">

            <input type="hidden"
            name="id"
            value="<?= $musica['id'] ?>">

            <input type="text"
            name="nome"
            value="<?= $musica['nome'] ?>">

            <input type="text"
            name="artista"
            value="<?= $musica['artista'] ?>">

            <input type="text"
            name="album"
            value="<?= $musica['album'] ?>">

            <input type="text"
            name="genero"
            value="<?= $musica['genero'] ?>">

            <input type="number"
            name="ano"
            value="<?= $musica['ano'] ?>">

            <button type="submit">
                Atualizar música
            </button>

        </form>

    </div>
</body>

</html>