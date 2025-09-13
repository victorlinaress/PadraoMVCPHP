<?php
namespace dao\mysql;
use ICLienteDAO;
use generic\MysqlFactory;

class ClienteDAO extends MysqlFactory implements IClienteDAO{
    public function listar(){
        $sql = "select id,nome, endereco from clientes";
        $retorno = $this -> banco -> executar($sql);
        return $retorno
    }


    public function listarId($id){
        $sql = "SELECT id,nome, endereco from clientes where id=:id";
        $param = [
            ":id" => $id
        ];

        $retorno = $this -> banco -> executar($sql, $param);
        return $retorno;
        
    }   

   public function inserir($nome, $endereco){
    $sql = "INSERT into clientes(nome,endereco) values (:nome, :endereco)";
    $param = [
        ":nome" => $nome,
        ":endereco" => $endereco,
    ];
    $retorno = $this->banco->executar($sql, $param);
}
public function alterar($id, $nome, $endereco){
    $sql = "UPDATE clientes SET nome = :nome, endereco = :endereco WHERE id = :id";

    $param = [
        ":nome" => $nome,
        ":endereco" => $endereco,
        ":id" => $id
    ];

    $retorno = $this->banco->executar($sql, $param);
    return $retorno;
}
}


