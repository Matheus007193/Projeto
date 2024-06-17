<?php 

include ('dbweb.php');
$email = $_POST["e"];
$nome = $_POST["u"];
$comentario = $_POST["c"];

$sql = "INSERT INTO FeedBack (Nome, Comentario) VALUES (?, ?, ?)"; 
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome, $comentario, $email]);

?>