<?php
namespace Album\Model;

use Zend\Db\TableGateway\TableGateway;

class UserTable {
    public $tableGatway;
    
    public function __construct(TableGateway $tableGatway) {
        $this->tableGatway = $tableGatway;
    }
    
    public function fetchAll(){
        $resultSet = $this->tableGatway->select();
        return $resultSet;
    }
    
    

}
?>
