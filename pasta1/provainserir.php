<?php 
include('db.php');


$email = $_POST['email'];
$selecao = $_POST['selecao'];
$sugestao = $_POST['sugestao'];

$sql = "INSERT INTO prova (email, escolha, comentario) VALUES
(?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email, $selecao, $sugestao]);


echo("$email,dados enviados com sucesso ");





































?>