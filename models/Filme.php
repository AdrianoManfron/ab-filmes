<?php

class Filme {
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

        return $database->query("select f.id, f.titulo, f.ano_de_lancamento, f.categoria, f.descricao, f.usuario_id, f.imagem, iif(count(a.filme_id) == 1, a.nota,
                    iif(count(a.filme_id) == 2, round(sum(a.nota) / 2.0),
                    iif(count(a.filme_id) == 3, round(sum(a.nota) / 3.0),
                    iif(count(a.filme_id) == 4, round(sum(a.nota) / 4.0),
                    iif(count(a.filme_id) >= 5, round(sum(a.nota) / 5.0), 0))))) as nota_avaliacao, ifnull(count(a.id),0) as count_avaliacoes
                    from filmes f left join avaliacoes a on a.filme_id = f.id
                    where $where group by f.id, f.titulo, f.ano_de_lancamento, f.categoria, f.descricao, f.usuario_id, f.imagem",
                    self::class, $params);
    }

    public static function get($id){
        return (new self)->query('f.id = :id', ['id' => $id])->fetch();
    }

    public static function all($filtro){
        return (new self)->query('titulo like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
    }

    public static function meusLivros($usuario_id){
        return (new self)->query('f.usuario_id = :usuario_id', ['usuario_id' => "$usuario_id"])->fetchAll();
    }
}