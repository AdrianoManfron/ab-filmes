<?php

if(! auth()){
    abort(403);
}

$id = auth()->id;

$user = $database->query("select * from usuarios where id = $id");

// carrega informações do usuário
$usuario = user($database);

view('usuario', compact('usuario', 'user'));