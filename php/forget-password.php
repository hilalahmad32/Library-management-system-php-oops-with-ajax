<?php

include "Database.php";

$obj=new Database();
session_start();
if(isset($_POST['old_password']) || isset($_POST['new_password'])){
    $username=$_SESSION["username"];
    $old_password=md5($_POST['old_password']);
    $new_password=md5($_POST['new_password']);

    $obj->update('admins',['password'=>$new_password],"username='{$username}' AND password='{$old_password}'");
    $data= $obj->getResult();
    if($data[0] == 1){
        echo 1;
    }else{
        echo 0;
    }

}
