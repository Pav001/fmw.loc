<?php

namespace app\controllers;

/**
 * Description of PostsNew
 *
 * @author 1
 */
class PostsNew extends App{
    public function indexAction() {
        echo 'PostsNew::index';
    }
    public function testAction() {
        echo 'PostsNew::test';
    }
    public function testPageAction() {
        echo 'PostsNew::testPage';
    }
    public function befor() {
        echo 'PostsNew::befor';
    }
}

