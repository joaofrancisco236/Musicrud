<?php

$host = "sql306.infinityfree.com";
$banco = "if0_42050309_musica";
$usuario = "if0_42050309";
$senha = "pdxnwn7SRdY";

try {
    $conexao = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8",
        $usuario,
        $senha
    );

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $erro){
    echo "Erro na conexão: " . $erro->getMessage();
}

?>