<?php

class MMSW
{
    private $server, $pdo, $user, $db, $password;

    public function __construct($server, $user, $password, $db)
    {
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;

        $this->connection();
    }

    protected function connection()
    {
        $this->pdo = new PDO('mysql:host=' . $this->server . ';dbname=' . $this->db, $this->user, $this->password);
    }

    public function __sleep()
    {
        return ['server', 'user', 'password', 'db'];
    }

    public function __wakeup()
    {
        $this->connection();
    }
}

session_start();
if (!isset($_SESSION['connexion'])) {
    $connexion = new MMSW('localhost', 'root', 'aitbenalla', 'little_elephant');
    $_SESSION['connexion'] = $connexion;
    echo 'Actualisez la page !';
} else {
    echo '<pre>';
    var_dump($_SESSION['connexion']); // On affiche les infos
    echo '</pre>';
}
