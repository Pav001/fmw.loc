<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Router
 * 111
 * @author 1
 */
class Router {
    /**
     * таблица маршрутов
     * @var array
     */
    protected static $routes = [];
    /**
    *текущий маршрут
    * @var array 
    */
    protected static $route = [];
    
    /**
     * 
     * @param type $regexp
     * @param type $route
     */
    public static function add($regexp, $route = []) {
        self::$routes [$regexp] = $route;      
    }
    /**
     * 
     * @return type
     */
    public static function getRoutes() {
        return self::$routes;
    }
    /**
     * 
     * @return type
     */
    public static function getRoute() {
        return self::$route;
    }
    /**
     * ищет URL в таблице маршрутов
     * @param string $url входящий URL
     * @return boolean
     */
    public static function matchRoute($url) {
        foreach(self::$routes as $pattern => $route){
            if(preg_match("#$pattern#i", $url, $matches)){
                debug($matches);
                self::$route = $route;
                return true;  
            }
        }
        return false;
    }
    /**
     * 
     * @param type $url  
     */
    public static function dispatch($url) {
        if(self::matchRoute($url)){
            echo 'OK';
        } else {
            http_response_code('404');
            include '404.html';
        }
    }
}
