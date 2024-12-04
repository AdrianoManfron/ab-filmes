<?php

// Carrega a página do filme
$filme = Filme::get($_GET['id']);

// Total de filmes avalidados pelo usuário
$avaliacoesFilmes = $database->query("select ac.usuario_id, ac.count_avaliacoes
from avaliacoesContagem as ac left join usuarios as u where ac.usuario_id = u.id")->fetchAll();

// 
foreach($avaliacoesFilmes as $key => $filmes){
    $soma = AvaliacaoContagem::minhasAvaliacoes($filmes['usuario_id']);
    
    AvaliacaoContagem::contagemAvaliacoes($soma[0]->usuario_id, $soma[0]->count_avaliacoes);
}

// Avaliações do filme
$avaliacoes = $database->query("select u.id, u.nome, u.avatar, a.usuario_id, a.filme_id, a.avaliacao, a.nota, ac.count_avaliacoes, ac.usuario_id
                                from usuarios as u right join avaliacoes as a, avaliacoesContagem as ac on u.id = a.usuario_id and a.usuario_id = ac.usuario_id where filme_id = :id and a.usuario_id = u.id
                                group by u.id, u.nome, u.avatar, a.usuario_id, a.filme_id, a.avaliacao, a.nota, ac.count_avaliacoes, ac.usuario_id", 
                                Avaliacao::class, ['id' => $_GET['id']])->fetchAll();

// carrega informações do usuário
$usuario = user($database);

view('filme', compact('filme', 'avaliacoes', 'usuario'));