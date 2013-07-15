<?php
/**
 * 4.3.2 Table Module
 * 
 * Uma única instância controla a lógica de negócios de todos os registros.
 * 
 * Composta pelos dados (db) e pelas regras de negócio (lógica de negócios).
 * 
 * Indicado no caso da aplicação ser baseada em uma estrutura orientada a tabelas
 * onde não temos a necessidade de complexos relacionamentos para 
 * representar o modelo conceitual da aplicação.
 *
 * Esse pattern normalmente é utilizado com o pattern table data gateway (../modelo-de-dados/01-table-gateway.php).
 *
 * (Oglio, Pablo Dall')
 *
 */

/**
 * Essa classe representa uma coleção de registros(?).
 * Se sim, deve-se chamar "Produtos", no plural.
 * 
 */


/**
 * Classe Produtos, representa um Produto a ser vendido.
 */
final class Produtos
{
    //static $recordset = array();
    
    public function adicionar(Produto $object)
    {
		$gateway = new ProdutoGateway;
		$gateway->insert($object);
    }
    
    public function registraCompra(Produto $object)
    {
		$gateway = new ProdutoGateway;
		$gateway->update($object);
    }
    
    public function registraVenda($id, $unidades)
    {
        self::$recordset[$id]['estoque'] -= $unidades;
    }
    
    public function getEstoque($id)
    {
        return self::$recordset[$id]['estoque'];
    }
    
    public function calculaPrecoVenda($id)
    {
        return self::$recordset[$id]['preco_custo'] * 1.3;
    }
}

/**
 * Implementação
 */
$produtos = new Produtos;
$produtos->adicionar(1, 'Vinho', 10, 15);
$produtos->adicionar(2, 'Salame', 20, 20);

echo "estoques: <br>\n";
echo $produtos->getEstoque(1) . "<br>\n";
echo $produtos->getEstoque(2) . "<br>\n";

// exibe os preços de venda
echo "preços de venda : <br>\n";
echo $produtos->calculaPrecoVenda(1) . "<br>\n";
echo $produtos->calculaPrecoVenda(2) . "<br>\n";

// vende algumas unidades
$produtos->registraVenda(1, 5);
$produtos->registraVenda(2, 10);

// repõe o estoque
$produtos->registraCompra(1, 5, 16);
$produtos->registraCompra(2, 10, 22);

// exibe os preços de venda atuais
echo "preços de venda : <br>\n";
echo $produtos->calculaPrecoVenda(1) . "<br>\n";
echo $produtos->calculaPrecoVenda(2) . "<br>\n";
?>

