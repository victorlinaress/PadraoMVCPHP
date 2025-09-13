<?php 
namespace dao;

interface ICLienteDAO {
    public function listar();
    public function inserir($nome, $endereço);
    public function listarId($id);
    public function alterar($id,$nome,$endereco);
}