<?php

namespace app\controllers;

/**
 * Description of Posts
 *
 * @author 1
 */
class Posts extends \vendor\core\base\controller {
    
    public function indexAction() {
        echo 'Posts::index';
    }
    public function testAction() {
        debug($this->route);
        echo 'Posts::test';
    }
}
