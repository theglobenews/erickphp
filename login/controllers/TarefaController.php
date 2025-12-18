<?php
require_once __DIR__ . '/../models/Tarefa.php';

class TarefaController {

    private $model;

    public function __construct($mysqli) {

        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION['id'])) {
            header("Location: index.php?route=login");
            exit;
        }

        $this->model = new Tarefa($mysqli);
    }

    public function index() {
        $tarefas = $this->model->listar();
        require __DIR__ . '/../views/listar.php';
    }

    public function criar() {
        if (!empty($_POST['descricao'])) {
            $this->model->criar($_POST['descricao']);
        }
        header("Location: index.php?route=tarefas");
    }

    public function excluir() {
        if (isset($_GET['id'])) {
            $this->model->excluir($_GET['id']);
        }
        header("Location: index.php?route=tarefas");
    }

    public function editar() {
        $tarefa = $this->model->buscarPorId($_GET['id']);
        require __DIR__ . '/../views/editar.php';
    }

    public function atualizar() {
        $this->model->editar($_POST['id'], $_POST['descricao']);
        header("Location: index.php?route=tarefas");
    }
}
