<?php

include 'Database.php';

$obj = new Database();

if (isset($_POST['id']) || isset($_POST['category_name'])) {
    $id = $_POST["id"];
    $category_name = $_POST["category_name"];
    $obj->update('categorys', ['category_name' => $category_name], "id='{$id}'");
    $data = $obj->getResult();
    if ($data[0]) {
        echo 1;
    } else {
        echo 0;
    }
}
