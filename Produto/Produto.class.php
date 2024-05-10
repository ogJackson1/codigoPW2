<?php
class Produto{

    private $id;
    private $descricao;
    private $preco;
    private $fornecedor;
    private $pdo;

    public function getId(){
        return $this-> $id;

    }

    public function getDescricao(){
        return $this -> descricao; 

    }

    public function getPreco(){
        return $this -> preco;
    }
    public function getFornecedor (){
        return $this -> fornecedor;

    }

     public function setDescricao($desc){
        $this -> descricao = $desc;

    }

    public function setPreco($preco){
        $this -> preco = $preco;
    }

    public function setFornecedor($fornecedor){
        $this -> fornecedor = $fornecedor;
    }


    /**
     * @author: Jackson Vitor 
     * Metodo para conectar ao banco 
     * Retorna Verdadeiro se conectar ou falso se nao conseguir 
     */
    public function conectar(){
        try {
            $dsn    = "mysql:dbname=etimproduto;host=localhost";
            $dbUser = "root";
            $dbPass = "";
    
            $this->pdo = new PDO($dsn,$dbUser,$dbPass);
            echo"<h2>Conectado ao banco com sucesso!</h2> ";
            
        } catch (\throwable $th) {
            echo"<h2>Sem conexao. Tente mais tarde!</h2>";
            return false;
        }
    }
    
      
}
