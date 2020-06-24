<?php

require_once 'classes/classtable.php';

$table1 = new ClassTable("кухонный", 90, 60, 90, 500);
$table2 = new ClassTable("в гостинной", 90, 90, 120, 1000);

echo $table1->getHello();
echo $table2->getHello();