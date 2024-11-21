<?php

function view($view, $data = []){
    foreach($data as $key => $value){
        $$key = $value;
    }
    require "views/templates/app.php";
}

function viewLogin($view, $data = []){
    foreach($data as $key => $value){
        $$key = $value;
    }
    require "views/templates/login.php";
}

function dd(...$dump){
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
    die();
}

function abort($code, $database = null)
{
    http_response_code($code);

    if(! auth()){
        $usuario = '';
    } else{
        $id = auth()->id;
        $usuario = $database->query(
            query:"select * from usuarios where id = $id",
            class: Usuario::class
            )->fetch();
    }

    view($code, compact('usuario'));

    die();
}

function user($database){
    if(! auth()){
        $usuario = $database->query(
            query:"select * from usuarios",
            class: Usuario::class
        )->fetchAll();
        
        foreach ($usuario as $u){
            $usuario []= $u->nome;
            $usuario []= $u->avatar;
        }

        return $usuario;

    } else{
        $id = auth()->id;
        $usuario = $database->query(
            query:"select * from usuarios where id = $id",
            class: Usuario::class
            )->fetch();
    }

    return $usuario;
}

function flash(){
    return new Flash;
}

function config($chave = null){
    $config = require 'config.php';

    if(strlen($chave) > 0){
        return $config[$chave];
    }

    return $config;
}

function auth(){
    if(! isset($_SESSION['auth'])){
        return null;
    }

    return $_SESSION['auth'];
}