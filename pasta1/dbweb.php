<?php
$dsn = 'mysql:host=localhost;dbname=id22181038_prova;charset=utf8';
$usuario = 'id22181038_matheus';
$senha = 'matheus13579017521M.';
try {
$pdo = new PDO($dsn, $usuario, $senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo 'Erro de conexão: ' . $e->getMessage();
exit();
}
?>