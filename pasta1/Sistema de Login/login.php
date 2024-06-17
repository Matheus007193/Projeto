<?php
    @session_start();

    include('db.php');

    $usuario = $_POST['u'];
    $senha = $_POST['p'];

    $stmt = $pdo->prepare("SELECT * FROM `LOGIN` WHERE USUARIO = ?");
    $stmt->execute([$usuario]);
    $info = $stmt->fetch(PDO::FETCH_ASSOC);

    // Validar o nome de usuário do cliente
    if(!$info){
        echo 'ERRO_USUARIO';
        exit;
    }
    if($senha == $info['SENHA']){
        echo 'OK';
        $_SESSION['Nome_Usuario'] = $info['NOME'];
        $_SESSION['Usuario'] = $info['USUARIO'];
        exit;
    } else {
        echo 'ERRO_SENHA';
        exit;
    }
?>