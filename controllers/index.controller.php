<?php

$pesquisar = $_REQUEST['pesquisar'] ?? "";

$filmes = Filme::all($pesquisar);

$usuario = user($database);

view('index', compact('filmes', 'pesquisar', 'usuario'));