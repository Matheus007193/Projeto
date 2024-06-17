


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
     
     
     
     
     <?php
     

     $email = $_POST["email"];
    $opcaoSelecionada = $_POST["seleçao"];
    $sugestao = $_POST["sugestao"];


    print("<p>nome: $email</p>");
 print("<p>seleçao: $opcaoSelecionada</p>");
 print("<p>sugestao: $sugestao</p>");
    
    ?>    
</body>
</html>