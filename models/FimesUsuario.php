<?php

class FilmesUsuario{
    public $id;
    public $titulo;
    public $ano_de_lancamento;
    public $categoria;
    public $descricao;
    public $usuario_id;
    public $imagem;
    public $nota_avaliacao;
    public $count_avaliacoes;

    public function query($where, $params){
        $database = new DB(config('database'));

        return $database->query("select f.id, f.titulo, f.ano_de_lancamento, f.categoria, f.descricao, f.usuario_id, f.imagem, ifnull(round(sum(a.nota) / 5.0), 0) as nota_avaliacao, ifnull(count(a.id),0) as count_avaliacoes
                            from filmes f left join avaliacoes a on a.filme_id = f.id
                            where $where group by f.id, f.titulo, f.ano_de_lancamento, f.categoria, f.descricao, f.usuario_id, f.imagem",
                    self::class, $params);
    }

    public static function all($filtro){
        return (new self)->query('titulo like :filtro and f.usuario_id = :id', ['filtro' => "%$filtro%", 'id' => auth()->id])->fetchAll();
    }
}