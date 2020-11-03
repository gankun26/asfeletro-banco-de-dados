<?php
    $servername = "localhost";
    $username ="root";
    $password = '';
    $database = "asfeletro";

    $connect = mysqli_connect($servername, $username, $password, $database);

    if(!$connect){
      die("a conexão db falho: ". mysqli_connect_error());
    }


    if(isset($_POST['nome']) && isset($_POST['endereco'])){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];

        $sql = "insert into pedidos (nome, endereco) values ('$nome', '$endereco')";
        $result = $connect->query($sql);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <title>contato- full stack eletro</title>
      <link rel="stylesheet" href="./css/estilo.css">
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
     <h2>Contatos</h2>
     <!---->
     <hr>
     <!---->
     <table border=0 width="100%" cellpadding="20%">
         <tr>
             <td width="50%" align="center">
                 <img src="./email.jpg" width="80px">
                 <font face="Arial" size="4">Contatoeletro@fullstack.com</font>
             </td>
             <!---->
             <td width="50%" align="center">
                <img src="./Whatsapp-logo-pc-600x314.png" width="250px">
                <font face="Arial" size="4">(21)5656-7878</font>
            </td>
         </tr>
     </table>
     <!---->
     <br>
     <br>
     <!---->
     <form>
         <h3>Nos envie sua opinião sobre o site e nosso atendimento, agradeçemos sua contribuição!</h3>
         <h4>Nome:</h4>
         <input type="text" style="width: 400px;">
         <h4>Mensagm: </h4>
         <input type="text" size="53">
         <br>
         <br>
         <!---->
         <input type="submit" value="Enviar">
     </form>
     <!---->
     <br>
     <!---->
     <hr>
     <center>
     <h2 class="h2_contato">Abaixo você pode conferir suas mercadorias!, basta preencher os campos.</h2>
     </center>
     <hr>
     <!---->
       <div>
            <h4>Cliente</h4>
            <input type="text" style="width: 400px;">
            <br>
            <h4>Dados(telefone/cpf)</h4>
            <input type="text" style="width: 400px;">
            <br>
            <br>
            <a href="./conexao.php"><button>Conferir</button></a>
       </div>
       <!---->
       <hr>
       <center>
       <h2>Realizar Cadastro No sistema!, Basta preencher os campos abaixo.</h2>
       </center>
       <hr>
       <!---->
       <form method="post" action="">
       nome:<br>
       <input type="text" name="nome" style="width:500px"><br>
       mensagem:<br>
       <input type="text" name="msg" style="width:500px"><br>
       <br>
       <input type="submit" nome="submit" value="enviar" style="width:505px"><br>
       </form>
     <br>

     <?php
           $sql = "select * from pedidos";
           $result = $connect->query($sql);
       
           if($result->num_rows > 0){
             while($rows = $result->fetch_assoc()){
                echo"nome: ", $rows['nome'], "<br>";
                echo"endereco: ", $rows['endereco'], "<br>";
                echo"<hr>" ;
             }
            } else {
             echo"nenhum comentario encontrado";
           }
         ?>

     <br>
     <!---->
     <center>
     <h4 id="fpaga">Formas De Pagamento :</h4>
     <img src="./pagamento.png" alt="Formas De Pagamento">
    </center>
    <!---->
    <center><font face="Arial" size=2>&copy;Recode Pro</font></center>
    <!---->

     
  </body>
</html>