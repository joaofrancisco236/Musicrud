<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Cadastrar Música</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container">

        <h2>Cadastrar Música</h2>

        <form action="salvar.php" method="POST">

            <input type="text"
            name="nome"
            placeholder="Nome da música"
            required>

            <input type="text"
            name="artista"
            placeholder="Nome do artista"
            required>

            <input type="text"
            name="album"
            placeholder="Álbum"
            required>

            <input type="text"
            name="genero"
            placeholder="Qual o gênero da música"
            required>

            <input type="number"
            name="ano"
            placeholder="Ano"
            required>

            <button type="submit">
                Salvar Música
            </button>

        </form>

    </div>

</body>
</html>