<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: /meus-filmes');
    exit();
}

if(! auth()){
    abort(403);
}

$usuario_id = auth()->id;
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$validacao = Validacao::validar([
    'nome' => ['min:5'],
    'email' => ['min:10', 'email', 'confirmed'],
    'senha' => ['min:8', 'max:30', 'strong']
], $_POST);

if($validacao->naoPassou()){
    header('Location: /usuario');
    exit();
}

$novoNome = md5(rand());
$extensao = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
$imagem = "images/$novoNome.$extensao";

move_uploaded_file($_FILES['avatar']['tmp_name'], __DIR__ . '/../public/' . $imagem);

$database->query(
    query: "update usuarios set nome = :nome, email = :email, senha = :senha, avatar = :avatar where id = :id",
    params: [
        'id' => $usuario_id,
        'nome' => $nome,
        'email' => $_POST['email'],
        'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
        'avatar' => $imagem
    ]
);

flash()->push('mensage', 'Dados atualizados com sucesso!!');
header('location: /usuario');
exit();