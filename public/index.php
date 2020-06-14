<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$query = rtrim($_SERVER {'QUERY_STRING'}, '/');

require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';

Router::add('^$',['controller'=>'Main', 'action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
        
Router::dispatch($query);

