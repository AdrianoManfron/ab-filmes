<?php

class AvaliacaoContagem{
    public $id;
    public $usuario_id;
    public $count_avaliacoes;

    public function query($where, $params){
        $database = new DB(config('database'));

        return $database->query("select ac.usuario_id, ifnull(count(ac.id),0) as count_avaliacoes
                    from avaliacoesContagem as ac left join usuarios as u on ac.usuario_id = u.id
                    where $where",
                    self::class, $params);
    }

    public static function minhasAvaliacoes($usuario_id){
        $count_avaliacoes = (new self)->query('ac.usuario_id = :usuario_id', ['usuario_id' => "$usuario_id"])->fetchAll();

        return $count_avaliacoes;
    }

    public static function contagemAvaliacoes($usuario_id, $contagemAvaliacoes){

        $database = new DB(config('database'));

        return $database->query("update avaliacoesContagem set count_avaliacoes = $contagemAvaliacoes where usuario_id = $usuario_id");
    }
}