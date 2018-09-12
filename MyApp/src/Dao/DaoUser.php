<?php

namespace MyApp\Dao;
/**
 * Description of DaoUser
 *
 * @author Erica
 */
class DaoUser {
    /**
     @var type String
     * 
     *   */
    private $conn;
            
    public function __construct(\PDO $conn) {
        $this->conn = $conn;
    }
    public function getAllUsers(){
        
        $sql = "select * from tbl_caixa";
        
        $prepare = $this->conn->prepare($sql); //retorna um valor
        $prepare->execute(); //prepara a sql e executa
        $array = $prepare->fetchAll();    //essa função tras todas as linhas que achar na consulta
        
        var_dump($array);
        
    }
    
    public function getById($id){
        
    }
    
    public function save(\MyApp\Dao\DaoUser $u){
        
    }
    public function remove (\MyApp\Dao\DaoUser $r){
        
    }
}
