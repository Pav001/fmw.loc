<?php

namespace vendor\core\base;
/**
 * Description of controller
 *
 * @author 1
 */
abstract class controller {
    
    public $route = [];
    public $view;

    public function __construct($route) {
        $this->route = $route;
    }
}
