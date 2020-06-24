<?php

require_once 'classes/classtable.php';

function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$table1 = new ClassTable();
$table2 = new ClassTable();
//debug($table1);

$table1->type = "кухонный";
$table1->height = 90;
$table1->width = 60;
$table1->length = 90;
$table1->price = 500;
//debug($table1); 

$table2->type = "в гостинной";
$table2->height = 90;
$table2->width = 90;
$table2->length = 120;
$table2->price = 1000;
//debug($table2); 

echo $table1->getHello();

