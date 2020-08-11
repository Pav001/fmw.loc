  <?php

namespace vendor\core;

/**
 * Description of Db
 *
 * @author 1
 */
class Db {
    protected $pdo;
    protected static $instance;
    
    protected function __construct() {
        $db = require ROOT . '/config/config_db.php';
    $this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass']);
    }
    public function instance($param) {
        if (self::$instance === NULL){
            self::$instance == new self;
        }
        return self::$instance;
    }
    public function execute($sql) {
        $stmt=$this->pdo->prepare($sql);
        return $stmt->execute();
    }
    public function query($sql) {
        $stmt=$this->pdo->prepare($sql);
        $res = $stmt->execute();
        if ($res !== FALSE){
            return $stmt->fetchAll();
        }
        return [];
    } 
}
    