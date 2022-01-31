<?php

include "Database.php";

$obj = new Database();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $obj->delete('students', "id='{$id}'");
    $data = $obj->getResult();
    if ($data[0] == 1) {
        echo 1;
    } else {
        echo 0;
    }
}
