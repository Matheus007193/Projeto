<?php
$dsn = 'mysql:host=localhost;dbname=Matheus;charset=utf8';
$usuario = 'root';
$senha = '';
try {
$pdo = new PDO($dsn, $usuario, $senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo 'Erro de conexão: ' . $e->getMessage();
exit();
}
?>