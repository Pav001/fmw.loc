<?php

namespace app\controllers;

/**
 * Description of Main
 *
 * @author 1
 */
class Main extends App {
    
//    public $layout = 'main';


    public function indexAction() {
        $name = 'Андрей';
        $hi = 'Hello';
        $colors = [
          'white' => 'белый',
           'black'=> 'черный'
        ];
        $this->set (compact('name','hi','colors'));
    }
}
