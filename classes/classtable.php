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
    
    public function __construct($type, $height, $width, $length, $price){
        //$this->title = $title;
        $this->type = $type;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
        $this->price = $price;
    }  
    public function getHello() {
        return  "Я {$this->title} {$this->type} <br>
        Высота:{$this->height} см <br>
        Ширина:{$this->width} см<br>
        Длина:{$this->length} см<br>
        Цена: {$this->price} долларов США<br><br>";
     }
}

