<?php
include 'Database.php';
$obj = new Database();

if (isset($_POST['name'])) {
    $name =  $_POST["name"];
    $obj->select('authers', '*', null, "auther_name='{$name}'", null, null);
    $is_name = $obj->getResult();
    if (isset($is_name[0]['auther_name']) == $name) {
        echo 2;
    } else {
        $obj->insert('authers', ['auther_name' => $name]);
        $data = $obj->getResult();
        if ($data[0]) {
            echo 1;
        } else {
            echo 0;
        }
    }
}
