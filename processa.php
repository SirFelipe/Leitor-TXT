<?php
  //INCLUI O BANCO DE DADOS
  include 'db.php';
 ?>

<?php
  //Receber os dados do formulário

  /* TESTAR O ARQUIVO AO RECEBER
  $arquivo = $_FILES['arquivo'];
  var_dump($arquivo);
  */

  $arquivo_tmp = $_FILES['arquivo']['tmp_name'];

  //ler todo o arquivo para um array
  $dados = file($arquivo_tmp);
  //var_dump($dados);
  echo " Dados: ". sizeof($dados);

  foreach ($dados as $linha) {
    $linha = trim($linha);
    $valor = explode(',',$linha);
    echo " Linha: ". sizeof($linha);
    echo " Valor: ". sizeof($dados);
    var_dump($valor);
    $nome = $valor[0];
    $email = $valor[1];
    $usuario = $valor[2];
    $senha = $valor[3];
    processaCadastro($nome, $email, $usuario, $senha);
  }


  function processaCadastro($nome, $email, $usuario, $senha){
    global $connection;
    $query = "INSERT INTO usuarios
                (nome, email, usuario, senha)
                  VALUES
                    ('$nome', '$email', '$usuario', '$senha')";
    $resultado = mysqli_query($connection, $query);
  }
 ?>
