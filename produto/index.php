<?php
require "produto.class.php";
$p = new produto();
$p->conectar();

$p->inserirProduto("Geladeira", "Duplex", 5000,"Brastemp");




<?php
re 
if( isset(  $_POST['nome'])) {
    $nome       = $_POST['nome'];
    $descricao  = $_POST['descricao'];
    $preco      = $_POST['preco'];
    $fornecedor = $_POST['forn'];

  // echo "Produto   ....: " .$nome"<br>";
  // echo "Descricao ....: " .$descricao"<br>";
  // echo "Preco   ....: " .$preco"<br>";
  // echo "Fornecedor   ....: " .$fornecedor"<br>";

  $produto = new Produto(); 
  $produto->inseirProduto($nome, $descricao, $preco, $fornecedor);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="styleheet" href= "estilo.css">

    <title>Cadastrar  Produtos</title>
</head>
<body>
<div> class="container"
     <dIv> class= "Centralizar"
        <form action="" method= "post">
        Nome : <br>
        <input type="text" name="nome"><br></br>
        Descricao :<br>
        <input type="text" name="descricao"><br></br>
        Preço:<br>
        <input type="text" name="preco"><br></br>
        Fornecedor:<br>
        <input type="text" name="forn"><br></br>
        <input type="button" class='submit' value="Cadastrar"><br></br>

   </form>
</div>
  </div>       
    
</body>
</html>
