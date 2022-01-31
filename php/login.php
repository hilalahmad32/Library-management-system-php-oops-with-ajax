<?php
include "Database.php";
$obj = new Database();
session_start();
if (isset($_POST['username']) || isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $obj->select('admins', '*', null, "username='{$username}' AND password='{$password}'", null, null);
    $datas = $obj->getResult();
    if (isset($datas[0]) > 0) {
        foreach ($datas as $data) {
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['username'] = $data['username'];
        }
        echo 1;
    } else {
        echo 0;
    }
}
