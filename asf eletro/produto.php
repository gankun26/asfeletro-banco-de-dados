<?php
    $servername = "localhost";
    $username ="root";
    $password = '';
    $database = "asfeletro";

    $connect = mysqli_connect($servername, $username, $password, $database);

    if(!$connect){
      die("a conexão db falho: ". mysqli_connect_error());
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <title>Produtos - full stack eletro</title>
      <link rel="stylesheet" href="./css/estilo.css">
      <script src="./script/script.js"></script>
  </head>
  <body>
    <!---->
    <nav class="menu">
      <a href="./index.php"><img width="150px" src="./FERREIRA.png" alt="Full Stack Eletro"></a>
      <a href="./produto.php">Produtos</a>
      <a href="./loja.php">Nossas Lojas</a>
      <a href="./contato.php">Contatos</a>
    </nav>
    <!---->
    <header>
        <h2>Produtos</h2>
    </header>
     <!---->
     <hr>
    <!---->
     <main id="mainproduto">
    <!---->
     <div class="categorias">
          <h3>Categorias</h3>
           <ul>
             <li onclick="exibir_todas()">todas (9)</li>
             <li onclick="exibir_categoria('geladeira')">Geladeiras (5)</li>
             <li onclick="exibir_categoria('fogao')">Fogões (7)</li>
             <li onclick="exibir_categoria('liquidificador')">Liquidificadores (20)</li>
             <li onclick="exibir_categoria('maquina de lavar')">Maquinas De Lavar (15)</li>
           </ul>
          </div>     
         <!---->
      <div class="produtos">
         <!---->
         <?php
           $sql = "select * from produto";
           $result = $connect->query($sql);
       
           if($result->num_rows > 0){
             while($rows = $result->fetch_assoc()){
          ?>

          <div class="boxproduto"  id="<?php echo $rows["categoria"];?>" style="display: block;">
           <img src="<?php echo $rows["imagem"];?>" width="150px" onclick="destaque(this)">
           <br>
           <p class="descricao"><?php echo $rows["descricao"];?></p>
           <hr>
           <p class="descricao"><strike><?php echo $rows["preco"];?></strike></p>
           <p class="preco"><?php echo $rows["precofinal"];?></p>
          </div> 


         <?php
             }
            } else {
             echo"nenhum produto encontrado";
           }
         ?>
         <!---->
      </div>
     <!---->
    </main>
    <!---->
     <br>
     <br>
     <br>
     <!---->
     <footer id="rodape">
      <p id="fpaga">Formas De Pagamento :</p>
      <img src="./pagamento.png" alt="Formas De Pagamento">
      <p>&copy;Recode Pro</p>
     </footer>
    <!---->

     
  </body>
</html>