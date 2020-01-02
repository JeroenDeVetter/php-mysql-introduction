<?php
require "connection.php";
//this line makes PHP behave in a more strict way
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

$db = openConnection();

$select = $db->query('SELECT * FROM Students');

$total_column = $select->columnCount();
var_dump($total_column);

for ($counter = 0; $counter < $total_column; $counter ++) {
    $meta = $select->getColumnMeta($counter);
    $column[] = $meta['name'];
}
print_r($column);
