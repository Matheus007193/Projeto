<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>
</head>
<body>
    <?php 
    include('dbweb.php');
    $stmt = $pdo->prepare("SELECT * FROM formulario WHERE 1");
    $stmt->execute();

    while($info = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo("usuario " . $info["Nome"]. " tem " . $info["Idade"] . " anos e tem o email " . $info["Email"] . "<br>");
    }
    ?>
</body>
</html>