<?php
namespace generic;

class MysqlFactory {
    public MysqlSingleton $banco;

    public function __construct()
    {
        $this->banco = MysqlSingleton::getInstance(); //inicia o banco, usando o método getInstance
    }
}