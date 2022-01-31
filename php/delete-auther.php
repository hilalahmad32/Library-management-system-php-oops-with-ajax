<?php

include 'Database.php';

$obj = new Database();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $obj->select('books', "book_auther", null, "book_auther='{$id}'", null, null);
    $data = $obj->getResult();
    if (isset($data[0]['book_auther']) == $id) {
        echo 2;
    } else {
        $obj->delete('authers', "id='{$id}'");
        $authers = $obj->getResult();
        if ($authers[0] == 1) {
            echo 1;
        } else {
            echo 0;
        }
    }
}
