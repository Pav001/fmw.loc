<?php

namespace app\controllers;

use app\models\Main;

/**
 * Description of Main
 *
 * @author 1
 */
class MainController extends AppController {
    
//    public $layout = 'main';


    public function indexAction() {
        $model = new Main;
        $res = $model->query('CREATE TABLE posts SELECT * FROM yoyo.post');
        var_dump($res);
        $title = 'PAGE TITLE';
        $this->set (compact('title'));
    }
}
