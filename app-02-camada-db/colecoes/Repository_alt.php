<?php
/*
 * classe TRepository
 * esta classe provê os métodos necessários para manipular coleções de objetos.
 * 
 * A classe que implementar um repository deve aeitar especificações como as estudadas no capítulo anterior (3),
 * que permitam selecionar um determinado grupo de objetos de forma flaxível.
 * 
 * Os objetos devem ser selecionados, excluídos e retornados a partir de uma classe Repository, por meio
 * das especificações de critérios,
 * 
 */
final class TRepository
{
    private $class; // nome da classe manipulada pelo repositório
    
    /* método __construct()
     * instancia um Repositório de objetos
     * @param $class = Classe dos Objetos
     */
    function __construct($class)
    {
        $this->class = $class;
    }
    
    /*
     * método load()
     * Recuperar um conjunto de objetos (collection) da base de dados
     * através de um critério de seleção, e instanciá-los em memória
     */
    function load(TCriteria $criteria)
    {
        // obtém transação ativa
        $transaction = true;
        if ($transaction)
        {
            // executa instrução de DELETE
            $result = $conn->exec($sql);
            return $result;
        }
        else
        {
            // se não tiver transação, retorna uma exceção
            throw new Exception('Não há transação ativa!!');
            
        }

    }
    
    /*
     * método delete()
     * Excluir um conjunto de objetos (collection) da base de dados
     * através de um critério de seleção.
     * @param $criteria = objeto do tipo TCriteria
     */
    function delete(TCriteria $criteria)
    {
        // obtém transação ativa
        $transaction = true;
        if ($transaction)
        {
            // executa instrução de DELETE
            $result = $conn->exec($sql);
            return $result;
        }
        else
        {
            // se não tiver transação, retorna uma exceção
            throw new Exception('Não há transação ativa!!');
            
        }
    }
    
    /*
     * método count()
     * Retorna a quantidade de objetos da base de dados
     * que satisfazem um determinado critério de seleção.
     * @param $criteria = objeto do tipo TCriteria
     */
    function count(TCriteria $criteria)
    {
        
        // instancia instrução de SELECT
        $sql = new TSqlSelect;
        $sql->addColumn('count(*)');
        $sql->setEntity(constant($this->class.'::TABLENAME'));
        
        // atribui o critério passado como parâmetro
        $sql->setCriteria($criteria);
        
        // obtém transação ativa
        if ($conn = TTransaction::get())
        {
            // registra mensagem de log
            TTransaction::log($sql->getInstruction());
            
            // executa instrução de SELECT
            $result= $conn->Query($sql->getInstruction());
            if ($result)
            {
                $row = $result->fetch();
            }
            // retorna o resultado
            return $row[0];
        }
        else
        {
            // se não tiver transação, retorna uma exceção
            throw new Exception('Não há transação ativa!!');
        }
    }
}


/**
 * Implementação
 */

$tr = new TRepository('nada');
var_dump($tr);