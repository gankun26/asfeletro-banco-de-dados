<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="./contato.php"><button>Retornar</button></a>    


<?php
    
    $host = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'asfeletro';

    $connect = mysqli_connect($host, $username, $pass, $db);
    

    $sql = "select nome, endereco, produto from pedidos";
    $result = $connect->query($sql);
    
    while ($row = $result->fetch_assoc()){
        echo "<p> Cliente: ".$row['nome']." /endereço: ".$row['endereco']." /produto: ".$row['produto']."</p><hr>";
    }

   
    

?>

</body>

</html>

