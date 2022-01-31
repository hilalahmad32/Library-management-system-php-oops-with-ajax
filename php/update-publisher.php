<?php

include 'Database.php';

$obj = new Database();

if (isset($_POST['id']) || isset($_POST['publisher_name'])) {
    $id = $_POST['id'];
    $publisher_name = $_POST['publisher_name'];
    $obj->update('publishers', ['publisher_name' => $publisher_name], "id='{$id}'");
    $data = $obj->getResult();
    if ($data[0]) {
        echo 1;
    } else {
        echo 0;
    }
}
