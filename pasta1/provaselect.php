<?php 
include('dbweb.php');

$stmt = $pdo->prepare("SELECT * FROM prova WHERE 1");
$stmt->execute();
while($info = $stmt->fetch(PDO::FETCH_ASSOC)){

echo("Visitante".$info["ID"].":".$info["comentario"]."<br>");
};






?>