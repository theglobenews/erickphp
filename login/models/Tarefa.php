<?php

class Tarefa {

    private $db;

    public function __construct($mysqli) {
        $this->db = $mysqli;
    }

    public function listar() {
        $res = $this->db->query("SELECT * FROM tarefas");
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public function criar($descricao) {
        $descricao = $this->db->real_escape_string($descricao);
        $this->db->query("INSERT INTO tarefas (descricao) VALUES ('$descricao')");
    }

    public function excluir($id) {
        $id = intval($id);
        $this->db->query("DELETE FROM tarefas WHERE id = $id");
    }

    public function buscarPorId($id) {
        $id = intval($id);
        return $this->db->query("SELECT * FROM tarefas WHERE id = $id")->fetch_assoc();
    }

    public function editar($id, $descricao) {
        $id = intval($id);
        $descricao = $this->db->real_escape_string($descricao);
        $this->db->query("UPDATE tarefas SET descricao='$descricao' WHERE id=$id");
    }
}
