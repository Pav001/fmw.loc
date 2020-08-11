<?php

namespace vendor\core\base;

use vendor\core\Db;

/**
 * Description of Model
 *
 * @author 1
 */
abstract class Model {
    protected $pdo;
    protected $table;
    
    public function __construct() {
        $this->pdo = Db::instance();
    }
    public function query($sql) {
        return $this->pdo->execute($sql);
    }
    
    public function findAll($param) {
        $sql = "SELECT * FROM ($this->table)";
        return $this->pdo->query($sql);
    }
}
