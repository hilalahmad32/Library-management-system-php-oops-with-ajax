<?php

include 'Database.php';

$obj = new Database();

if (isset($_POST['id']) || isset($_POST['return_days']) || isset($_POST['fine'])) {
    $id = $_POST['id'];
    $return_days = $_POST['return_days'];
    $fine = $_POST['fine'];
    $obj->update('settings', ['return_days' => $return_days,'fine' => $fine], "id='{$id}'");
    $data = $obj->getResult();
    if ($data[0]) {
        echo 1;
    } else {
        echo 0;
    }
}

?>