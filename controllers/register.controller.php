<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $validacao = Validacao::validar([
        'nome' => ['required'],
        'email' => ['required', 'email', 'confirmed', 'unique:usuarios'],
        'senha' => ['required', 'min:8', 'max:30', 'strong']
    ], $_POST);
    
    if($validacao->naoPassou('register')){
        header('Location: /register');
        exit();
    }
    
    $database->query(
        query: "insert into usuarios ( nome, email, senha ) values ( :nome, :email, :senha )",
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
        ]
    );

    flash()->push('mensage', 'Usuário cadastrado com sucesso!!');
    header('location: /login');

    exit();
}

viewLogin('register');