<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: /meus-filmes');
    exit();
}

if(! auth()){
    abort(403);
}

$usuario_id = auth()->id;
$titulo = $_POST['titulo'];
$ano_de_lancamento = $_POST['ano_de_lancamento'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

$validacao = Validacao::validar([
    'titulo' => ['required', 'min:5'],
    'ano_de_lancamento' => ['required'],
    'categoria' => ['required'],
    'descricao' => ['required'],
], $_POST);

if($validacao->naoPassou()){
    header('location: /novo-filme');
    exit();
}

$novoNome = md5(rand());
$extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
$imagem = "images/$novoNome.$extensao";

move_uploaded_file($_FILES['imagem']['tmp_name'], __DIR__ . '/../public/' . $imagem);

$database->query("insert into filmes ( titulo, ano_de_lancamento, categoria, descricao, usuario_id, imagem )
                values ( :titulo, :ano_de_lancamento, :categoria, :descricao, :usuario_id, :imagem )",
                params: compact('titulo', 'ano_de_lancamento', 'categoria', 'descricao', 'usuario_id', 'imagem')
);

flash()->push('mensage', 'Filme cadastrado com sucesso!');
header('location: /meus-filmes');
exit();