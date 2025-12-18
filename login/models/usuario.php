<?php

class Usuario {

    private $db;

    public function __construct($mysqli) {
        $this->db = $mysqli;
    }

    public function autenticar($email, $senha) {
        $email = $this->db->real_escape_string($email);
        $senha = $this->db->real_escape_string($senha);

        $sql = "SELECT * FROM usuarios 
                WHERE email = '$email' AND senha = '$senha'";

        return $this->db->query($sql);
    }
}


