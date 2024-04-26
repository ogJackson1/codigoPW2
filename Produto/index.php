<?php
require 'Produto.class.php';
$p=new Produto();
$p -> setDescricao('computador Lenovo');
$dados= $p -> getDescricao();

echo '<h2>O contéudo do atributo descrição é: '.$dados;