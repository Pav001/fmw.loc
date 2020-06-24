<?php

/**
 * Description of classtable
 *
 * @author 1
 */
class classtable {
    public $title = "Стол";
    public $type;
    public $height = "Высота";
    public $width = "Ширина";
    public $length = "Длина";
    public $price = 0;
    
//    public function __construct($title, $type, $h, $w, $l, $price){
//        $this->title = $title;
//        $this->type = $type;
//        $this->height = $h;
//        $this->width = $w;
//        $this->length = $l;
//        $this->price = $price;
//    }
    public function getHello() {
        return  "Я {$this->title} <br>
        {$this->type} <br>
        Высота:{$this->height} <br>
        Ширина:{$this->idth}<br>
        Длина:{$this->length}<br>
        Цена: {$this->price}<br>";
     }
}

