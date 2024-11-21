<?php

if(! auth()){
    header('location: /');
    exit();
}

$pesquisar = $_REQUEST['pesquisar'] ?? "";

$filmes = FilmesUsuario::all($pesquisar);

// carrega informações do usuário
$usuario = user($database);

view('meus-filmes', compact('usuario', 'filmes', 'pesquisar'));