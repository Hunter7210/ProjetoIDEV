<?php

if(isset($_POST['submited']))
{
  include_once('config.php');
  
  
  $nome = $_POST['nome'];
  $preco= $_POST['preco'];
 

  $sql = "SELECT * FROM banco_de_dado_loja.produtos WHERE nome = '$nome'";
  $result = $conexao->query($sql);
  /* print_r($sql);
  print_r($result); */

if(mysqli_num_rows($result)<1){

  

$result =mysqli_query($conexao, "INSERT INTO produtos(nome,preco) 
VALUES('$nome','$preco')");

}else{
  echo 'Produto Existe';

}
}

?>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ProjetoIDEV/css/Cadastro.css">
</head>
<body>
  

  <div class="camada1">
    <div class="embaca" id="fundoEmbaca">
    <div class="container">
        <h2>Cadastro</h2>
        <br><br>
        <form action="editConsulta.php" method="POST">
         
          <input type="text" placeholder="nome" id="nome" name="nome">
          <br><br>
          <input type="text" placeholder="preço" id="preco"  name="preco">
          
          <br><br>
          <input type="submit" value="Cadastrar" id="submit" name="submited">
        </form>
      

      </div>
      </div>
      </div>
     
</body>

</html> -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Produtos</title>
    <link rel="stylesheet" href="./css/pagadm.css">
</head>

<body>
    <div class="container">
        <h1>Gerenciamento de Produtos</h1>
        <form id="product-form">
            <label for="product-name">Nome/ID do Produto:</label>
            <input type="text" id="product-name" required>
            <label for="product-price">Preço do Produto:</label>
            <input type="number" id="product-price" required>
            <button type="submit">Adicionar Produto</button>
        </form>
        <div id="product-list"></div>
    </div>
    <script src="./script/pagadm.js"></script>
</body>

</html>
