<?php 
    include('dbweb.php');

    $stmt = $pdo->prepare("SELECT * FROM FeedBack WHERE 1");
    $stmt->execute();

    while($info = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo($info['Nome'] . ' deixou o seguinte comentário: ' . $info['Comentario'] . '<br>');
    }
?>