<?php

class Produto {

    private $id;
    private $descricao;
    private $preco;
    private $fornecedor;
    private $pdo;

    public function getId() {
        return $this->id;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }

    public function setDescricao($new_descricao) {
        $this->descricao = $new_descricao;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setFornecedor($fornecedor) {
        $this-> fornecedor = $fornecedor;
    }

    /**
     * @author: Jackson
     * Metodo para conectar ao banco
     * retorna Verdadeiro se conectar ou falso se não conseguir
     */


    public function conectar(){
        try {
            $dsn    = "mysql:dbname=etimproduto;host=localhost";
            $dbuser = "root";
            $dbpass = "";

            $this->pdo = new PDO($dsn, $dbuser, $dbpass);
            echo "<h2>Conectado ao banco com sucesso!";
            return true;

        } catch (\Throwable $th) {
            echo "<h2>Sem conexao. Tente mais tarde";
            return false;
        }
    }     
}

// Exemplo de uso:
$produto = new Produto();
$produto->setDescricao("Sapato elegante");
echo "Descrição do produto: " . $produto->getDescricao();
?>
