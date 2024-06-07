<?php
require "produto.class.php";
$p = new produto();
$p->conectar();

$p->inserirProduto("Geladeira", "Duplex", 5000,"Brastemp");