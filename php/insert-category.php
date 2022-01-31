<?php

include 'Database.php';

$obj = new Database();

if (isset($_POST['category_name'])) {
    $category_name = $_POST['category_name'];
    $obj->select('categorys', 'category_name', null, "category_name='{$category_name}'",  null,null);
    $is_category = $obj->getResult();
    if (isset($is_category[0]['category_name']) == $category_name) {
        echo 2;
    } else {
        $obj->insert('categorys', ['category_name' => $category_name]);
        $data = $obj->getResult();
        if ($data[0] == 1) {
            echo 1;
        } else {
            echo 0;
        }
    }
}
