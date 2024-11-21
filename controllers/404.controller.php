<?php

$pesquisar = $_REQUEST['pesquisar'] ?? "";

$filmes = Filme::all($pesquisar);

http_response_code(404);

if (! auth()) {
    $usuario = '';
} else {
    $id = auth()->id;
    $usuario = $database->query(
        query: "select * from usuarios where id = $id",
        class: Usuario::class
    )->fetch();
}

view(404, compact('pesquisar', 'filmes', 'usuario'));

die();
