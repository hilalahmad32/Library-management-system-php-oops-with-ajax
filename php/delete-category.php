<?php

include "Database.php";

$obj = new Database();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $obj->select('books', "book_category", null, "book_category='{$id}'", null, null);
    $data = $obj->getResult();
    if (isset($data[0]['book_category']) == $id) {
        echo 2;
    } else {
        $obj->delete('categorys', "id='{$id}'");
        $data = $obj->getResult();
        if ($data[0] == 1) {
            echo 1;
        } else {
            echo 0;
        }
    }
}
