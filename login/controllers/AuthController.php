<?php

require_once __DIR__ . '/../models/Usuario.php';

class AuthController {

    public function login($mysqli) {

        if (!isset($_POST['email']) || !isset($_POST['senha'])) {
            require __DIR__ . '/../views/login.php';
            return;
        }

        $usuario = new Usuario($mysqli);
        $resultado = $usuario->autenticar($_POST['email'], $_POST['senha']);

        if ($resultado->num_rows === 1) {

            $dados = $resultado->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];

            header("Location: index.php?route=tarefas");
            exit;

        }

        $erro = "Email ou senha incorretos.";
        require __DIR__ . '/../views/erro.php';
    }
}

