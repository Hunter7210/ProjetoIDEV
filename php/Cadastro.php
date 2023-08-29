<?php
$senhasDiferente = false;
if(isset($_POST['submit']))
{
  include_once('config.php');
  
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $email= $_POST['email'];
  $senha= $_POST['senha'];
  $telefone= $_POST['telefone'];
  $cep= $_POST['cep'];
  $endereco= $_POST['endereco'];
  $confirmeSenha = $_POST['confirmeSenha'];

  $sql = "SELECT * FROM usuarios WHERE email = '$email'";
  $result = $conexao->query($sql);
  
  /* print_r($sql);
  print_r('<br>');
  print_r($result); */

if(mysqli_num_rows($result)<1){

  if($senha == $confirmeSenha){
$senhasDiferente= false;

$result =mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,senha,telefone,cep,endereco) 
VALUES('$nome','$sobrenome','$email','$senha','$telefone','$cep','$endereco')");
header('Location: Index.php');
}else{
  

$senhasDiferente = true;
}
}else{
echo"Email já registrado";
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="./css/cadastro.css">
  <script src="./js/cadastro.js" defer></script>
</head>

<body>
  <div class="signup-container">
    <div class="signup-header">
      <h2>Cadastro</h2>
    </div>
    <div class="signup-form">
      <div class="input-container">
        <input class="signup-input name-input" type="text" placeholder="Nome">
        <input class="signup-input surname-input" type="text" placeholder="Sobrenome">
      </div>
      <div class="input-container">
        <input class="signup-input" type="email" placeholder="Email">
      </div>
      <div class="input-container">
        <input class="signup-input" type="tel" placeholder="Telefone">
        <input class="signup-input" type="text" placeholder="CEP">
      </div>
      <div class="input-container">
        <input class="signup-input" type="text" placeholder="Endereço">
      </div>
      <div class="input-container">
        <input class="signup-input" type="password" placeholder="Senha">
        <input class="signup-input" type="password" placeholder="Confirmar Senha">
      </div>
      <button class="signup-button">Cadastrar</button>
    </div>
    <div class="signup-footer"></div>
  </div>
</body>

<script src="Script.js"></script>
</html>