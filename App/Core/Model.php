<?php

namespace App\Core;

class Model {

    //vamos aplicar o padrão de projeto Singleton
    private static $conexao;

    public static function getConexao(){
        // se conexão não estiver criada, criamos ela
        if(!isset($conexao)){
            //self é usado para pegar um atributo estático desta classe 
            self::$conexao = new \PDO("mysql:host=locashost;port=3306;dbname=icatalogo;", "root", "361345gumi");
        }

        //retornamos a conexão
        return self::$conexao;
    }

}