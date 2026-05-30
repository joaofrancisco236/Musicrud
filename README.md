# 🎵 Musicrud - Sistema CRUD de Músicas

## 📋 Descrição

Este projeto consiste em uma aplicação web desenvolvida em PHP utilizando PDO e banco de dados MySQL. O sistema permite o gerenciamento de músicas através das operações básicas de um CRUD (Create, Read, Update e Delete).

## 🚀 Funcionalidades

* Cadastrar músicas
* Listar músicas cadastradas
* Editar informações de músicas
* Excluir músicas
* Armazenamento em banco de dados MySQL

## 🛠️ Tecnologias Utilizadas

* PHP
* PDO (PHP Data Objects)
* MySQL
* HTML5
* CSS3
* InfinityFree (Hospedagem)

## 📂 Estrutura do Projeto

```text
MUSIC-CRUD
│
├── banco.sql
├── README.md
├── index.php
├── cadastrar.php
├── salvar.php
├── listar.php
├── editar.php
├── atualizar.php
├── excluir.php
│
├── css/
│   └── style.css
│
└── includes/
    └── conexao.php
```

## 🗄️ Banco de Dados

O banco de dados utilizado é MySQL.

Tabela principal:

```sql
CREATE TABLE musicas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    artista VARCHAR(255) NOT NULL,
    album VARCHAR(255) NOT NULL,
    genero VARCHAR(100) NOT NULL,
    ano INT NOT NULL
);
```

## 🌐 Sistema Online

Link do sistema:

https://music-crud.rf.gd/music-crud/

## 👨‍💻 Autor

João Francisco

Projeto desenvolvido para a disciplina de Desenvolvimento Web utilizando PHP, PDO e MySQL.
