<?php

include 'Database.php';

$obj = new Database();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $obj->select('books', "book_publisher", null, "book_publisher='{$id}'", null, null);
    $data = $obj->getResult();
    if (isset($data[0]['book_publisher']) == $id) {
        echo 2;
    } else {
        $obj->delete('publishers', "id='{$id}'");
        $data = $obj->getResult();
        if ($data[0] == 1) {
            echo 1;
        } else {
            echo 0;
        }
    }
}
