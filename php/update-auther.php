<?php

include 'Database.php';

$obj = new Database();

if (isset($_POST['id']) || isset($_POST['name'])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $obj->update('authers', ['auther_name' => $name], "id='{$id}'");
    $data = $obj->getResult();
    if ($data[0]) {
        echo 1;
    } else {
        echo 0;
    }
}
