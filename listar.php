<?php

include("includes/conexao.php");

$sql = "SELECT * FROM musicas";

$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>

<html lang="pt-br">


<head>

    <meta charset="UTF-8">
    <title> Lista de Música</title>

    <link rel="stylesheet" href="css/style.css">


</head>

<body>

<div class="container">

    <h2> 🎶 Lista de Músicas</h2>

    <table>

        <tr>

            <th>Id</th>
            <th>Nome</th>
            <th>Artista</th>
            <th>Álbum</th>
            <th>Gênero</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>

<?php while($musica = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>

<tr>

    <td><?= $musica['id'] ?></td>
    <td><?= $musica['nome'] ?></td>
    <td><?= $musica['artista'] ?></td>
    <td><?= $musica['album'] ?></td>
    <td><?= $musica['genero'] ?></td>
    <td><?= $musica['ano'] ?></td>

<td>
    <a href="editar.php?id=<?= $musica['id'] ?>">
        Editar
    </a>

    <a href="excluir.php?id=<?= $musica['id'] ?>">
        Excluir
    </a>
</td>
</tr>

<?php } ?>




    </table>
</div>
</body>
</html>