<?php

include 'Database.php';

$obj = new Database();

if (isset($_POST['publisher_name'])) {
    $publisher_name = $_POST['publisher_name'];
    $obj->select('publishers', "publisher_name", null,  "publisher_name = '{$publisher_name}'",null, null);
    $is_publisher_name = $obj->getResult();
    
    if (isset($is_publisher_name[0]['publisher_name']) == $publisher_name) {
        echo 2;
    } else {
        $obj->insert('publishers', ['publisher_name' => $publisher_name]);
        $data = $obj->getResult();
        if ($data[0] == 1) {
            echo 1;
        } else {
            echo 0;
        }
    }
}
